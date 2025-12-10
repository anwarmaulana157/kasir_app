<?php
session_start();
include 'config.php';

// ===================================================================
// LOGIN MANUAL (username + password)
// ===================================================================
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cek username di tabel login
    $query = mysqli_query($conn, "SELECT * FROM login WHERE user = '$username'");

    if (mysqli_num_rows($query) > 0) {

        $data = mysqli_fetch_assoc($query);

        // Cek password
        if ($password == $data['pass']) {

            $id_user = $data['id_user'];

            // Ambil data user
            $query_user = mysqli_query($conn, "SELECT * FROM users WHERE id_user = '$id_user'");
            $user = mysqli_fetch_assoc($query_user);

            // Set Session
            $_SESSION['login'] = true;
            $_SESSION['id_login'] = $data['id_login'];
            $_SESSION['username'] = $data['user'];
            $_SESSION['role'] = $data['role'];

            // Dari tabel users
            $_SESSION['id_user'] = $user['id_user'];
            $_SESSION['nama'] = $user['nm_user'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['alamat'] = $user['alamat'];

            header("Location: admin/index.php");
            exit;
        } else {
            echo "<script>alert('Password salah!');document.location.href='index.php';</script>";
            exit;
        }
    } else {
        echo "<script>alert('Username tidak ditemukan!');document.location.href='index.php';</script>";
        exit;
    }
}

echo "<script>alert('Akses tidak valid!');document.location.href='index.php';</script>";
exit;
