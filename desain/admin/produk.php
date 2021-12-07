<?php
include('../koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  	if($_GET['aksi']=='hapus'){
  	$kode_produk = $_GET['data'];
  	//hapus produk
  	$sql_dh = "delete from `produk`
  	where `kode_produk` = '$kode_produk'";
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
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Tipe Produk</h3>
                <div class="card-tools">
                  <a href="tambah_produk.php" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i> Tambah Produk</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="col-md-12">
                  <form method="get" action="produk.php">
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
                      <th width="80%">Produk</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
                  //menampilkan data produk
                  	$sql_h = "select `kode_produk`, `produk` from `produk` ";
                    if (isset($_GET["katakunci"])){
                      	$katakunci_produk = $_GET["katakunci"];
                    $sql_h .= " where `produk` LIKE '%$katakunci_produk%'"; 

                    } 
                    $sql_h .= "order by `produk` ";
                  	$query_h = mysqli_query($koneksi,$sql_h); 
                    	$no=1;
                  	while($data_h = mysqli_fetch_row($query_h)){
                  	$kode_produk = $data_h[0];
                  	$produk = $data_h[1]; 
                    	?>
                  	<tr>
                  	<td><?php echo $no;?></td>
                  	<td><?php echo $produk;?></td>
                  	<td>
                  	<a href="edit_produk.php?data=<?php echo $kode_produk;?>"
                  	class="btn btn-xs btn-info">
                  	<i class="fas fa-edit"></i> Edit</a>
                  	<a href="javascript:if(confirm('Anda yakin ingin menghapus data?
                  <?php echo $produk; ?>?'))	window.location.href = 'produk.php?aksi=hapus&data=<?php echo
                    $kode_produk;?>'"
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
