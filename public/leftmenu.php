<div class="col-md-3 ">
  <ul class="list-group" id="menu">
    <li href="#" class="list-group-item menu1 active">
     Menu
   </li>
   <?php  
   foreach ($menu as $mn) {
    ?>
    <li href="index.php?id=<?=$id ?>" class="list-group-item menu1">
     <?=$mn->tlTen ?>
   </li>
   <ul>
    <?php 
    $loaitin = explode(',',$mn->LoaiTin);
                //print_r($loaitin);
    foreach ($loaitin as $loai) {
      list($id_loai,$Ten,$TenKhongDau) = explode(':',$loai);
      ?>
      <li class="list-group-item">
       <a href="index.php?id_loai=<?=$id_loai ?>"><?=$Ten ?></a>
     </li>
     <?php
   }
   ?>
 </ul>
 <?php
}
?>
</ul>
</div>