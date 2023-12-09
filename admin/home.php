<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
        .containerr {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(48%, 1fr));
        gap: 20px;
        margin-left: 130px;
    }

    .col-md-6 {
        width: 100%;
        margin-left: 100px;
        background-color: white;
    }

    .col-md,
    .col-md1 {
        margin: 0;
        text-align: center;
    }

    .frmcontent {
        margin-right: 160px;
    }

    h2,
    label,
    span {
        color: black;
    }
    </style>
<div class="containerr">
        <!-- Biểu đồ Loại Hàng -->
        <div class="col-md-6">
            <div class="col-md">
                <div class="" style="text-align: center;">
                    <h2>DANH SÁCH LOẠI HÀNG</h2>
                </div>
                <div class="frmcontent w60">
                    <canvas id="myChart"></canvas>
                </div>

                <script>
                    var listdanhmuc = <?php echo json_encode($listdanhmuc); ?>;

                    var labels = [];
                    var data = [];

                    listdanhmuc.forEach(function(danhmuc) {
                        labels.push(danhmuc.name);
                        data.push(danhmuc.id);
                    });

                    var ctx = document.getElementById('myChart').getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'MÃ LOẠI',
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
        <div class="col-md-6">
            <div class="col-md1">
                <div class="mb" style="text-align: center;">
                    <h2>THỐNG KÊ</h2>
                </div>
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
    </div>


<!-- DANH SACH TAI KHOAN -->
<div class="row">
    <div class="mb" style="text-align: center;">
        <h2>DANH SÁCH TÀI KHOẢN</h2>
    </div>
    <div class=" frmcontent">
        <div class=" mb10 frmdsloai w60">
            <table>
                <tr>
                    <th>MÃ TK</th>
                    <th>USERNAME</th>
                    <th>MẬT KHẨU</th>
                    <th>EMAIL</th>
                    <th>ĐỊA CHỈ</th>
                    <th>ĐIỆN THOẠI</th>
                    <th>VAI TRÒ</th>
                </tr>

                <?php
                foreach ($listtk as $tk) {
                    extract($tk);
                    echo '
                            <tr>
                                <td>' . $id . '</td>
                                <td>' . $user . '</td>
                                <td>' . $pass . '</td>
                                <td>' . $email . '</td>
                                <td>' . $diachi . '</td>
                                <td>' . $sdt . '</td>
                                <td>' . $role . '</td>
                            </tr>
                            ';
                }
                ?>
            </table>
        </div>
    </div>
</div>
