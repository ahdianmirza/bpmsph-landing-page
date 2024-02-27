const konsulChart = () => {
    document.addEventListener("DOMContentLoaded", () => {
        fetch("http://bpmsph.test/api/total-konsul-visitors")
            .then((response) => response.json())
            .then((data) => {
                let chartData = {
                    totalVisitors: data.map(
                        (visitor) => visitor.total_visitors
                    ),
                    date: data.map((date) => date.konsul_date),
                };

                const chartOptions = {
                    series: [
                        {
                            name: "Total Visitors",
                            data: chartData.totalVisitors,
                        },
                    ],
                    chart: {
                        height: 350,
                        type: "area",
                        toolbar: {
                            show: false,
                        },
                    },
                    markers: {
                        size: 4,
                    },
                    colors: ["#4154f1", "#2eca6a", "#ff771d"],
                    fill: {
                        type: "gradient",
                        gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100],
                        },
                    },
                    dataLabels: {
                        enabled: false,
                    },
                    stroke: {
                        curve: "smooth",
                        width: 2,
                    },
                    xaxis: {
                        type: "date",
                        categories: chartData.date,
                    },
                    tooltip: {
                        x: {
                            format: "dd/MM/yy",
                        },
                    },
                };

                new ApexCharts(
                    document.querySelector("#konsul-chart"),
                    chartOptions
                ).render();
            })
            .catch((err) => console.info("Something wrong: ", err));
    });
}
konsulChart();