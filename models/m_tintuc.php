<?php 
include ('database.php');
class M_tintuc extends database
{
	function getSlide(){
		$sql = "select * from slide";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getMenu(){
		$sql = "SELECT tl.id AS tlid,tl.Ten as tlTen,tl.TenKhongDau,GROUP_CONCAT(DISTINCT lt.id,':',lt.Ten,':',lt.TenKhongDau) AS LoaiTin,tt.id AS ttid,tt.TieuDe,tt.TieuDeKhongDau,tt.TomTat,tt.Hinh FROM theloai tl INNER JOIN loaitin lt ON tl.id = lt.idTheLoai INNER JOIN tintuc tt ON lt.id = tt.idLoaiTin GROUP BY tl.id";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	function getCategoriesName($id){
		$sql = "SELECT tl.id AS tlid,tl.Ten as tlTen,lt.id AS ltid,lt.Ten,lt.TenKhongDau,tt.* FROM theloai tl INNER join loaitin lt ON tl.id=lt.idTheLoai INNER join tintuc tt ON lt.id = tt.idLoaiTin WHERE tl.id=$id GROUP BY lt.id";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id));
	}
	function getNewsByIdLoai($id_loaitin){
		$sql = "SELECT * FROM tintuc WHERE idLoaiTin = $id_loaitin";
		$this->setQuery($sql);
		return $this->loadAllRows(array($id_loaitin));
	}
	function getTitleById($table, $id){
		$sql = "SELECT Ten FROM ".$table." WHERE id =".$id;
		$this->setQuery($sql);
		return $this->loadRow(array($id));
	}
}
?>