<?php

include_once '../config/conn.php';

$id = $_GET['id'];

$query = "DELETE FROM reservations WHERE id = $id";

$result = mysqli_query($conn, $query);

header('Location: ../dashboard.php');
