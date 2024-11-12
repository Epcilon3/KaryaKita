
<?php
session_start();
include '../config/conn.php';

if (isset($_SESSION['email'])) {
    header("Location: ../views/login.php");
    exit();
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);

    $username = $_POST['username'];
    $role = $_POST['role'];

    if ($password == $password) {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (email,password,username, role) VALUES ('$email', '$password','$username',  '$role')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Registrasi berhasil, arahkan ke halaman login
                header("Location: ../views/login.php?message=Registrasi Berhasil");
                exit();
            } else {
                echo "<script>alert('Terjadi Kesalahan saat melakukan registrasi.')</script>";
            }
        } else {
            echo "<script>alert('Username sudah terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password tidak sesuai.')</script>";
    }
}
?>

