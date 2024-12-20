<?php
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("../lib/user.php");

	if(isset($_POST['cap_nhat_don_hang']))
	{
		$trang_thai=$_POST['trangThai_'];
		
		if($trang_thai!="")
		{
			$kq=$loai_san_pham->Cap_nhat_don_hang($id,$trang_thai);
			if($kq)
			{
				echo "<script>alert('Đã Cập nhật!!'); window.location='ds_don_hang.php'</script>";
			}   
			else
			{
				echo "<script>alert('Cập nhật không thành công!');</script>";
			}
		}
		else
		{
			echo "<script>alert('Vui lòng điền đủ thông tin!');</script>";    
		}
	}
}
$view="views/donhang/v_ds_donhang.php";
include("templates/layout.php");
?>