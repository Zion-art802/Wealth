<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Job Portal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

    require_once "registerProc.php";

    ?>

<div class="container">
    <h2>Sign Up</h2>
    <form action="" method="POST">
        <input type="text" name="firstname" placeholder="First Name" required>
        <input type="text" name="lastname" placeholder="Last Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="signup">Sign Up</button>
    </form>
</div>

<?php include 'footer.php'; ?>

</body>
</html>
