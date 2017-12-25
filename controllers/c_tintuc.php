<?php 
include('models/m_tintuc.php');
class C_tintuc{
	function index(){
		$m_tintuc = new M_tintuc();
		$slide = $m_tintuc->getSlide();
		$menu = $m_tintuc->getMenu();
		return array('slide'=>$slide,'menu'=>$menu);
	}
	function loaitin(){
		$id_loai = isset($_GET['id_loai']) ? $_GET['id_loai'] : "";
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		$m_tintuc = new M_tintuc();
		$danhmuctin = $m_tintuc->getNewsByIdLoai($id_loai);
		$title_loai = $m_tintuc->getTitleById('loaitin',$id_loai);
		$title_theloai = $m_tintuc->getTitleById('theloai',$id);
		//var_dump($title_theloai);
		$category = $m_tintuc->getCategoriesName($id);
		return array('danhmuctin'=>$danhmuctin,'title_loai'=>$title_loai,'title_theloai'=>$title_theloai,'category'=>$category);
	}
}
?>