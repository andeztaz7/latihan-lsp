<?php

require 'functions.php';
$dblatihanlsp_ = query('SELECT * FROM user');




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Halaman admin</title>
</head>

<body>

    <h1> Daftar siswa </h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>



    <br>
    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>nama</th>
            <th>email</th>
            <th>username</th>
            <th>password</th>
            <th>aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($dblatihanlsp_ as $row) : ?>
            <tr>
                <td> <?= $i ?> </td>

                <td> <?= $row["nama"]; ?> </td>
                <td> <?= $row["email"]; ?> </td>
                <td> <?= $row["username"]; ?> </td>
                <td> <?= $row["password"]; ?> </td>
                <td>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> /
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
            return confirm('Yakin anda ingin menghapus?');">hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
</body>

</html>