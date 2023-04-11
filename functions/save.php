<?php

include_once '../config/conn.php';

if (isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO reservations (user_id, nama, tanggal, jam) VALUES ( '$user_id', '$nama', '$tanggal', '$jam')";

    $result = mysqli_query($conn, $query);

    header('Location: ../dashboard.php');
}

header('Location: ../dashboard.php');
