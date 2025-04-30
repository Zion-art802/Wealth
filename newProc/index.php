<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<header>
    <nav>
        <div class="logo">JobPortal</div>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>

<div class="container">
    <h1 class="fade-in">Welcome to the Job Portal</h1>
    <p class="fade-in">Find your dream job today!</p>
    <div class="buttons">
        <a href="signup.php" class="button">Sign Up</a>
        <a href="login.php" class="button">Login</a>
    </div>
</div>

<footer>
    <p>&copy; <?php echo date("Y"); ?> JobPortal. All rights reserved.</p>
</footer>

</body>
</html>
