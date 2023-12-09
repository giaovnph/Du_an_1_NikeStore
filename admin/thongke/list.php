<div class="alldm">
  <div class=" frmcontentbd">
    <div class=" frmtitle">
      <p>Danh Sách Đơn Hàng</p>
    </div>
    <div class=" frmdsbd">
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
                        foreach($dstk as $tk){
                            extract($tk);
                            echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$name.'</td>
                                <td>'.$countsp.'</td>
                                <td>'.$maxgia.'</td>
                                <td>'.$mingia.'</td>
                                <td>'.$avg.'</td>
                            </tr>
                            ';
                        }
                    ?>
                </table>
            </div>

        </div>
      </div>
      <div class="bieudo">
        
        <div class=" frmcontent">
        <div class=" mb10">
               <?php
                    include "bieudo.php";
               ?>             
          </div>
        </div>
      </div>
      