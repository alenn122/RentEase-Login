<?php
include "../connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; // Plain text password

    // Fetch user from the database
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {
        // Directly compare the plain text password
        if ($password === $row['password']) {
            $_SESSION['username'] = $row['username'];
            header("Location: ../homepage.php");
            exit();
        } else {
            // echo "Invalid credentials!";
            echo "<script>alert('Invalid credentials!');</script>";
        }
    } else {
        echo "<script>alert('No account found!');</script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FAVICON -->
    <link rel="icon" href="../images/favicon.png" type="image/png">
    <!-- BOOTSTRAP CDN -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
    <!-- BOOTSTRAP ICON -->
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../style.css">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            justify-content:center;
            align-items:center;
            height: 100vh;  
            background: linear-gradient(rgba(0, 0, 0, 0.822), rgba(4, 14, 2, 0.812)), url(../images/featured.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .login{
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            width: 400px;
            text-align: center;
            border: 2px solid var(--border-color);
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .index-page{
            position: fixed;
            top: 2rem;
            left: 3rem;
        }
        .index-page i{
            font-size: xx-large;
            color: var(--title-color);
            padding-bottom: 4px;
            border-bottom: 2px solid var(--title-color);
        }

    </style>
<body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-auto">
            <div class="login">
            <h2>Login</h2>
            <form method="POST">
                <input type="email" name="email" placeholder="Enter Email" required> <br>
                <input type="password" name="password" placeholder="Enter Password" required> <br>
                <button class="btn btn-main mb-4" type="submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>
        </div>
    </div>
    </div>
    </div>
    <a href="../index.php" class="index-page">
    <i class="bi bi-house-fill"> RentEase</i>
    </a>
</body>
</html>
