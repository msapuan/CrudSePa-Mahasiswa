<?php
    // reference the Dompdf namespace
    include 'assets/dompdf/src/Dompdf';
    include 'conn.php';

    $html = 
        '<table border="1">'.
            '<tr>'.
                '<th>No</th>'.
                '<th>NIM</th>'.
                '<th>Nama Mahasiswa</th>'.
                '<th>Semester</th>'.
                '<th>Jurusan</th>'.
            '</tr>'.

        '</table>'

    ;

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);

    // (Optional) Setup the paper size and orientation
    $dompdf->setPaper('A4', 'landscape');

    // Render the HTML as PDF
    $dompdf->render();

    // Output the generated PDF to Browser
    $dompdf->stream();
?>