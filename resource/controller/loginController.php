<?php
session_start();
include '../config/conn.php';

// Periksa apakah sesi sudah ada
if (isset($_SESSION['email'])) {
    header("Location: ../views/landingpage.php");
    exit();
}

// Proses login
if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']);
    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        
        // Simpan informasi pengguna ke dalam sesi
        $_SESSION['email'] = $row['email'];
        $_SESSION['role'] = $row['role'];
        
        if ($row['role'] == "siswa") {
            header('Location: ../views/dashboard.php');
        } else if ($row['role'] == "guru") {
            header('Location: ../views/landingpage.php');
        }
    } else {
        echo "<script>alert('Email atau Password salah, coba lagi.')</script>";
    }
}

// Tutup koneksi database
$conn->close();
?>
