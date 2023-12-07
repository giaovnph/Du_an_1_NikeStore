<div id="piechart"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myMixedChart" width="800" height="600"></canvas>

    <div class="frmcontent w60">
        <canvas id="myBarChart"></canvas>
    </div>
    <div class="bieudo" style="">
        <script>
            // Dữ liệu từ PHP
            var dstk = <?php echo json_encode($dstk); ?>;

            // Tạo mảng cho biểu đồ
            var labels = [];
            var countspData = [];

            dstk.forEach(function(tk) {
                labels.push(tk.name);
                countspData.push(tk.countsp);
            });

            // Tạo biểu đồ bar
            var ctx = document.getElementById('myBarChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Số lượng',
                        data: countspData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
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
    
