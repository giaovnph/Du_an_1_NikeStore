<div id="piechart"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myMixedChart" width="800" height="600"></canvas>

<div class="frmcontent w60">
        <canvas id="myLineChart"></canvas>
    </div>

    <script>
        var dstk = <?php echo json_encode($dstk); ?>;
        var labels = [];
        var countspData = [];

        dstk.forEach(function(tk) {
            labels.push(tk.name);
            countspData.push(tk.countsp);
        });

        var ctx = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Số lượng',
                    data: countspData,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2,
                    fill: false
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    </div>
    
