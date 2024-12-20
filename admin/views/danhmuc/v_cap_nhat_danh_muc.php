
<div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-files-o"></i> Cập Nhật Danh Mục</h3>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Thông Tin Cập Nhật:
              </header>
              <div class="panel-body">
                <div class="form">
                  <form class="form-validate form-horizontal " id="register_form" method="post" action="">

                    <div class="form-group ">
                      <label for="ten_loai" class="control-label col-lg-2">Tên Loại <span class="required">*</span></label>
                      <div class="col-lg-10">
                        <input class=" form-control" id="ten_loai" name="ten_loai" type="text"  value="<?php echo $danh_muc_ID[0]['ten_loai']?>"/>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-primary" type="submit"  name="cap_nhat_danh_muc">Cập Nhật</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
        <!-- page end-->