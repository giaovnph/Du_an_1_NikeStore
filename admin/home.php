<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .containerr {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(48%, 1fr));
        gap: 20px;
        margin-left: 130px;
        height: auto;
    }

    .col-md-6 {
        width: 600px;
        margin-left: 160px;
        background-color: white;
        height: 700px;
        border: 3px solid #ececec;
        margin-top: 20px;
        padding-top: 40px;
    }

    .col-md-7 {
        width: 600px;
        margin-left: 67px;
        background-color: white;
        height: 700px;
        border: 3px solid #ececec;
        margin-top: 20px;
        padding-top: 40px;

    }

    .col-md,
    .col-md1 {
        margin: 0;
    }

    .frmcontent {
        margin-right: 160px;
        width: 100%;
    }

    h2,
    label,
    span {
        color: black;
        margin-bottom: 30px;
        margin-left: 10px;
        font-size: 19px;
    }

    .bd {
        padding: 60px 100px;
        width: 1030px;
        margin-left: 140px;
        height: 800px;
        margin-top: 100px;
        background-color: white;
        margin-bottom: 238px;



    }
</style>
<div class="containerr">
    <!-- Biểu đồ Loại Hàng -->
    <div class="col-md-6">
        <div class="col-md">
            <div class="" style="">
                <h2>Danh Sách sản phẩm được quan tâm nhiều nhất</h2>
            </div>
            <div class="frmcontent w60">
                <canvas id="myChart" width="290px" height="250px"></canvas>
            </div>
            <?php $listsp = loadall_sanpham_top4() ?>
            <script>
                var listdanhmuc = <?php echo json_encode($listsp); ?>;

                var labels = [];
                var data = [];

                listdanhmuc.forEach(function(sanpham) {
                    labels.push(sanpham.name);
                    data.push(sanpham.luotxem);
                });

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Lượt xem',
                            data: data,
                            backgroundColor: 'rgba(90, 192, 192, 1)',
                            borderColor: 'White',
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
    </div>

    <!-- Biểu đồ Thống kê -->
    <div class="col-md-7">
        <div class="col-md1">
            <div class="mb" style="">
                <h2>Số Lượng sản phẩm từng loại</h2>
            </div>
            <div class="frmcontent w60">
                <canvas id="myLineChart" width="290px" height="250px"></canvas>
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
                            borderColor: 'rgba(255, 0, 0, 1)',
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
    </div>


    <!-- DANH SACH TAI KHOAN -->
    <div class="bd">
    <div class="mb" style="">
                <h2>Giá Cả Sản Phẩm Từng Loại Danh Mục</h2>
            </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <canvas id="myMixedChart" width="1020" height="700"></canvas>

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
                    datasets: [{
                            label: 'Giá cao nhất',
                            data: maxgiaData,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Giá thấp nhất',
                            data: mingiaData,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Giá trung bình',
                            data: avgData,
                            backgroundColor: 'rgba(255, 206, 86, 0.2)',
                            borderColor: 'rgba(255, 206, 86, 1)',
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


</div>
</div>
