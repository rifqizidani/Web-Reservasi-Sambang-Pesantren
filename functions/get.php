<?php

include_once 'config/conn.php';

$id = $_SESSION['login']['id'];

function getReservasi() {
    global $conn, $id;
    $query = "SELECT * FROM reservations WHERE tanggal >= CURRENT_DATE AND user_id = $id";

    $result = mysqli_query($conn, $query);

    return $result;
}

function getHistory() {
    global $conn, $id;
    $query = "SELECT * FROM reservations WHERE tanggal < CURRENT_DATE AND user_id = $id";

    $result = mysqli_query($conn, $query);

    return $result;
}
