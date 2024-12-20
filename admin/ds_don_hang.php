<?php
include("../lib/user.php");
$don_hang=new User();
$ds_don_hang=$don_hang->Doc_tat_ca_don_hang();

$view="views/donhang/v_ds_donhang.php";
include("templates/layout.php");
?>