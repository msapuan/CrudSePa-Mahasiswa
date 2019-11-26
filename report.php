<?php
   include 'conn.php';

   $content = '
        <style type="text/css">
            h2 { text-align : center; }
            th { text-align : center; }
        </style>
   ';

   $content .= '
        <h2>Laporan</h2><hr><br><br>

        <table border="1" cellpadding="15" cellspacing="0">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Semester</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
   ';

    $no = 1;
    $query = mysqli_query($conn, "SELECT * FROM tbl_mahasiswa");
    while($data = mysqli_fetch_array($query)) {

   $content .= '
            <tbody>
                <tr>
                    <td>' . $no++ . '</td>
                    <td>' . $data["nim"] . '</td>
                    <td>' . $data["nama"] . '</td>
                    <td>' . $data["semester"] . '</td>
                    <td>' . $data["jurusan"] . '</td>
                </tr>
            </tbody>
   ';

    }

   $content .= '
        </table>
   ';


    require_once('assets/html2pdf/html2pdf.class.php');
    $html2pdf = new HTML2PDF('P', 'A4', 'en');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('crudsepare-mahasiswa.pdf');
?>