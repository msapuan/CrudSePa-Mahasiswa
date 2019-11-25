<?php
	
        include 'conn.php';
        
        if(isset($_POST['edit'])) {
            $id_mhs 	= $_POST['id_mhs'];
            $nim		= $_POST['nim'];
            $nama		= $_POST['nama'];
            $semester	= $_POST['semester'];
            $jurusan	= $_POST['jurusan'];

            mysqli_query($conn, 
                "UPDATE tbl_mahasiswa 
                    SET nim='$nim', 
                        nama='$nama', 
                        semester='$semester', 
                        jurusan='$jurusan'
                    WHERE id_mhs='$id_mhs'");

            header("location: index.php");

        } elseif(isset($_POST['back'])) {
            header("location: index.php");
        }

		
?>