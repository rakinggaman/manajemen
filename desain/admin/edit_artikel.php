<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_GET['data'])){
	$kode_artikel = $_GET['data'];
    $_SESSION['kode_artikel']=$kode_artikel;

//get data artikel
  $sql_d = "select `judul`, `gambar` , `artikel`  from `artikel` where `kode_artikel` = '$kode_artikel'";
  $query_d = mysqli_query($koneksi,$sql_d); while($data_d = mysqli_fetch_row($query_d)){
  $judul= $data_d[0];
  $gambar= $data_d[1];
  $artikel= $data_d[2];

  }
}
?>


<!DOCTYPE html>
<html>
<head>
<?php include("includes/head.php") ?> 
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-edit"></i> Edit Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="artikel.php">Artikel</a></li>
              <li class="breadcrumb-item active">Edit Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Artikel</h3>
        <div class="card-tools">
          <a href="artikel.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
	      <?php if($_GET['notif']=="editkosong"){?>
	    <div class="alert alert-danger" role="alert">
	        Maaf data artikel wajib di isi</div> 
          <?php }?>
      <?php }?>

      
       </div>
      <form class="form-horizontal" action="konfirmasi_edit_artikel.php" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $judul;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="gambar" name="gambar" value="<?php echo $gambar;?>">
            </div>
          </div>
          <div class="form-group row">
            <label for="artikel" class="col-sm-3 col-form-label">Artikel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="artikel" name="artikel" value="<?php echo $artikel;?>">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-save"></i> Simpan</button>
          </div>  
        </div>
        <!-- /.card-footer -->
      </form>
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("includes/footer.php") ?>

</div>
<!-- ./wrapper -->

<?php include("includes/script.php") ?>
</body>
</html>
