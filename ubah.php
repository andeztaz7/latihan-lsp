<?php
require 'functions.php';

$id = $_GET["id"];

$sws = query("SELECT * FROM user WHERE id = $id")[0];




if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
                <script>
                    alert('data berhasil diupdate!');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
            <script>
                alert('data gagal diupdate!');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update data siswa</title>
</head>

<body>
    <h1> Update data siswa</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sws["id"]; ?>">
        <ul>
            <li>
                <label for="nama">nama: </label>
                <input type="text" name="nama" id="nama" required value="<?= $sws["nama"]; ?>">
            </li>
            <li>
                <label for="email">email : </label>
                <input type="text" name="email" id="email" value="<?= $sws["email"]; ?>">
            </li>
            <li>
                <label for="username">username : </label>
                <input type="text" name="username" id="username" value="<?= $sws["username"]; ?>">
            </li>
            <li>
                <label for="password">password : </label>
                <input type="text" name="password" id="password" value="<?= $sws["password"]; ?>">
            </li>

            <li>
                <button type="submit" name="submit">Update Data </butto>
            </li>
        </ul>

    </form>
</body>

</html>