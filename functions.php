<?php
$conn = mysqli_connect("localhost", "root", "", "dblatihanlsp_");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);


    $query = "INSERT INTO user
    VALUES
    ('', '$nama', '$email', '$username', '$password')
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($Id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id = $Id");
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $password = htmlspecialchars($data["password"]);


    $query = "UPDATE user SET 
                nama = '$nama', 
                email = '$email', 
                username = '$username', 
                password= '$password'
               
            WHERE id = $id
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
