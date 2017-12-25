<?php 
include('controllers/c_tintuc.php');
$c_tintuc = new C_tintuc();
$noidung = $c_tintuc->index();
$tintuc = $c_tintuc->loaitin();

$slide =$noidung['slide'];
$menu = $noidung['menu'];
$title_loai = $tintuc['title_loai'];

$title_theloai = $tintuc['title_theloai'];
$tins = $tintuc['danhmuctin'];
$Category = $tintuc['category'];

print_r($Category);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ĐỒNG MẠNH TUẤN</title>

  <!-- Bootstrap Core CSS -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="public/css/shop-homepage.css" rel="stylesheet">
  <link href="public/css/my.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.public/js/1.4.2/respond.min.js"></script>
      <![endif]-->

    </head>

    <body>

      <!-- Navigation -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include_once('public/header.php'); ?>
      </nav>

      <!-- Page Content -->
      <div class="container">
        <!-- slider -->
        <?php include_once('public/slide.php') ?>
        <!-- end slide -->
        <div class="space20"></div>
        <div class="row main-left">
          <?php include_once('public/leftmenu.php') ?>
          <div class="col-md-9">
           <div class="panel panel-default">
            <div class="panel-heading" style="background-color:#337AB7; color:white;" >
             <h2 style="margin-top:0px; margin-bottom:0px;"><?php echo !empty($title_loai->Ten) ? $title_loai->Ten : !empty($title_theloai->Ten) ? $title_theloai->Ten : "Tin Tức";//if(!empty($Tittle->Ten)){ echo $Tittle->Ten;}elseif(!empty($Category->tlTen)){echo $Category->tlTen;}else{echo "Tin Tức";} ?>
             </h2>
           </div>

           <div class="panel-body">
             <!-- Gọi nội dung -->
             <?php 
             if (isset($_GET['id_loai'])) {
               include_once('public/loaitin.php');
             }elseif(isset($_GET['id'])){
              include_once('public/theloai.php');
            }else{
              include_once('public/home.php');
            }
            ?>
          </div>
        </div>

      </div>
      <!-- /.row -->
    </div>
    <!-- end Page Content -->
  </div>
  <!-- Footer -->
  <hr>
  <footer>
    <?php include_once('public/footer.php') ?>
  </footer>
  <!-- end Footer -->
  <!-- jQuery -->
  <script src="public/js/jquery.js"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="public/js/bootstrap.min.js"></script>
  <script src="public/js/my.js"></script>

</body>

</html>
