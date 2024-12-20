        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i>Chi Tiết Đơn Hàng <?php echo $id_don_hang; ?></h3>
          </div>

          <div class="right" style="margin: 25px ">
            <?php
                if (isset($dia_chi_giao_hang) && !empty($dia_chi_giao_hang)) {
                // Lặp qua mảng $dia_chi_giao_hang để lấy thông tin giao hàng
                foreach ($dia_chi_giao_hang as $dia_chi) { ?>
                <div class="row">
                  <div class="col-lg-12">
                   <h4><strong>Thông tin giao hàng</strong></h4>
                   <!-- Hiển thị thông tin giao hàng -->
                    <p><strong>Tên:</strong> <?php echo $dia_chi['ten_khach_hang']; ?></p>
                    <p><strong>Số điện thoại:</strong> <?php echo $dia_chi['sdt_khach_hang']; ?></p>
                    <p><strong>Email:</strong> <?php echo $dia_chi['email_khach_hang']; ?></p>
                    <p><strong>Địa chỉ:</strong> <?php echo $dia_chi['dc_khach_hang']; ?></p>
                  </div>
                </div>
              <?php } 
                } else { ?>
                  <div class="row">
                  <div class="col-lg-12">
                  <p>Không có thông tin giao hàng cho đơn hàng này.</p>
              </div>
                  </div>
              <?php } ?>
            </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>Tên Sản Phẩm</th>
                    <th>Đơn Giá</th>
                    <th>Số Lượng</th>
                    <th>Tổng Tiền</th>
                  </tr>

                  <?php if (isset($ds_ct_don_hang) && !empty($ds_ct_don_hang)) { 
                        foreach ($ds_ct_don_hang as $item) { ?>
                            <tr>
                                <td><?php echo $item['ten_sp']; ?></td>
                                <td><?php echo number_format((float)$item['don_gia'], 0, ',', '.'); ?> đ</td>
                                <td><?php echo $item['so_luong']; ?></td>
                                <td><?php echo number_format($item['don_gia'] * $item['so_luong'], 0, ',', '.'); ?> đ</td>
                            </tr>
                        <?php } 
                    } else { ?>
                        <tr>
                            <td colspan="6">Không có thông tin đơn hàng.</td>
                        </tr>
                    <?php } ?>
                  
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->