<div id="piechart"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myMixedChart" width="800" height="600"></canvas>

<div class="frmcontent w60">
        <canvas id="myLineChart"></canvas>
    </div>

    <div class="frmcontent w60">
        <canvas id="myMixedChart"></canvas>
    </div>

    <script>
        // Dữ liệu từ PHP
        var dstk = <?php echo json_encode($dstk); ?>;

        // Tạo mảng cho biểu đồ
        var labels = [];
        var maxgiaData = [];
        var mingiaData = [];
        var avgData = [];

        dstk.forEach(function(tk) {
            labels.push(tk.name);
            maxgiaData.push(tk.maxgia);
            mingiaData.push(tk.mingia);
            avgData.push(tk.avg);
        });

        // Tạo biểu đồ mixed
        var ctx = document.getElementById('myMixedChart').getContext('2d');
        var myMixedChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [
                    {
                        label: 'Giá cao nhất',
                        data: maxgiaData,
                        backgroundColor: 'rgba(90, 192, 192, 1)',
                        borderColor: 'black',
                        borderWidth: 1
                    },
                    {
                        label: 'Giá thấp nhất',
                        data: mingiaData,
                        backgroundColor: 'rgba(255, 0, 0, 1)',
                        borderColor: 'black',
                        borderWidth: 1
                    },
                    {
                        label: 'Giá trung bình',
                        data: avgData,
                        backgroundColor: '#FFD700',
                        borderColor: 'black',
                        borderWidth: 1
                    }
                ]
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
    
