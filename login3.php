
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background: 
                linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
                url('https://thumbs.dreamstime.com/z/bharat-coking-coal-limited-building-bccl-koyla-bhawan-subsidiary-india-dhanbad-253173408.jpg?w=992');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
        }
        .container {
            perspective: 1000px;
            width: 300px;
            height: 350px; 
            position: relative;
        }
        .inner-container {
            position: absolute;
            width: 100%;
            height: 100%;
            transition: transform 0.6s;
            transform-style: preserve-3d;
        }
        .flipped .inner-container {
            transform: rotateY(180deg);
        }
        .login-container, .forgot-container {
            position: absolute;
            width: 100%;
            height: 100%;
            padding: 20px;
            background-color: rgba(190, 190, 190, 0.7); 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            backdrop-filter: blur(0.01px); 
            backface-visibility: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .forgot-container {
            transform: rotateY(180deg);
        }
        .form-content {
            width: 100%;
        }
        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 80px;
            height: auto;
        }
        .login-container h2, .forgot-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: white; 
        }
        .login-container label, .forgot-container label {
            color: white;
        }
        .login-container input[type="text"],
        .login-container input[type="password"],
        .forgot-container input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: rgba(255, 255, 255, 0.8); 
        }
        .login-container input[type="submit"],
        .forgot-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-sizing: border-box;
        }
        .login-container input[type="submit"]:hover,
        .forgot-container input[type="submit"]:hover {
            background-color: #45a049;
        }
        .login-container a,
        .forgot-container a {
            display: inline-block;
            color: white;
            text-decoration: none;
            font-size: 14px;
            margin-top: 10px;
            text-align: center;
        }
        .login-container .forgot-password {
            position: relative;
            top: -10px; 
            float: left;
        }
        .login-container .signup,
        .forgot-container .register {
            display: block;
            text-align: center;
            margin-top: 20px;
        }
        .login-container a:hover,
        .forgot-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <img src="https://www.mpscworld.com/wp-content/uploads/2020/04/bccl-logo.jpg" alt="Logo" class="logo">
    <div class="container">
        <div class="inner-container">
            <div class="login-container">
                <div class="form-content">
                    <h2>Login</h2>
                    <form action="login-backend.php" method="post">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                        <a href="#" class="forgot-password" onclick="flipToForgot()">Forgot Password?</a>
                        <input type="submit" name="submit" value="Login">
                        <a href="#" class="signup">Don't have an account? Sign up</a>
                    </form>
                </div>
            </div>
            <div class="forgot-container">
                <div class="form-content">
                    <h2>Forgot Password</h2>
                    <form action="/submit_forgot_password" method="post">
                        <label for="email">Enter Your Email</label>
                        <input type="email" id="email" name="email" required>
                        <input type="submit" value="Send Email">
                        <a href="#" class="register" onclick="flipToLogin()">Back to Login</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function flipToForgot() {
            document.querySelector('.container').classList.add('flipped');
        }
        function flipToLogin() {
            document.querySelector('.container').classList.remove('flipped');
        }
    </script>
</body>
</html>

