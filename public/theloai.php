<!-- item -->
<div class="row-item row">
  <?php 
  foreach ($Category as $cate) {
    ?>
    <h3>
      <a href="index.php?id_loai=<?=$cate->ltid ?>"><?=$cate->Ten ?></a>
    </h3>
    <div class="col-md-12 border-right">
      <div class="col-md-3">
       <a href="chitiet.html">
         <img class="img-responsive" src="public/image/tintuc/<?=$cate->Hinh ?>" alt="">
       </a>
     </div>

     <div class="col-md-9">
       <h3><?=$cate->TieuDe ?></h3>
       <p><?=$cate->TomTat ?></p>
       <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
     </div>

   </div>

   <div class="break"></div>
   <?php
 }
 ?>
</div>
     <!-- end item -->