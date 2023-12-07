<div class="row">
    <div class="" style="text-align: center;">
        <h2>DANH SÁCH LOẠI HÀNG</h2>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <div class="frmcontent w60">
        <canvas id="myChart"></canvas>
    </div>

    <script>
        // Dữ liệu từ PHP
        var listdanhmuc = <?php echo json_encode($listdanhmuc); ?>;

        // Tạo mảng cho biểu đồ
        var labels = [];
        var data = [];

        listdanhmuc.forEach(function(danhmuc) {
            labels.push(danhmuc.name);
            data.push(danhmuc.id);
        });

        // Tạo biểu đồ
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'MÃ LOẠI',
                    data: data,
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

<!-- thong ke -->
<div class="row">
    <div class=" mb" style="text-align: center;">
        <h2>THỐNG KÊ</h2>
    </div>
    <div class=" frmcontent w60">
        <div class=" mb10 frmdsloai">
            <table>
                <tr>
                    <th>STT</th>
                    <th>LOẠI HÀNG</th>
                    <th>SỐ LƯỢNG</th>
                    <th>GIÁ CAO NHẤT</th>
                    <th>GIÁ THẤP NHẤT</th>
                    <th>GIÁ TRUNG BÌNH</th>

                </tr>

                <?php
                foreach ($dstk as $tk) {
                    extract($tk);
                    echo '
                            <tr>
                                <td>' . $id . '</td>
                                <td>' . $name . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $maxgia . '</td>
                                <td>' . $mingia . '</td>
                                <td>' . $avg . '</td>
                            </tr>
                            ';
                }
                ?>
            </table>
        </div>

    </div>
</div>
<div class="bieudo">
    <div class="mb" style="text-align: center;">
        <h2>THỐNG KÊ DẠNG BIỂU ĐỒ</h2>
    </div>
    <div class=" frmcontent">
        <div class=" mb10">
            <?php
            include "./thongke/bieudo.php";
            ?>
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
