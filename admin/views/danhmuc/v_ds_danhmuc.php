<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-table"></i> Danh Sách Danh Mục</h3>
          </div>
        </div>
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class="icon_profile"></i>Tên Danh Mục</th>
                    <th><i class="icon_cogs"></i> Tác Vụ</th>
                  </tr>
                  
                  <?php
                  foreach($ds_danh_muc as $loai_san_pham)
				  {
				  ?>
                  
                  <tr>
                    <td><?php echo $loai_san_pham['ten_loai']?></td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-success" href="cap_nhat_danh_muc.php?id=<?php echo $loai_san_pham['id_loai'] ?>"><i class="glyphicon glyphicon-wrench"></i></a>
                        <a class="btn btn-danger" href="javascript:var result = confirm('Bạn thực sự muốn xóa dữ liệu này?\n Việc này sẽ mất dữ liệu của bạn.\n Bạn chắc chứ?');
if (result) {
    window.location='xoa_danh_muc.php?id=<?php echo $loai_san_pham['id_loai']?>'
}"><i class="icon_close_alt2"></i></a>
                      </div>
                    </td>
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