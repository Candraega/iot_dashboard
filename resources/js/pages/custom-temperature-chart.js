// public/js/custom-temperature-chart.js

import ApexCharts from "apexcharts"; // Jika kamu pakai module bundler (Vite/Mix)
// Jika tidak, dan langsung lewat CDN, HAPUS baris ini

document.addEventListener("DOMContentLoaded", function () {
    const options = {
        chart: {
            height: 380,
            type: 'line',
            zoom: { enabled: false },
            toolbar: { show: false }
        },
        colors: ['#f46a6a'],
        dataLabels: { enabled: false },
        stroke: {
            width: 3,
            curve: 'smooth',
        },
        series: [{
            name: "Temperature (°C)",
            data: [28.2, 29.5, 30.1, 30.8, 31.2, 32.5, 33.0]
        }],
        title: {
            text: 'Temperature Monitoring',
            align: 'left',
            style: {
                fontWeight: '500',
            },
        },
        markers: {
            size: 4,
            hover: { sizeOffset: 4 }
        },
        xaxis: {
            categories: ['10:00', '10:10', '10:20', '10:30', '10:40', '10:50', '11:00'],
            title: { text: 'Time' }
        },
        yaxis: {
            title: { text: 'Temperature (°C)' },
            min: 20,
            max: 40
        },
        grid: { borderColor: '#f1f1f1' }
    };

    const chart = new ApexCharts(document.querySelector("#custom-temperature-chart"), options);
    chart.render();
});
