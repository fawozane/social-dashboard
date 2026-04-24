import * as echarts from 'echarts';
import '../Scss/main.scss';

window.echarts = echarts;

let barChart = null;
let lineChart = null;

/*
 * CONFIG
 */
const configElement = document.getElementById('social-dashboard-config');
let config = { ajaxUrl: '' };

try {
    if (configElement?.textContent.trim()) {
        config = JSON.parse(configElement.textContent.trim());
    }
} catch (e) {
    console.error('JSON Config Fehler:', e);
}

const ajaxUrl = config.ajaxUrl;

/*
 * HELPERS
 */
function sum(arr, key) {
    return arr.reduce((a, b) => a + Number(b[key] || 0), 0);
}

function setDelta(el, current, previous) {
    if (!el) return;

    const diff = current - previous;
    const percent = previous ? Math.round((diff / previous) * 100) : 0;

    el.textContent = `${diff >= 0 ? '+' : ''}${percent}%`;
    el.classList.remove('up', 'down');
    el.classList.add(diff >= 0 ? 'up' : 'down');
}

function updateScore(kpi) {
    const el = document.getElementById('dashboardScore');
    if (!el) return;

    const score = Number(kpi?.score ?? 0);

    console.log('SET SCORE:', score);

    el.textContent = score;

    el.style.color =
        score > 70 ? 'green' :
            score > 40 ? 'orange' :
                'red';
}

function updateTips(json) {
    const el = document.getElementById('dashboardTips');
    if (!el) {
        console.warn('TIP LIST NICHT GEFUNDEN');
        return;
    }

    el.innerHTML = '';

    if (Array.isArray(json.tips) && json.tips.length > 0) {
        json.tips.forEach(tip => {
            const li = document.createElement('li');
            li.textContent = tip;
            el.appendChild(li);
        });
    } else {
        el.innerHTML = '<li>Keine Optimierung notwendig</li>';
    }

    console.log('TIP RENDER DONE:', el.innerHTML);
}

function initCharts() {
    const barEl = document.getElementById('barChart');
    const lineEl = document.getElementById('lineChart');

    if (!barEl || !lineEl) return false;

    if (!barChart) barChart = echarts.init(barEl);
    if (!lineChart) lineChart = echarts.init(lineEl);

    return true;
}

/*
 * RENDER
 */
function renderDashboard(json) {
    console.log('Dashboard Daten:', json);

    const current = (json.current || []).sort((a, b) => a.metric_date - b.metric_date);
    const previous = json.previous || [];
    const kpi = json.kpi || {};

    const likesNow = sum(current, 'likes');
    const commentsNow = sum(current, 'comments');
    const likesPrev = sum(previous, 'likes');
    const commentsPrev = sum(previous, 'comments');

    /*
     * KPI
     */
    const likesEl = document.getElementById('likesTotal');
    if (likesEl) {
        likesEl.textContent = kpi.totalLikes ?? likesNow;
    }

    const commentsEl = document.getElementById('commentsTotal');
    if (commentsEl) {
        commentsEl.textContent = kpi.totalComments ?? commentsNow;
    }

    setDelta(document.getElementById('likesDelta'), likesNow, likesPrev);
    setDelta(document.getElementById('commentsDelta'), commentsNow, commentsPrev);

    /*
     * SCORE + ENGAGEMENT
     */
    updateScore(kpi);

    const engagementEl = document.getElementById('dashboardEngagement');
    if (engagementEl) {
        engagementEl.textContent = (kpi.engagementRate ?? 0) + '%';
    }

    /*
     * CHARTS
     */
    if (!initCharts()) return;

    const likesData = current.map(d => Number(d.likes || 0));
    const commentsData = current.map(d => Number(d.comments || 0));

    const dates = current.map(d =>
        new Date((d.metric_date || 0) * 1000).toLocaleDateString('de-DE', {
            day: '2-digit',
            month: '2-digit'
        })
    );

    barChart.setOption({
        xAxis: { type: 'category', data: ['Likes', 'Comments'] },
        yAxis: {},
        series: [{ type: 'bar', data: [likesNow, commentsNow] }]
    });

    lineChart.setOption({
        tooltip: { trigger: 'axis' },
        xAxis: { type: 'category', data: dates },
        yAxis: {},
        series: [
            { type: 'line', data: likesData, smooth: true },
            { type: 'line', data: commentsData, smooth: true }
        ]
    });

    /*
     * TYPO3 FIX: Tips erst ganz am Ende rendern
     */
    requestAnimationFrame(() => {
        setTimeout(() => {
            updateTips(json);
        }, 80);
    });
}

/*
 * LOAD DATA
 */
async function loadData() {
    if (!ajaxUrl) return;

    try {
        const platform = document.getElementById('platform')?.value || 'all';
        const days = Number(document.getElementById('range')?.value || 7);

        const res = await fetch(`${ajaxUrl}&platform=${platform}&days=${days}`);

        const json = await res.json();

        renderDashboard(json);

    } catch (e) {
        console.error('AJAX Fehler:', e);
    }
}

/*
 * INIT (TYPO3 SAFE)
 */
function init() {
    const observer = new MutationObserver(() => {
        const btn = document.getElementById('applyFilter');

        if (btn) {
            console.log('Dashboard ready');

            btn.addEventListener('click', loadData);
            document.getElementById('range')?.addEventListener('change', loadData);

            loadData();

            setInterval(loadData, 240000);

            observer.disconnect();
        }
    });

    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
}

init();