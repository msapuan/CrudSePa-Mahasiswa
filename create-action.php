<?php  
	if(isset($_POST['create'])) {
		include 'conn.php';

		$nim		= $_POST['nim'];
		$nama		= $_POST['nama'];
		$semester	= $_POST['semester'];
		$jurusan	= $_POST['jurusan'];

		mysqli_query($conn, 
				"INSERT INTO tbl_mahasiswa 
					VALUES('', 
							'$nim', 
							'$nama', 
							'$semester', 
							'$jurusan')");

		header("location: read.php");
	}
?>