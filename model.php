<?php 

	Class Model{

		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $db = "sp_disperinaker";
		private $conn;

		public function __construct(){
			try {
				$this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
			} catch (Exception $e) {
				echo "connection failed" . $e->getMessage();
			}
		}

		public function create(){
			if (isset($_POST['submit'])) {
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
						
						$satu = $_POST['tanggal_masuk_bidang_dan_verifikasi'];
						$dua = $_POST['no_online_dan_tanggal_online'];
						$tiga = $_POST['nama_pemohon'];
						$empat = $_POST['nomor_surat_permohonan'];
						$lima = $_POST['tanggal_surat_permohonan'];
						$enam = $_POST['nama_serikat_pekerja_atau_serikat_buruh'];
						$tujuh = $_POST['alamat_serikat_pekerja_atau_serikat_buruh'];
						$delapan = $_POST['nomor_sk_pertek'];
						$sembilan = $_POST['ketua_atau_sekretaris'];
						$sepuluh = $_POST['jumlah_anggota'];
						$sebelas = $_POST['nomer_telephone'];
						$duabelas = $_POST['kekurangan'];

						$query = "INSERT INTO sp2022 (tanggal_masuk_bidang_dan_verifikasi, no_online_dan_tanggal_online, nama_pemohon, nomor_surat_permohonan, tanggal_surat_permohonan, nama_serikat_pekerja_atau_serikat_buruh, alamat_serikat_pekerja_atau_serikat_buruh, nomor_sk_pertek, ketua_atau_sekretaris, jumlah_anggota, nomer_telephone, kekurangan) VALUES ('$satu', '$dua', '$tiga', '$empat', '$lima', '$enam', '$tujuh', '$delapan', '$sembilan', '$sepuluh', '$sebelas', '$duabelas')";
						
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert(`Data Pemohon $tiga Berhasil Ditambahkan`);</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}else{
							echo "<script>alert('Data Pemohon $tiga Gagal Ditambahkan');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}

					}else{
						echo "<script>alert('Form Tidak Boleh Ada Yang Kosong Yaaa');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
					}
				}
			}
		}

		public function read(){
			$data = null;

			$query = "SELECT * FROM sp2022";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}

			return $data;
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM sp2022 WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE sp2022 SET 

			tanggal_masuk_bidang_dan_verifikasi='$data[tanggal_masuk_bidang_dan_verifikasi]', 
			no_online_dan_tanggal_online='$data[no_online_dan_tanggal_online]', 
			nama_pemohon='$data[nama_pemohon]', 
			nomor_surat_permohonan='$data[nomor_surat_permohonan]', 
			tanggal_surat_permohonan='$data[tanggal_surat_permohonan]', 
			nama_serikat_pekerja_atau_serikat_buruh='$data[nama_serikat_pekerja_atau_serikat_buruh]', 
			alamat_serikat_pekerja_atau_serikat_buruh='$data[alamat_serikat_pekerja_atau_serikat_buruh]', 
			nomor_sk_pertek='$data[nomor_sk_pertek]', 
			ketua_atau_sekretaris='$data[ketua_atau_sekretaris]', 
			jumlah_anggota='$data[jumlah_anggota]', 
			nomer_telephone='$data[nomer_telephone]', 
			kekurangan='$data[kekurangan]'

			WHERE id = '$data[id]'";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function delete($id){

			$query = "DELETE FROM sp2022 where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>