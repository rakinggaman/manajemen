<?php
include('../koneksi/koneksi.php');
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
  	if($_GET['aksi']=='hapus'){
  	$id_user = $_GET['data'];
  	//hapus projek
  	$sql_dh = "delete from `projek`
  	where `kode_projek` = '$id_user'";
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
    

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="margin-top:5px;"><i class="fas fa-list-ul"></i> Data Projek</h3>
                <div class="card-tools">
                  <a href="tambah_projek.php" class="btn btn-sm btn-info float-right"><i class="fas fa-plus"></i>Data Projek</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="col-md-12">
                  <form method="post" action="#">
                    <div class="row">
                        <div class="col-md-4 bottom-10">
                          <input type="text" class="form-control" id="kata_kunci" name="kunci2">
                        </div>
                        <div class="col-md-5 bottom-10">
                          <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i>&nbsp; Search</button>
                        </div>
                    </div><!-- .row -->
                  </form>
                </div><br>
                <div class="col-sm-12">
                	<?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert"> Data Berhasil Ditambahkan</div>
                  <?php }?> <?php }?>

                </div>
                <table class="table table-bordered">
                    <thead>                  
                      <tr>
                        <th width="5%">No</th>
                        <th width="10%">Pelanggan</th>
                        <th width="20%">Domisili</th>
                        <th width="20%">industri</th>
                        <th width="35%">Produk</th>
                        <th width="10%"><center>Aksi</center></th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      //menampilkan data projek
                      $sql_pjk = "SELECT kp.kode_projek, kp.pelanggan, kd.domisili, ki.industri, pp.produk, kp.instagram, kp.facebook
                      FROM projek kp INNER JOIN domisili kd ON kp.kode_domisili = kd.kode_domisili
                      INNER JOIN industri ki ON kp.kode_industri = ki.kode_industri
                      INNER JOIN produk pp ON kp.kode_produk = pp.kode_produk";
                      if (isset($_POST["katakunci"])){
							$katakunci_pjk = $_POST["katakunci"];
							$_SESSION['katakunci_projek']=$katakunci_pjk;
	    					$sql_pjk .= " where `projek`.`pelanggan` LIKE '%$katakunci_pjk%' 
	                  			OR `domisili`.`domisili` LIKE '%$katakunci_pjk%' OR `industri`.`industri` LIKE '%$katakunci_pjk%' OR `produk`.`produk` LIKE '%$katakunci_pjk%' ";
						  }     $query_pjk = mysqli_query($koneksi,$sql_pjk);  
                    $no = 1;
                      while($data_pjk = mysqli_fetch_row($query_pjk)){
                        $id = $data_pjk[0];
                      $pelanggan = $data_pjk[1];
                      $domisili = $data_pjk[2];
                    $industri = $data_pjk[3]; 
                    $produk = $data_pjk[4]; 
                    	?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $pelanggan;?></td>
                      <td><?php echo $domisili;?></td>
                      <td><?php echo $industri;?></td>
                      <td><?php echo $produk;?></td>
                      <td align="center">
                      <a href="edit_projek.php?data=<?php echo $id;?>"
                      class="btn btn-xs btn-info" title="Edit">
                      <i class="fas fa-edit"></i></a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $pelanggan.' - '.$domisili; ?>?'))
                      window.location.href = 'projek.php?aksi=hapus&data=<?php echo
                    $pelanggan;?>'"
                      class="btn btn-xs btn-warning">
                      <i class="fas fa-trash" title="Hapus"></i></a>
                      <a href="detail_projek.php?data=<?php echo $pelanggan;?>"
                      class="btn btn-xs btn-info" title="Detail">
                      <i class="fas fa-eye"></i></a>
                      </td>
                      </tr>
                     <?php $no++; }?>

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
