<?php
    include 'top.php';
    include 'navbar.php';
?>

<div class="container">
    
    <?php
        if(@$_GET['page'] == 'tampil' || @$_GET['page'] == '') {
            include 'read.php';
        } elseif (@$_GET['page'] == 'input') {
            include 'create.php';
        }
    ?>

</div>

<?php
    include 'bottom.php';
?>