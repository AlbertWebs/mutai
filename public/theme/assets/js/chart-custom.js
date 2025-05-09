var densityCanvas = document.getElementById("consulting-chart").getContext('2d');
Chart.defaults.global.defaultFontFamily = "Marcellus";
Chart.defaults.global.defaultFontSize = 14;
var barChart = new Chart(densityCanvas, {
    type: 'bar',
    data: {
        labels: ["2018", "2019", "2020", "2021", "2022", "2023","2024", "2025"],
        datasets: [{
            label: 'Growth Rate',
            backgroundColor: '#324662',
            borderColor: '#324662',
            data: [66, 78, 88, 70, 90, 92, 93, 98],
        }, {
            label: 'Consulting Rate',
            backgroundColor: '#789FC0',
            borderColor: '#789FC0',
            data: [53, 69, 95, 82, 96, 87, 90, 95],
        }]
    },
    options: {
        plugins: {
            title: {
                display: true,
                text: 'Chart.js Bar Chart - Stacked'
            },
        },
        interaction: {
            intersect: false,
        },
        responsive: true
    }
});
