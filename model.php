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

		public function insert(){

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
					if (!empty($_POST['tanggal_masuk_bidang_dan_verifikasi']) && !empty($_POST['no_online_dan_tanggal_online']) && !empty($_POST['nama_pemohon']) && !empty($_POST['nomor_surat_permohonan']) && !empty($_POST['tanggal_surat_permohonan']) && !empty($_POST['nama_serikat_pekerja_atau_serikat_buruh']) && !empty($_POST['alamat_serikat_pekerja_atau_serikat_buruh']) && !empty($_POST['nomor_sk_pertek']) && !empty($_POST['ketua_atau_sekretaris']) && !empty($_POST['jumlah_anggota']) && !empty($_POST['nomer_telephone']) && !empty($_POST['kekurangan']) ) {
						
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

						$query = "INSERT INTO sp2022 (tanggal_masuk_bidang_dan_verifikasi, 
						no_online_dan_tanggal_online, 
						nama_pemohon, nomor_surat_permohonan, 
						tanggal_surat_permohonan, 
						nama_serikat_pekerja_atau_serikat_buruh, 
						alamat_serikat_pekerja_atau_serikat_buruh, 
						nomor_sk_pertek, 
						ketua_atau_sekretaris, jumlah_anggota, nomer_telephone, kekurangan) VALUES ('$satu','$dua','$tiga','$empat','$lima','$enam','$tujuh','$delapan','$sembilan','$sepuluh','$sebelas','$duabelas')";
						
						echo "<script>console.log($query);</script>";
						echo "<script>console.log('Debug Objects: " . $sql = $this->conn->query($query) . "');</script>";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('data added successfully');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}else{
			
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'index.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'index.php';</script>";
					}
				}
			}
		}

		public function hasil(){

			if (isset($_POST['submit'])) {
				if (isset($_POST['hasil']) && isset($_POST['kondisi']) && isset($_POST['wilayah'])) {
					if (!empty($_POST['hasil']) && isset($_POST['kondisi']) && isset($_POST['wilayah']) ) {
						
						$hasil = $_POST['hasil'];
						$kondisi = $_POST['kondisi'];
						$wilayah = $_POST['wilayah'];

						$query = "INSERT INTO hasiltani (hasil,kondisi,wilayah) VALUES ('$hasil','$kondisi','$wilayah')";
						if ($sql = $this->conn->query($query)) {
							echo "<script>alert('taniku added successfully');</script>";
							echo "<script>window.location.href = 'datahasil.php';</script>";
						}else{
							echo "<script>alert('failed');</script>";
							echo "<script>window.location.href = 'datahasil.php';</script>";
						}

					}else{
						echo "<script>alert('empty');</script>";
						echo "<script>window.location.href = 'datahasil.php';</script>";
					}
				}
			}
		}

		public function fetch(){
			$data = null;

			$query = "SELECT * FROM sp2022";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}

			return $data;
		}

		public function fetchhasil(){
			$data = null;

			$query = "SELECT * FROM hasiltani";
			if ($sql = $this->conn->query($query)) {
				while ($row = mysqli_fetch_assoc($sql)) {
					$data[] = $row;
				}
			}
			return $data;
		}

		public function delete($id){

			$query = "DELETE FROM taniku where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function deletehasil($id){

			$query = "DELETE FROM hasiltani where id = '$id'";
			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function edit($id){

			$data = null;

			$query = "SELECT * FROM taniku WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function edithasil($id){

			$data = null;

			$query = "SELECT * FROM hasiltani WHERE id = '$id'";
			if ($sql = $this->conn->query($query)) {
				while($row = $sql->fetch_assoc()){
					$data = $row;
				}
			}
			return $data;
		}

		public function update($data){

			$query = "UPDATE taniku SET name='$data[name]', kecamatan='$data[kecamatan]', kontak='$data[kontak]', gender='$data[gender]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}

		public function updatehasil($data){

			$query = "UPDATE hasiltani SET hasil='$data[hasil]', kondisi='$data[kondisi]', wilayah='$data[wilayah]' WHERE id='$data[id] '";

			if ($sql = $this->conn->query($query)) {
				return true;
			}else{
				return false;
			}
		}
	}

 ?>