

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaryaKita - Sign Up</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f7f7f7;
        }
        .container {
            max-width: 500px; /* Diubah dari 400px menjadi 500px */
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h1 {
            font-family: 'Courier New', Courier, monospace;
            font-size: 2em;
            margin-bottom: 20px;
        }
        .google-login {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #ccc;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            cursor: pointer;
        }
        .google-login img {
            width: 20px;
            margin-right: 10px;
        }
        .or-divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #777;
            margin: 20px 0;
        }
        .or-divider::before,
        .or-divider::after {
            content: "";
            flex: 1;
            border-bottom: 1px solid #ccc;
            margin: 0 10px;
        }
        .form-input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .signup-button {
            width: 100%;
            padding: 10px;
            background-color: #009688;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 20px;
        }
        .signup-button:hover {
            background-color: #00796b;
        }
        .footer {
            margin-top: 20px;
            color: #777;
            font-size: 0.9em;
        }
        .footer a {
            color: #009688;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>KaryaKita</h1>
        <div class="google-login">
            <img src="../../design/assets/google.png" alt="Google Logo">
            <span>Log in with Google</span>
        </div>

        <div class="or-divider">OR</div>

        <form action="../controller/registerController.php" method="post"> <!-- Tambahkan form action dan method -->
            <input name="email" type="email" class="form-input" placeholder="email@gmail.com" required>
            <input name="password" type="password" class="form-input" placeholder="Password" required>
           
            <input name="username" class="form-input" placeholder="Username" required>
            <select name="role" required>
                <option value="" disabled selected>Pilih Role dari user</option>
                <option value="siswa">SISWA</option>
                <option value="guru">GURU</option>
            </select>

            <button type="submit" name="submit" class="signup-button">Sign up</button>
        </form>

        <div class="footer">
            Have an account? <a href="login.php">Log in</a>
        </div>
    </div>

</body>
</html>
