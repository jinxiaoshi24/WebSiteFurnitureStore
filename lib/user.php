<?php
class User
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
	
	//Check Tài khoản
	public function Check_user($email,$pass)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE email='$email' AND password='$pass'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) return mysqli_fetch_all($result,MYSQLI_ASSOC);
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
	public function Doc_tat_ca_user()
	{
		$sql="SELECT * FROM user";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các user, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
			
	}

	
	public function Doc_user_theo_id($id)
	{
		$sql="SELECT * FROM user ";
		$sql.="WHERE id='$id'";
		
		$result=mysqli_query($this->conn,$sql);
		if($result) 
			return mysqli_fetch_all($result,MYSQLI_ASSOC);
		
	}
	
	public function Cap_nhat_user($id,$email,$password,$ho_ten,$sdt,$dia_chi,$role)
	{
		$sql="UPDATE user SET email='$email',password='$password',ho_ten='$ho_ten',so_dien_thoai='$sdt',dia_chi='$dia_chi',role='$role' ";
		$sql.="WHERE id='$id'"; 
		$result=mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		return 0;	
	}
	
	public function Xoa_user($id)
	{
		$sql="DELETE FROM user WHERE id='$id'";
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}

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
	
	public function Xoa_danh_muc($id)
	{
		$sql="DELETE FROM loai_san_pham WHERE id_loai='$id'";
		$result=mysqli_query($this->conn,$sql);
		if($result) return 1;
		return 0;	
	}

	public function Them_danh_muc($ten_loai)
	{
		$sql="INSERT INTO loai_san_pham ";
		$sql.="VALUES(NULL,'$ten_loai')";
		
		$result=mysqli_query($this->conn,$sql);  //Thực thi được trả về true, ngược lại false
		if($result)   //Nếu thực thi được trả về 1
		{
			return 1;
		}
		return 0;
	}
	
	
	public function Doc_tat_ca_don_hang()
	{
		$sql="SELECT * FROM don_hang";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các danh mục, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
	}

	public function Xem_chi_tiet_don_hang($id_don_hang) 
	{
        $sql = "SELECT ct_don_hang.id_don_hang, san_pham.ten_sp, san_pham.don_gia, ct_don_hang.so_luong
		FROM ct_don_hang
		INNER JOIN san_pham ON ct_don_hang.id_san_pham = san_pham.id_sp
		WHERE id_don_hang='$id_don_hang'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) 
		{
            $chitiet_donhang = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $chitiet_donhang;
        } else 
		{
            return false;
        }
    }

	public static function Tinh_tong_tien_don_hang($id_don_hang) {
		$conn = mysqli_connect('localhost', 'root', '', 'noi_that');
		mysqli_set_charset($conn, 'utf8');
		$sql = "SELECT SUM(sp.don_gia * ct.so_luong) AS tong_tien
				FROM ct_don_hang ct
				JOIN san_pham sp ON ct.id_san_pham = sp.id_sp
				WHERE ct.id_don_hang='$id_don_hang'";
    	$result = mysqli_query($conn, $sql);
		if ($result && mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
			return $row['tong_tien'];
		} else {
			return 0;
		}
	}
	
	public function cap_nhat_don_hang($id_don_hang,$trang_thai)
	{
		$sql="UPDATE don_hang SET trang_thai='$trang_thai'";
		$sql.="WHERE id_don_hang='$id_don_hang'"; 
		$result=mysqli_query($this->conn,$sql);
		
		if($result) return 1;
		return 0;	
	}

	public function Lay_dia_chi_giao_hang($id_don_hang)
	{
		$sql="SELECT khach_hang.* FROM khach_hang 
        INNER JOIN don_hang ON khach_hang.id_khach_hang = don_hang.id_khach_hang 
        WHERE don_hang.id_don_hang = '$id_don_hang'";
		$result=mysqli_query($this->conn,$sql);// thực thi được $result là true, ngược lại là false
		
		if($result)  //Nếu thực thi được trả về mảng ds các danh mục, trong đó mỗi lần tử là một mảng ---> MẢng 2 chiều  , MYSQLI_ASSOC: đọc theo tên cột
			return mysqli_fetch_all($result,MYSQLI_ASSOC);  
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