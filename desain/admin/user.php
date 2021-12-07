<?php
include('../koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  	if($_GET['aksi']=='hapus'){
  	$id_user = $_GET['data'];
  	//hapus akun
  	$sql_dh = "delete from `akun`
  	where `id_user` = '$id_user'";
  	mysqli_query($koneksi,$sql_dh);
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
  
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Tipe akun</h3>
                <div class="card-tools">
                  <a href="tambah_user.php" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah akun</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="get" action="user.php">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="katakunci">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
              <div class="col-sm-12">
              <div class="col-sm-12">
              	<?php if(!empty($_GET['notif'])){?>
                <?php if($_GET['notif']=="tambahberhasil"){?>
              <div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan</div>
              <?php } else if($_GET['notif']=="editberhasil"){?>
	                <div class="alert alert-success" role="alert">
                	Data Berhasil Diubah</div>
              <?php }?>
              <?php }?>
              </div>

              </div>
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                    <th width="5%">No</th>
                        <th width="25%">Nama</th>
                        <th width="20%">Email</th>
                        <th width="20%">Username</th>
                        <th width="20%">Level</th>
                        <th width="10%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  //menampilkan data akun
                  	$sql_h = "select `id_user`, `nama`, `email`, `username`, `level` from `akun`"; 
                      if (isset($_GET['katakunci'])){
                          $katakunci_user = $_GET['katakunci'];
                          $sql_h .= " where `email` LIKE '%$katakunci_user%' 
                                        OR `nama` LIKE '%$katakunci_user%'";
                      } 
                      $sql_h .= " order by `nama` ";
                      $query_h = mysqli_query($koneksi,$sql_h);
                      $no=1;
                      while($data_h = mysqli_fetch_row($query_h)){
                        $nama = $data_h[0];
                        $email = $data_h[1];
                        $username = $data_h[2];
                        $level = $data_h[3];
                        $id_user = $data_h[4];
                        ?>
                  	<tr>
                  	<td><?php echo $no;?></td>
                  	<td><?php echo $nama;?></td>
                    <td><?php echo $email;?></td>
                    <td><?php echo $username;?></td>
                    <td><?php echo $level;?></td>
                  	<td>
                  	<a href="edit_produk.php?data=<?php echo $kode_produk;?>"
                  	class="btn btn-xs btn-info">
                  	<i class="fas fa-edit"></i> Edit</a>
                  	<a href="javascript:if(confirm('Anda yakin ingin menghapus data?
                  <?php echo $nama; ?>?'))	window.location.href = 'user.php?aksi=hapus&data=<?php echo
                    $id_user;?>'"
                  	class="btn btn-xs btn-warning"><i class="fas fa-trash"></i> Hapus 	</a>
                  	</td>
                   </tr>
                   <?php 
                    $no++; 
                     }?>

                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
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
