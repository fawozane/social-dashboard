import * as echarts from 'echarts';
import '../Scss/main.scss';

let barChart = null;
let lineChart = null;
let gaugeChart = null;

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

function animateValue(el, start, end, duration = 600) {
    let startTime = null;

    function animate(time) {
        if (!startTime) startTime = time;

        const progress = Math.min((time - startTime) / duration, 1);
        const value = Math.floor(progress * (end - start) + start);

        el.textContent = value;

        if (progress < 1) requestAnimationFrame(animate);
    }

    requestAnimationFrame(animate);
}

function setDelta(el, current, previous) {
    if (!el) return;

    const diff = current - previous;
    const percent = previous ? Math.round((diff / previous) * 100) : 0;

    el.textContent = `${diff >= 0 ? '+' : ''}${percent}%`;

    el.classList.remove('up', 'down');
    el.classList.add(diff >= 0 ? 'up' : 'down');
}

/*
 * SCORE
 */
function updateScore(kpi) {
    const el = document.getElementById('dashboardScore');
    if (!el) return;

    const score = Number(kpi?.score ?? 0);

    animateValue(el, 0, score);

    el.classList.remove('low', 'medium', 'high');

    if (score > 70) el.classList.add('high');
    else if (score > 40) el.classList.add('medium');
    else el.classList.add('low');
}

/*
 * TIPS
 */
function updateTips(json) {
    const el = document.getElementById('dashboardTips');
    if (!el) return;

    el.innerHTML = '';

    if (json.tips?.length) {
        json.tips.forEach(tip => {
            const li = document.createElement('li');
            li.textContent = tip;
            el.appendChild(li);
        });
    } else {
        el.innerHTML = '<li>🔥 Perfekt – keine Optimierung nötig</li>';
    }
}

/*
 * CHART INIT
 */
function initCharts() {
    const barEl = document.getElementById('barChart');
    const lineEl = document.getElementById('lineChart');

    if (!barEl || !lineEl) return false;

    if (!barChart) barChart = echarts.init(barEl);
    if (!lineChart) lineChart = echarts.init(lineEl);

    return true;
}

/*
 * GAUGE
 */
function updateGauge(kpi) {
    const el = document.getElementById('scoreGauge');
    if (!el) return;

    if (!gaugeChart) {
        gaugeChart = echarts.init(el);
    }

    const score = Number(kpi.score ?? 0);

    gaugeChart.setOption({
        series: [{
            type: 'gauge',
            progress: { show: true, width: 14 },
            axisLine: {
                lineStyle: {
                    width: 14,
                    color: [
                        [0.4, '#ef4444'],
                        [0.7, '#f59e0b'],
                        [1, '#22c55e']
                    ]
                }
            },
            detail: {
                formatter: '{value}',
                fontSize: 22
            },
            data: [{ value: score }]
        }]
    });
}

/*
 * RENDER
 */
function renderDashboard(json) {
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
    animateValue(document.getElementById('likesTotal'), 0, kpi.totalLikes ?? likesNow);
    animateValue(document.getElementById('commentsTotal'), 0, kpi.totalComments ?? commentsNow);

    setDelta(document.getElementById('likesDelta'), likesNow, likesPrev);
    setDelta(document.getElementById('commentsDelta'), commentsNow, commentsPrev);

    /*
     * SCORE
     */
    updateScore(kpi);

    document.getElementById('dashboardEngagement').textContent =
        (kpi.engagementRate ?? 0) + '%';

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
        series: [{
            type: 'bar',
            data: [likesNow, commentsNow]
        }]
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

    updateGauge(kpi);

    requestAnimationFrame(() => {
        setTimeout(() => updateTips(json), 50);
    });
}

/*
 * LOAD
 */
async function loadData() {
    if (!ajaxUrl) return;

    const platform = document.getElementById('platform')?.value || 'all';
    const days = document.getElementById('range')?.value || 7;

    const res = await fetch(`${ajaxUrl}&platform=${platform}&days=${days}`);
    const json = await res.json();

    renderDashboard(json);
}

/*
 * INIT
 */
function init() {
    const observer = new MutationObserver(() => {
        const btn = document.getElementById('applyFilter');

        if (btn) {
            btn.addEventListener('click', loadData);
            document.getElementById('range')?.addEventListener('change', loadData);

            loadData();
            setInterval(loadData, 240000);

            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
}

init();