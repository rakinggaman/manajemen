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
            <h3><i class="fas fa-plus"></i> Tambah Artikel</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="artikel.php">Artikel</a></li>
              <li class="breadcrumb-item active">Tambah Artikel</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Tambah Artikel
    </h3>
        <div class="card-tools">
          <a href="artikel.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br>
      <div class="col-sm-10">
      <?php if(!empty($_GET['notif'])){?>
      	<?php if($_GET['notif']=="tambahkosong"){?>
      	<div class="alert alert-danger" role="alert">
	      Maaf data artikel wajib di isi</div> 
        <?php }?>
       <?php }?>
    </div>

    	<!-- form start -->
      <form class="form-horizontal" method="post" 3.	action="konfirmasi_tambah_artikel.php">
        <div class="card-body">
          <div class="form-group row">
            <label for="judul" class="col-sm-3 col-form-label">Judul</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="judul" name= "judul" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="gambar" class="col-sm-3 col-form-label">Gambar</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="gambar" name= "gambar" value="">
            </div>
          </div>
          <div class="form-group row">
            <label for="artikel" class="col-sm-3 col-form-label">Artikel</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="artikel" name= "artikel" value="">
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-info float-right"><i class="fas fa-plus"></i> Tambah</button>
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
