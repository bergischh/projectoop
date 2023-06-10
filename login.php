<?php
    include ('connect.php');
    $koneksi = new Database();
    
    
    if (isset($_POST['login'])) {
        $koneksi->login($_POST['username'], $_POST['password']);
        header("Location:input_data.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
          body {
            background-color: #FEFCF3;
        }
        .login {
            border-style: dotted solid;
            margin-left: 380px;
            margin-right: 380px;
            padding-top: 50px;
            position: relative;
            border: 1px solid #868B8E;
            border-radius: 15px;
            padding-bottom: 65px;
            margin-top: 10%;
        }
        form {
           text-align: center;
        }
        input {
            border: 2px solid #BDCDD6;
            border-radius: 4px;
        }
        button {
            margin-top: 30px;
            width: 30%;
            height: 28px;
            background-color: #E5D1FA;
            border: 2px solid #BDCDD6;
            border-radius: 5px;
        }
        h1 {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>

    <div class="login">
    <form action="" method="post">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit" name="login">Login</button>
        <p>Anda belum punya akun? <a href="signup.php">Sign Up</a></p>
    </form>
    </div>
</body>
</html>