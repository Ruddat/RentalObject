<div class="card">
    <div class="card-header">
        <h5>@autotranslate("Time Spent (Daily in Minutes)", app()->getLocale())</h5>
    </div>
    <div class="card-body">
        <div id="timeSpent2"></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const chartData = @json($timeSpentData);
            const averageTime = @json($averageTimeData);

            const options = {
                series: [
                    {
                        name: 'Spent Time (minutes)',
                        type: 'column',
                        data: chartData.timeSpent,
                    },
                    {
                        name: 'Average Time (minutes)',
                        type: 'line',
                        data: averageTime,
                    }
                ],
                chart: {
                    height: 280,
                    type: 'line',
                    stacked: false,
                },
                xaxis: {
                    categories: chartData.categories,
                    title: {
                        text: 'Date',
                    },
                },
                yaxis: {
                    title: {
                        text: 'Time Spent (minutes)',
                    },
                },
                colors: ['#1E90FF', '#FF6347'], // Blau für Balken, Rot für Linie
            };

            const chart = new ApexCharts(document.querySelector("#timeSpent2"), options);
            chart.render();
        });
    </script>
</div>
