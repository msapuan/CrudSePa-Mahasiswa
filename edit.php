<?php
    include 'top.php';
    include 'navbar.php';
?>

<div class="container">
    <h2 class="text-center">Edit Data</h2><hr><br><br>

    <!-- form edit data mahasiswa -->
    <div class="row">
        <div class="col-md-4 col-md-4-offset">
            <form method='post' action='update.php'>

            <?php
                include 'conn.php';
                $id_mhs = $_GET['id_mhs'];
                $query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa WHERE id_mhs='$id_mhs'");
                while($data = mysqli_fetch_array($query)) {
            ?>

                <div class="form-group">
                    <label>NIM</label>
                    <input type="hidden" name="id_mhs" class="form-control" value="<?php echo $data['id_mhs']; ?>">
                    <input type="text" class="form-control" name="nim" placeholder="Masukkan NIM ..." required value="<?php echo $data['nim']; ?>">
                </div>
                <div class="form-group">
                    <label>Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama ..." required value="<?php echo $data['nama']; ?>">
                </div>
                <div class="form-group">
                    <label>Semester</label>
                    <input type="text" class="form-control" name="semester" placeholder="Masukkan Semester ..." maxlength="3" required value="<?php echo $data['semester']; ?>">
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <select name="jurusan" class="form-control" name="jurusan" value="<?php echo $data['jurusan']; ?>">
                        <option value="">-- Pilih Jurusan --</option>
                        <option value="S1 - Teknik Informatika" <?php if($data['jurusan'] == 'S1 - Teknik Informatika'){ echo 'selected'; } ?>>S1 - Teknik Informatika</option>
                        <option value="D3 - Manajemen Informatika" <?php if($data['jurusan'] == 'D3 - Manajemen Informatika'){ echo 'selected'; } ?>>D3 - Manajemen Informatika</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit</button>
                <button type="submit" class="btn btn-warning" name="back">Back</button>

            <?php } ?>

            </form>
        </div>
    </div>
</div> 
<!-- end container -->

<?php
    include 'bottom.php';
?>