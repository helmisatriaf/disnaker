<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Aplikasi Arsip SP Disperinaker Kota Surabaya">
    <meta name="author" content="Disperinaker Kota Surabaya">\
    <title>Dashboard SP Dinperinaker Kota Surabaya</title>
  
    <link rel="shortcut icon" type="image/x-icon" href="assets/logodisperinaker.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <link href="../assets/dashboard.css" rel="stylesheet">

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
    <script type="text/javascript" charset="utf-8">
      $(document).ready(function() {
      $('.table-paginate').dataTable();
    } );
    </script>
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="dashboard.php" class="navbar-brand">Dinas Perindustrian dan Tenaga Kerja Kota Surabaya</a>
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
            <li><img src="../assets/logodisperinaker.png" class="img-responsive"></li>
          </ul>
          <ul class="nav">
            <li class="active"><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span> Dashboard </a></li>
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
            include '../logic/model.php';
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->edit($id);

            if (isset($_POST['update'])) {
              if (isset($_POST['tanggal_masuk_bidang_dan_verifikasi']) 
              && isset($_POST['no_online_dan_tanggal_online'])
              && isset($_POST['nama_pemohon'])  
              && isset($_POST['nomor_surat_permohonan']) 
              && isset($_POST['tanggal_surat_permohonan']) 
              && isset($_POST['nama_serikat_pekerja_atau_serikat_buruh']) 
              && isset($_POST['alamat_serikat_pekerja_atau_serikat_buruh']) 
              && isset($_POST['nomor_sk_pertek']) 
              && isset($_POST['ketua_atau_sekretaris']) 
              && isset($_POST['jumlah_anggota']) 
              && isset($_POST['nomer_telephone']) 
              && isset($_POST['kekurangan']) ) {
                if (!empty($_POST['tanggal_masuk_bidang_dan_verifikasi']) 
                && !empty($_POST['no_online_dan_tanggal_online']) 
                && !empty($_POST['nama_pemohon']) 
                && !empty($_POST['nomor_surat_permohonan']) 
                && !empty($_POST['tanggal_surat_permohonan']) 
                && !empty($_POST['nama_serikat_pekerja_atau_serikat_buruh']) 
                && !empty($_POST['alamat_serikat_pekerja_atau_serikat_buruh']) 
                && !empty($_POST['nomor_sk_pertek']) 
                && !empty($_POST['ketua_atau_sekretaris']) 
                && !empty($_POST['jumlah_anggota']) 
                && !empty($_POST['nomer_telephone']) 
                && !empty($_POST['kekurangan']) ) {
            
            $data['id'] = $id;
            $data['tanggal_masuk_bidang_dan_verifikasi'] = $_POST['tanggal_masuk_bidang_dan_verifikasi'];
						$data['no_online_dan_tanggal_online'] = $_POST['no_online_dan_tanggal_online'];
						$data['nama_pemohon'] = $_POST['nama_pemohon'];
						$data['nomor_surat_permohonan'] = $_POST['nomor_surat_permohonan'];
						$data['tanggal_surat_permohonan'] = $_POST['tanggal_surat_permohonan'];
						$data['nama_serikat_pekerja_atau_serikat_buruh'] = $_POST['nama_serikat_pekerja_atau_serikat_buruh'];
						$data['alamat_serikat_pekerja_atau_serikat_buruh'] = $_POST['alamat_serikat_pekerja_atau_serikat_buruh'];
						$data['nomor_sk_pertek'] = $_POST['nomor_sk_pertek'];
						$data['ketua_atau_sekretaris'] = $_POST['ketua_atau_sekretaris'];
						$data['jumlah_anggota'] = $_POST['jumlah_anggota'];
						$data['nomer_telephone'] = $_POST['nomer_telephone'];
						$data['kekurangan'] = $_POST['kekurangan'];

            $nama = $data['nama_pemohon'];
						$update = $model->update($data);
						
						if ($update) {
							echo "<script>alert(`Data Pemohon $nama Berhasil Diperbarui`);</script>";
							echo "<script>window.location.href = '../dashboard.php';</script>";
						}else{
							echo "<script>alert(`Data Pemohon $nama Gagal Diperbarui`);</script>";
							echo "<script>window.location.href = '../dashboard.php';</script>";
						}

					}else{
						echo "<script>alert('Form Tidak Boleh Ada Yang Kosong Yaaa');</script>";
						header("Location: edit.php?no=$no");
					}
				}
			}
          ?>
          
            <form action="" method="post"> 
                <div class="form-group">
                    <label for="">Tanggal Masuk Bidang & Verifikasi</label>
                    <input type="date" class="form-control" name="tanggal_masuk_bidang_dan_verifikasi" value="<?php echo $row['tanggal_masuk_bidang_dan_verifikasi']; ?>">
                </div>
                <div class="form-group">
                    <label for="">No Online Dan Tanggal Online</label>
                    <input type="text" class="form-control" name="no_online_dan_tanggal_online" value="<?php echo $row['no_online_dan_tanggal_online']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama Pemohon</label>
                    <input type="text" class="form-control" name="nama_pemohon" value="<?php echo $row['nama_pemohon']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nomor Surat Permohonan</label>
                    <input type="text" class="form-control" name="nomor_surat_permohonan" value="<?php echo $row['nomor_surat_permohonan']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Surat Permohonan</label>
                    <input type="date" class="form-control" name="tanggal_surat_permohonan" value="<?php echo $row['tanggal_surat_permohonan']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nama Serikat Pekerja / Serikat Buruh</label>
                    <input type="text" class="form-control" name="nama_serikat_pekerja_atau_serikat_buruh" value="<?php echo $row['nama_serikat_pekerja_atau_serikat_buruh']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Alamat Serikat Pekerja / Serikat Buruh</label>
                    <input type="text" class="form-control" name="alamat_serikat_pekerja_atau_serikat_buruh" value="<?php echo $row['alamat_serikat_pekerja_atau_serikat_buruh']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nomor SK Pertek</label>
                    <input type="text" class="form-control" name="nomor_sk_pertek" value="<?php echo $row['nomor_sk_pertek']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Ketua/Sekretaris</label>
                    <input type="text" class="form-control" name="ketua_atau_sekretaris" value="<?php echo $row['ketua_atau_sekretaris']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Jumlah Anggota</label>
                    <input type="text" class="form-control" name="jumlah_anggota" value="<?php echo $row['jumlah_anggota']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Nomer Telephone</label>
                    <input type="text" class="form-control" name="nomer_telephone" value="<?php echo $row['nomer_telephone']; ?>">
                </div>
                <div class="form-group">
                    <label for="">Kekurangan</label>
                    <input type="text" class="form-control" name="kekurangan" value="<?php echo $row['kekurangan']; ?>">
                </div>
                <div class="form-group mb-3">
                  <button type="submit" name="update" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
    </html>
