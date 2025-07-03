/**
* Theme: Dashtrap - Tailwind CSS 3 Admin Layout & UI Kit Template
* Author: MyraStudio
* Module/App: dashboard js
*/

import ApexCharts from "apexcharts";

"use strict";

// chart5 (Radial)
var options = {
    chart: {
        type: 'radialBar',
        height: 295,
        dropShadow: {
            enabled: true,
            top: 5,
            left: 0,
            bottom: 0,
            right: 0,
            blur: 5,
            color: '#45404a2e',
            opacity: 0.35
        },
    },
    plotOptions: {
        radialBar: {
            offsetY: -10,
            startAngle: 0,
            endAngle: 270,
            hollow: {
                margin: 5,
                size: '50%',
                background: 'transparent',
            },
            track: {
                show: false,
            },
            dataLabels: {
                name: {
                    fontSize: '18px',
                },
                value: {
                    fontSize: '16px',
                    color: '#50649c',
                },

            }
        },
    },
    colors: ["#f472b6", "#38bdf8", "#a78bfa"], // Tailwind's Pink, Sky, and Violet shades
    stroke: {
        lineCap: 'round'
    },
    series: [81, 70, 110],
    labels: ['Placed', 'Shipped', 'Delivered'],
    legend: {
        show: false,
    },
    responsive: [{
        breakpoint: 480,
        options: {
            legend: {
                show: false,
                floating: true,
                position: 'left',
                offsetX: 10,
                offsetY: 0,
            }
        }
    }]
}

var chart = new ApexCharts(document.querySelector("#radial-chart"), options);
chart.render();


// chart6 (Line chart)
var options = {
    chart: {
        height: 322,
        type: "area",
        toolbar: {
            show: false,
        },
        dropShadow: {
            enabled: true,
            top: 12,
            left: 0,
            bottom: 0,
            right: 0,
            blur: 2,
            color: "rgba(132, 145, 183, 0.3)",
            opacity: 0.35,
        },
    },
    colors: ["#f472b6", "#38bdf8"], // Tailwind's Pink and Sky shades
    dataLabels: {
        enabled: false,
    },
    stroke: {
        show: true,
        curve: "smooth",
        width: [2, 2],
        dashArray: [0, 4],
        lineCap: "round",
    },
    series: [
        {
            name: "Income",
            data: [60, 40, 80, 50, 95, 65, 100, 70, 120, 85, 140, 90],
        },
        {
            name: "Expenses",
            data: [25, 50, 30, 55, 35, 70, 45, 85, 55, 95, 70, 105],
        },
    ],

    labels: [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dqmqrwwerec",
    ],

    yaxis: {

        labels: {
            formatter: function (value) {
                return value + "k";
            },
            offsetX: -12,
            offsetY: 0,
        },
    },
    grid: {
        strokeDashArray: 3,
        xaxis: {
            lines: {
                show: true,
            },
        },
        yaxis: {
            lines: {
                show: false,
            },
        },
    },
    legend: {
        show: false,
    },

    fill: {
        type: "gradient",
        gradient: {
            type: "vertical",
            shadeIntensity: 1,
            inverseColors: !1,
            opacityFrom: 0.05,
            opacityTo: 0.05,
            stops: [45, 100],
        },
    },
};

var chart = new ApexCharts(document.querySelector("#jj-chart"), options);
chart.render();
