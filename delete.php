<?php
	include 'conn.php';

	$id_mhs = $_GET['id_mhs'];

	mysqli_query($conn, 
			"DELETE FROM tbl_mahasiswa 
				WHERE id_mhs='$id_mhs'");

	header("location: index.php");
?>