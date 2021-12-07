<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_GET['data'])){
	$kode_industri = $_GET['data'];
  $_SESSION['kode_industri']=$kode_industri;

//get data industri
  $sql_d = "select `industri` from `industri` where `kode_industri` = '$kode_industri'";
  $query_d = mysqli_query($koneksi,$sql_d); while($data_d = mysqli_fetch_row($query_d)){
  $industri= $data_d[0];
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
            <h3><i class="fas fa-edit"></i> Edit Industri</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="industri.php">Industri</a></li>
              <li class="breadcrumb-item active">Edit Industri</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Industri</h3>
        <div class="card-tools">
          <a href="industri.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
          <?php if(!empty($_GET['notif'])){?>
	      <?php if($_GET['notif']=="editkosong"){?>
	    <div class="alert alert-danger" role="alert">
	        Maaf data industri wajib di isi</div> 
          <?php }?>
      <?php }?>

      
       </div>
      <form class="form-horizontal" action="konfirmasi_edit_industri.php" method="post">
        <div class="card-body">
          <div class="form-group row">
            <label for="industri" class="col-sm-3 col-form-label">Industri</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="industri" name="industri" value="<?php echo $industri;?>">
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
