import '@fawozane/social-dashboard/echarts.min.js';

export function initialize() {
    console.log('Widget JS läuft');

    const containers = document.querySelectorAll('.social-chart-container');

    containers.forEach(container => {
        if (container.dataset.initialized) return;

        const likes = Number(container.dataset.likes) || 0;
        const comments = Number(container.dataset.comments) || 0;

        const chart = echarts.init(container);

        chart.setOption({
            tooltip: {},
            xAxis: {
                type: 'category',
                data: ['Likes', 'Kommentare']
            },
            yAxis: {},
            series: [{
                type: 'bar',
                data: [likes, comments]
            }]
        });

        container.dataset.initialized = "true";
    });
}