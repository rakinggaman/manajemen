<?php include("includes/header.php") ?>

  <?php include("includes/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3><i class="fas fa-user-tie"></i> Detail Data Mahasiswa</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="mahasiswa.php">Data Mahasiswa</a></li>
              <li class="breadcrumb-item active">Detail Data Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <a href="mahasiswa.php" class="btn btn-sm btn-warning float-right"><i class="fas fa-arrow-alt-circle-left"></i> Kembali</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                    <tbody>  
                      <tr>
                        <td colspan="2"><i class="fas fa-user-circle"></i> <strong>Profil Mahasiswa<strong></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>NIM<strong></td>
                        <td width="80%">123</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%">Avisena Sanjaya</td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Jurusan<strong></td>
                        <td width="80%">Sistem Informasi</td>
                      </tr> 
                      <tr>
                        <td><strong>Foto Mahasiswa<strong></td>
                        <td><img src="foto/123.jpg" class="img-fluid" width="200px;"></td>
                      </tr>
                      <tr>
                        <td><strong>Hobi<strong></td>
                        <td>
                          <ul>
                            <li>Membaca</li>
                            <li>menulis</li>
                          </ul>
                        </td>
                      </tr>
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
