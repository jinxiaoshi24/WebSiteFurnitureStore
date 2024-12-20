<?php
include("../lib/user.php");
$loai_san_pham=new User();
$ds_danh_muc=$loai_san_pham->Doc_tat_ca_danh_muc();

$view="views/danhmuc/v_ds_danhmuc.php";
include("templates/layout.php");
?>