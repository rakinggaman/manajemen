	<?php
	session_start();
	include('../koneksi/koneksi.php');
	if(isset($_GET['data'])){
	$kode_projek = $_GET['data'];
	$_SESSION['kode_projek']=$kode_projek;

	//get data projek
	$sql_m = "select `pelanggan`, `kode_domisili`, `kode_industri`, `kode_produk`, `instagram`, `facebook`, `nama_perwakilan`, `wa_perwakilan`, `kode_status`, `harga`
	from `projek` where `kode_projek` = '$kode_projek'";
	$query_m = mysqli_query($koneksi,$sql_m);
	while($data_m = mysqli_fetch_row($query_m)){
    $kode_projek= $data_m[0];  
	$pelanggan= $data_m[1];
	$kode_domisili = $data_m[2];
	$kode_industri = $data_m[3];
    $kode_produk = $data_m[4];
    $instagram = $data_m[5];
    $facebook = $data_m[6];
    $nama_perwakilan = $data_m[7];
    $wa_perwakilan = $data_m[8];
    $kode_status = $data_m[9];
    $harga = $data_m[10];
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
            <h3><i class="fas fa-edit"></i> Edit Data Projek</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="projek.php">Data Projek</a></li>
              <li class="breadcrumb-item active">Edit Data Projek</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title"style="margin-top:5px;"><i class="far fa-list-alt"></i> Form Edit Data Projek</h3>
        <div class="card-tools">
          <a href="projek.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
        </div>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      </br></br>
      <div class="col-sm-10">
          <div class="alert alert-danger" role="alert">Maaf data projek wajib di isi</div>
      </div>
      <form class="form-horizontal" method="post" action="konfirmasi_tambah_projek.php">
          <div class="card-body">
            <div class="form-group row">
                <label for="foto" class="col-sm-12 col-form-label"><span class="text-info"><i class="fas fa-user-circle"></i> <u>Data Projek</u></span></label>
            </div>
            <div class="form-group row">
                <label for="pelanggan" class="col-sm-3 col-form-label">Pelanggan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="pelanggan" id="pelanggan" value="<?php if(!empty($_SESSION['pelanggan'])){echo $_SESSION['pelanggan'];} ?>">
                </div>
            </div>
            <div class="form-group row">
              <label for="domisili" class="col-sm-3 col-form-label">Domisili</label>
                <div class="col-sm-7">
                    <select class="form-control" id="domisili" name="domisili">
                        <option value="0">- Pilih Domisili -</option>
                        <?php
                        $sql_j = "select `kode_domisili`, `domisili` from `domisili` order by `kode_domisili`";
                        $query_j = mysqli_query($koneksi,$sql_j);

                        while($data_j = mysqli_fetch_row($query_j)){
                            $kode_domisili = $data_j[0];
                            $domisili = $data_j[1];
                        ?>
                        <option value="<?php echo $kode_domisili;?>"
                            <?php if(!empty($_SESSION['domisili'])){
                                if($kode_domisili==$_SESSION['domisili']){?> 
                                selected="selected" <?php }}?>>
                        <?php echo $domisili;?><?php }?>
                    </select>
                </div>
            </div>
          
            <div class="form-group row">
                <label for="industri" class="col-sm-3 col-form-label">Industri</label>
                <div class="col-sm-7">
                    <select class="form-control" id="industri" name="industri">
                        <option value="0">- Pilih Industri -</option>
                        <?php
                        $sql_j = "select `kode_industri`, `industri` from `industri` order by `kode_industri`";
                        $query_j = mysqli_query($koneksi,$sql_j);

                        while($data = mysqli_fetch_row($query_j)){
                            $kode_industri = $data[0];
                            $industri = $data[1];
                        ?>
                        <option value="<?php echo $kode_industri;?>"
                            <?php if(!empty($_SESSION['industri'])){
                                if($kode_industri==$_SESSION['industri']){?> 
                                selected="selected" <?php }}?>>
                        <?php echo $industri;?><?php }?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="produk" class="col-sm-3 col-form-label">Produk</label>
                <div class="col-sm-7">
                    <select class="form-control" id="produk" name="produk">
                        <option value="0">- Pilih produk -</option>
                        <?php
                        $sql_j = "select `kode_produk`, `produk` from `produk` order by `kode_produk`";
                        $query_j = mysqli_query($koneksi,$sql_j);

                        while($data = mysqli_fetch_row($query_j)){
                            $kode_produk = $data[0];
                            $produk = $data[1];
                        ?>
                        <option value="<?php echo $kode_produk;?>"
                            <?php if(!empty($_SESSION['produk'])){
                                if($kode_produk==$_SESSION['produk']){?> 
                                selected="selected" <?php }}?>>
                        <?php echo $produk;?><?php }?>
                    </select>
                </div>
            </div>
                    <?php 
                        $sql_h = "select `kode_produk`, `produk` from `produk` order by `kode_produk`";
                        $query_h = mysqli_query($koneksi,$sql_h);
                        $jum_hobi = mysqli_num_rows($query_h);

                        while($data_h = mysqli_fetch_row($query_h)){
                            $kode_produk = $data_h[0];
                            $produk = $data_h[1];
                        ?>
                        <input type="checkbox"  name="produk[]" value="<?php echo $kode_produk; ?>"/> 
                        <?php echo $produk; ?></br>
                    <?php }?>
                    </div>
            </div> -->

            <div class="form-group row">
                <label for="instagram" class="col-sm-3 col-form-label">Instagram</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="instagram" id="instagram" value="<?php if(!empty($_SESSION['instagram'])){echo $_SESSION['instagram'];} ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="facebook" class="col-sm-3 col-form-label">Facebook</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="facebook" id="facebook" value="<?php if(!empty($_SESSION['facebook'])){echo $_SESSION['facebook'];} ?>">
                </div>
            </div>

            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama Perwakilan</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php if(!empty($_SESSION['nama_perwakilan'])){echo $_SESSION['nama_perwakilan'];} ?>">
                </div>
            </div>

          <div class="form-group row">
            <label for="wa" class="col-sm-3 col-form-label">WA perwakilan</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" name="wa" id="wa" value="<?php if(!empty($_SESSION['wa_perwakilan'])){echo $_SESSION['wa_perwakilan'];} ?>">
            </div>
          </div>
          <div class="form-group row">
              <label for="status" class="col-sm-3 col-form-label">status</label>
              <div class="col-sm-7">
                <select class="form-control" id="status" name="status">
                  <option value="0">- Pilih Status -</option>
                  <?php
                  $sql_j = "select `kode_status`, `status` from `status` order by `kode_status`";
                  $query_j = mysqli_query($koneksi,$sql_j);

                  while($data = mysqli_fetch_row($query_j)){
                    $kode_status = $data[0];
                    $status = $data[1];
                  ?>
                  <option value="<?php echo $kode_status;?>"
                    <?php if(!empty($_SESSION['status'])){
                      if($kode_status==$_SESSION['status']){?> 
                        selected="selected" <?php }}?>>
                    <?php echo $status;?><?php }?>
                </select>
              </div>
            </div>

            <div class="form-group row">
                <label for="harga" class="col-sm-3 col-form-label">Harga</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="harga" id="harga" value="<?php if(!empty($_SESSION['harga'])){echo $_SESSION['harga'];} ?>">
                </div>
            </div>
        </div>

      </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="col-sm-12">
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
