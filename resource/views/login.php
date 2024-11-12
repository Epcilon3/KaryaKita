<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaryaKita Login</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .container {
            display: flex;
            width: 60%;
            max-width: 1000px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }

        .image-section {
            width: 50%;
        }

        .image-section img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .login-section {
            width: 50%;
            padding: 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center; /* Align content in the center */
        }

        .login-section h1 {
            font-family: 'Comic Sans MS', cursive;
            font-size: 36px;
            margin-bottom: 20px;
        }

        .input-group {
            width: 100%;
            margin-bottom: 20px;
            position: relative;
        }

        .input-group input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .show-password {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: #218838;
        }

        .forgot-password {
            margin-top: 20px; /* Tambahkan jarak di atas */
            display: block;
            color: #007bff;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
            color: #333;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image-section">
            <img src="../../design/assets/hero_image_pic.PNG" alt="KaryaKita">
        </div>
        <div class="login-section">
            <h1>KaryaKita</h1>
            <form action="../controller/loginController.php" method="POST">
                <div class="input-group">
                    <input type="email" name="email" placeholder="email@gmail.com" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <span class="show-password" onclick="togglePassword()">👁️</span>
                </div>
                <button type="submit" name="submit"class="login-btn">Login</button>
                <a href="#" class="forgot-password">Forgot Password?</a>
            </form>
            <p>Don't have an account? <a href="register.php">Sign Up</a></p>
        </div>
    </div>
    <script>
        function togglePassword() {
            var passwordField = document.querySelector('input[name="password"]');
            var type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
        }
    </script>
</body>
</html>
