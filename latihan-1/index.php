<?php
include "header-footer/header.php";
?>

<?php
$nama = 'Abyan';
$email = 'abyan@gmail.com';
$photo = 'images/byan.png';
?>


    <hr>

    <h1>Ini adalah content index</h1>

    <a href="detail.php?nama=<?= $nama ?>&email=<?= $email ?>&photo=<?= $photo ?>">Ke halaman
        detail</a>

    <hr>


<?php
include "header-footer/footer.php";
?>