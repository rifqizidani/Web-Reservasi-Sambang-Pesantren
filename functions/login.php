<?php
session_start();

include_once '../config/conn.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        $user = mysqli_fetch_assoc($result);

        if ($user['password'] === $password) {
            $_SESSION['login'] = [
                'id' => $user['id'],
                'username' => $user['username'],
                'nama' => $user['nama'],
            ];

            return header('Location: ../dashboard.php');
        }
    }

    header('Location: ../index.php');
}

header('Location: ../index.php');
