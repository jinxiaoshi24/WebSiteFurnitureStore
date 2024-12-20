<?php
$id="";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	include("../lib/user.php");
	$loai_san_pham=new User();
	$danh_muc_ID=$loai_san_pham->Doc_danh_muc_theo_id($id);

	if(isset($_POST['cap_nhat_danh_muc']))
	{
		$ten_loai=$_POST['ten_loai'];
		
		if($ten_loai!="")
		{
			$kq=$loai_san_pham->Cap_nhat_danh_muc($id,$ten_loai);
			if($kq)
			{
				echo "<script>alert('Đã Cập nhật!!'); window.location='ds_danhmuc.php'</script>";
			}	
		}
		else
		{
			echo "<script>alert('Vui lòng điền đủ thông tin!');</script>";	
		}
	}
}
$view="views/danhmuc/v_cap_nhat_danh_muc.php";
include("templates/layout.php");
?>