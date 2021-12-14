<?php

	include('../koneksi/koneksi.php');
    session_start();
    if(isset($_SESSION['id_user']));
	$id_user = $_SESSION['id_user'];
	//get profil
	$sql = "select `nama`, `email` from `akun`
	where `id_user`='$id_user'";
	//echo $sql;
	$query = mysqli_query($koneksi, $sql);
	while($data = mysqli_fetch_row($query)){
	$nama = $data[0];
	$email = $data[1];
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
   <br><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="edit_profil.php" class="btn btn-sm btn-info float-right"><i class="fas fa-edit"></i> Edit Profil</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-sm-12">
                    
                </div>
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Profil Admin<strong></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama; ?></td>
                      </tr>                
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email; ?></td>
                      </tr> 
                      <!--<tr>
                        <td><strong>Foto<strong></td>
                        <td><img src="foto/123.jpg" class="img-fluid" width="200px;"></td>
                      </tr>-->
                    </tbody>
                  </table>  
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">&nbsp;</div>
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
