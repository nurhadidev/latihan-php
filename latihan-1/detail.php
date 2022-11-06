<?php
include "header-footer/header.php";
?>


    <hr>

    <h1>Ini adalah Halaman Detail</h1>
    <a href="index.php">Kembali ke Index</a>

    <p>Parameter yang diterima:</p>

    <ul>
        <li>Nama: <?= $_GET['nama']; ?></li>
        <li>Email: <?= $_GET['email']; ?></li>
        <li>
            Photo:<br>
            <img src="<?= $_GET['photo']; ?>" alt="<?= $_GET['nama']; ?>">
        </li>
    </ul>

    <hr>



<?php
include "header-footer/footer.php";
?>