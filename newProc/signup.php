<?php
// Include database connection
include 'db.php';

// Display any error messages (if set by registerProc.php)
if (isset($_GET['error'])) {
    $error = $_GET['error'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation Bar -->
    <nav>
        <div class="logo">Job Portal</div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <!-- Main Container -->
    <div class="container">
        <h1>Create Your Account</h1>
        <p>Sign up to start applying for jobs.</p>

        <!-- Show error message -->
        <?php if (isset($error)) { echo "<p class='error' style='color: red;'>$error</p>"; } ?>

        <!-- Sign Up Form -->
        <form action="registerProc.php" method="POST">

        <?php

    require_once "./registerProc.php";

        ?>  

            <input type="text" name="first_name" placeholder="First Name" required><br>
            <input type="text" name="last_name" placeholder="Last Name" required><br>
            <input type="email" name="email" placeholder="Email" required><br>
            <input type="password" name="password" placeholder="Password" required><br>
            <button type="submit" class="button">Sign Up</button>
        </form>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 Job Portal. All rights reserved.</p>
    </footer>

</body>
</html>
