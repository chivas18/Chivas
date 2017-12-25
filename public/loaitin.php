  <!-- item -->
  <div class="row-item row">
    <?php 
    foreach ($tins as $tin) {
      ?>
      <div class="col-md-12 border-right">
        <div class="col-md-3">
         <a href="chitiet.html">
           <img class="img-responsive" src="public/image/tintuc/<?=$tin->Hinh ?>" alt="">
         </a>
       </div>

       <div class="col-md-9">
         <h3><?=$tin->TieuDe ?></h3>
         <p><?=$tin->TomTat ?></p>
         <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
       </div>

     </div>

     <div class="break"></div>
     <?php
   }
   ?>
 </div>
     <!-- end item -->