<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Danh Sách Đơn Hàng</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>ID Đơn hàng</th>
                    <th>ID Khách Hàng</th>
                    <th>Ngày Đặt</th>
                    <th>Ghi chú</th>
                    <th>Tổng tiền</th>
                    <th>Chi tiết</th>
                  </tr>
                  
                  
                  <?php
                  foreach($ds_don_hang as $don_hang)
				  {
				  ?>
                  <tr>
                    <td><?php echo $don_hang['id_don_hang']?></td>
                    <td><?php echo $don_hang['id_khach_hang']?></td>
                    <td><?php echo $don_hang['ngay_dat']?></td>
                    <td><?php echo $don_hang['ghi_chu']?></td>
                    <td><?php echo number_format((float)User::Tinh_tong_tien_don_hang($don_hang['id_don_hang']), 0, ',', '.'); ?> đ</td>
                    <td><a class="btn btn-success" href="chi_tiet_don_hang.php?id=<?php echo $don_hang['id_don_hang']; ?>">Xem chi tiết</a></td>
                  </tr>
                  
                  <?php
				  }
				  ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->