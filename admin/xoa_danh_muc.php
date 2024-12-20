<?php
$id="";
if($_GET['id'])
{
	$id=$_GET['id'];
	include("../lib/user.php");
	$user=new User();
	$kq=$user->Xoa_danh_muc($id);
	if($kq)
	{
		echo "<script>alert('Đã Xóa!'); window.location='ds_danhmuc.php'</script>";	
	}
}
?>