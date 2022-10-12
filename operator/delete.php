<?php 

	include '../logic/model.php';
	$model = new Model();
	$id = $_REQUEST['id'];
	$delete = $model->delete($id);

	if ($delete) {
		echo "<script>alert('Data Berhasil Dihapus');</script>";
		echo "<script>window.location.href = '../dashboard.php';</script>";
	}

 ?>