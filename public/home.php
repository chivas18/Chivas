<!-- item -->
<div class="row-item row">
    <?php 
    foreach ($menu as $mn) {
        ?>
        <h3>
            <a href="index.php?id=<?=$mn->tlid ?>"><?=$mn->tlTen ?></a> |
            <?php 
            $loaitin = explode(',',$mn->LoaiTin);
            foreach($loaitin as $loai){
                list($id,$Ten,$TenKhongDau) = explode(':',$loai);
                ?>
                <small><a href="index.php?id_loai=<?=$id ?>"><i><?=$Ten ?></i></a>/</small>
                <?php
            }
            ?>

        </h3>
        <div class="col-md-12 border-right">
            <div class="col-md-3">
               <a href="chitiet.html">
                   <img class="img-responsive" src="public/image/tintuc/<?=$mn->Hinh ?>" alt="">
               </a>
           </div>

           <div class="col-md-9">
               <h3><?=$mn->TieuDe ?></h3>
               <p><?=$mn->TomTat ?></p>
               <a class="btn btn-primary" href="chitiet.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
           </div>

       </div>

       <div class="break"></div>
       <?php
   }
   ?>
</div>
     <!-- end item -->