<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Input Data SP | Dinperinaker Kota Surabaya</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
      *{
        font-family: Poppins, sans-serif;
      }
    </style>

    <link rel="shortcut icon" type="image/x-icon" href="logodisperinaker.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <!-- Custom styles for this template -->
    
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
      $('.table-paginate').dataTable();
    } );
    </script>

  <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Dinas Perindustrian dan Tenaga Kerja Kota Surabaya</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div name="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar" style="padding:15px;">
            <li><img src="logodisperinaker.png" class="img-responsive"></li>
          </ul>
          <ul class="nav">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>
          </ul>
          <ul class="nav">
            <li><a href="data.php"><span class="glyphicon glyphicon-envelope"></span> Data SP</a></li>
          </ul>
          <ul class="nav">
            <li><a href="input.php"><span class="glyphicon glyphicon-download-alt"></span> Input Data</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="text-center">Input Data Yang Bener</h2>
        <div>
          
          <?php
            include 'model.php';
            $model = new Model();
            $insert = $model->create();
          ?>
          
            <form action="" method="post"> 
                <div class="form-group">
                    <label for="">Tanggal Masuk Bidang & Verifikasi</label>
                    <input type="date" class="form-control" name="tanggal_masuk_bidang_dan_verifikasi">
                </div>
                <div class="form-group">
                    <label for="">No Online Dan Tanggal Online</label>
                    <input type="text" class="form-control" name="no_online_dan_tanggal_online">
                </div>
                <div class="form-group">
                    <label for="">Nama Pemohon</label>
                    <input type="text" class="form-control" name="nama_pemohon">
                </div>
                <div class="form-group">
                    <label for="">Nomor Surat Permohonan</label>
                    <input type="text" class="form-control" name="nomor_surat_permohonan">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Surat Permohonan</label>
                    <input type="date" class="form-control" name="tanggal_surat_permohonan">
                </div>
                <div class="form-group">
                    <label for="">Nama Serikat Pekerja / Serikat Buruh</label>
                    <input type="text" class="form-control" name="nama_serikat_pekerja_atau_serikat_buruh">
                </div>
                <div class="form-group">
                    <label for="">Alamat Serikat Pekerja / Serikat Buruh</label>
                    <input type="text" class="form-control" name="alamat_serikat_pekerja_atau_serikat_buruh">
                </div>
                <div class="form-group">
                    <label for="">Nomor SK Pertek</label>
                    <input type="text" class="form-control" name="nomor_sk_pertek">
                </div>
                <div class="form-group">
                    <label for="">Ketua/Sekretaris</label>
                    <input type="text" class="form-control" name="ketua_atau_sekretaris">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Anggota</label>
                    <input type="text" class="form-control" name="jumlah_anggota">
                </div>
                <div class="form-group">
                    <label for="">Nomer Telephone</label>
                    <input type="text" class="form-control" name="nomer_telephone">
                </div>
                <div class="form-group">
                    <label for="">Kekurangan</label>
                    <input type="text" class="form-control" name="kekurangan">
                </div>
                <div class="form-group mb-3">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</php>
