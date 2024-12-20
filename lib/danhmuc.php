<?php
class Danhmuc
{
	private $conn="";
	public function __construct()
	{
		$this->conn=mysqli_connect('localhost','root','','noi_that');
		mysqli_set_charset($this->conn,"utf8");
	}
	
	//Thêm user
	public function Them_user($email,$password,$ho_ten,$sdt,$dia_chi,$role)
	{
		$sql="INSERT INTO user ";
		$sql.="VALUES(NULL,'$email','$password','$ho_ten','$sdt','$dia_chi','$role')";
		
		$result=mysqli_query($this->conn,$sql);  //Thực thi được trả về true, ngược lại false
		if($result)   //Nếu thực thi được trả về 1
		{
			return 1;
		}
		return 0;
	}
	

	public function Check_admin($email,$pass,$role=1)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE email='$email' AND password='$pass' AND role='$role'"; 
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
		return 0;
	}
	
	
	//Đọc tất cả user đang có trong database

	public function Doc_tat_ca_danh_muc()
	{
		$sql="SELECT * FROM loai_san_pham";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các danh mục, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
	}
	
	
	public function Doc_danh_muc_theo_id($id)
	{
		$sql="SELECT * FROM loai_san_pham ";
		$sql.="WHERE id_loai='$id'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) 
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
	}
	
	public function cap_nhat_danh_muc($id,$ten_loai)
	{
		$sql="UPDATE loai_san_pham SET ten_loai='$ten_loai'";
		$sql.="WHERE id_loai='$id'"; 
		$result=mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		return 0;	
	}
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM loai_san_pham WHERE id_loai='$id'";
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}
	
		
}


//Kiểm tra
/*$user=new User();
$arr=$user->Doc_tat_ca_user();
echo "<pre>";
print_r($arr);
echo "</pre>";
*/
?>