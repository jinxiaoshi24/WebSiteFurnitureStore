<?php
$id_don_hang = "";
if (isset($_GET['id'])) {
    $id_don_hang = $_GET['id'];

    include("../lib/user.php");
    $ct_don_hang = new User();
    $ds_ct_don_hang = $ct_don_hang->Xem_chi_tiet_don_hang($id_don_hang);

    $khach_hang = new User();
    $dia_chi_giao_hang = $khach_hang->Lay_dia_chi_giao_hang($id_don_hang);
}
$view="views/donhang/v_chi_tiet_don_hang.php";
include("templates/layout.php");
?>