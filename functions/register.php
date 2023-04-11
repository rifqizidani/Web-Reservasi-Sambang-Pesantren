<?php

include_once '../config/conn.php';

if (isset($_POST['username'])) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (nama, username, password) VALUES ( '$nama', '$username', '$password')";

    $result = mysqli_query($conn, $query);

    header('Location: ../index.php');
}

header('Location: ../index.php');
