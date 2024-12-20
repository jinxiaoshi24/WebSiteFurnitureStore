<?php
include_once("lib/database.php");
class dModel extends database
{
	public function Xem_don_hang($id_user)
	{
		$sql="SELECT * FROM don_hang ";
		$sql.="WHERE id_user=?";
		$this->setQuery($sql);
		$parram=array($id_user);
		
		return $this->loadAllRows($parram);	
	}
}
?>