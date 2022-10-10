<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Data SP | Dinperinaker Kota Surabaya</title>

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
        <div id="navbar" class="navbar-collapse collapse">
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
            <li><a href="input.php"><span class="glyphicon glyphicon-envelope"></span> Input Data</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="text-center">Data SP</h2>
          <div class="table-responsive" style="width:1700px">
            <table class="table table-striped table-bordered table-paginate table-hover">
            <thead>
              <tr>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">No</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Tanggal Masuk Bidang & Verifikasi</p></th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">No Online Dan Tanggal Online</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Nama Pemohon</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Nomor Surat Permohonan</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Tanggal Surat Permohonan</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Nama Serikat Pekerja / Serikat Buruh</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Alamat Serikat Pekerja / Serikat Buruh</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Nomor SK Pertek</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Ketua / Sekretaris</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Jumlah Anggota</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Nomor Telephone</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Kekurangan</th>
                <th style="text-align:center;vertical-align:middle;font-size:12px;">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                include 'model.php';
                $model = new Model();
                $rows = $model->read();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <tr>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $i++; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['tanggal_masuk_bidang_dan_verifikasi']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['no_online_dan_tanggal_online']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['nama_pemohon']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['nomor_surat_permohonan']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['tanggal_surat_permohonan']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['nama_serikat_pekerja_atau_serikat_buruh']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['alamat_serikat_pekerja_atau_serikat_buruh']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['nomor_sk_pertek']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['ketua_atau_sekretaris']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['jumlah_anggota']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['nomer_telephone']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;"><?php echo $row['kekurangan']; ?></td>
                <td style="text-align:center;vertical-align:middle;font-size:10;">
                  <a href="delete.php?no=<?php echo $row['no']; ?>" class=" m-1 text-align-center vertical-align-middle ">Delete</a>
                  <a href="edit.php?no=<?php echo $row['no']; ?>" class=" m-5 text-align-center vertical-align-middle">Edit</a>
                </td>
              </tr>

              <?php
                }
              }else{
                echo "no data";
            }

              ?>
            </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ===========================f======================= -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</php>
