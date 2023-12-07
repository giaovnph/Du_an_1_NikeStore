<div id="piechart"></div>

<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<canvas id="myMixedChart" width="400" height="400"></canvas>

<script>
    // Lấy tham chiếu đến thẻ canvas
    var ctx = document.getElementById('myMixedChart').getContext('2d');

    // Dữ liệu mẫu cho biểu đồ mixed chart
    var data = {
        labels: ['Mới và nổi bật', 'Trẻ em', 'Nữ', 'Nam'],
        datasets: [{
            label: 'Monthly Sales (Line)',
            type: 'line',
            data: [20, 60, 70, 65],
            borderColor: 'rgb(75, 192, 192)',
            fill: false
        }, {
            label: 'Monthly Revenue (Bar)',
            type: 'bar',
            data: [200, 180, 220, 210],
            backgroundColor: 'rgba(100, 10, 0.1, 0.05)'
        }]
    };

    // Cấu hình các tùy chọn cho biểu đồ
    var options = {
        responsive: true,
        maintainAspectRatio: false,
        title: {
            display: true,
            text: 'Biểu đồ Mixed Chart đơn giản'
        },
        scales: {
            x: {
                type: 'category',
                labels: data.labels
            },
            y: {
                beginAtZero: true
            }
        }
    };

    // Tạo biểu đồ mixed chart
    var myMixedChart = new Chart(ctx, {
        type: 'bar',
        data: data,
        options: options
    });
</script>
