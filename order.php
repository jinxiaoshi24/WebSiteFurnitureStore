<?php
session_start();

include("process/xemSanPham.php");
include("process/DonHang.php");
$pModel=new pModel();

$timsp = new pModel();
$ds_sp=$timsp->Xem_tat_ca();
$arrtensp = array();
foreach($ds_sp as $sp){
    $arrtensp[]=$sp->ten_sp;
}
$view="views/order/vOrder.php";
include("templates/layout.php");	
?>