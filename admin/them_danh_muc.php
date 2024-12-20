<?php
if(isset($_POST['them_user']))
{
    $ten_loai=$_POST['ten_loai'];

	if($ten_loai!="")
	{
		include("../lib/user.php");
		$loai_san_pham=new User();
		$kq=$loai_san_pham->Them_danh_muc($ten_loai);
		if($kq)
		{
			echo "<script>alert('Đã Thêm!!'); window.location='ds_danhmuc.php'</script>";
		}	
	}
	else
	{
		echo "<script>alert('Vui lòng điền đủ thông tin!');</script>";	
	}
}



//Chèn view hiện thị
$view="views/danhmuc/v_them_danh_muc.php";
include("templates/layout.php");


?>