


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Al Assala</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Al Assala</h1>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="signup.php">Sign Up</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <div class="login-container" id="login">
            <h2>Login</h2>
           
            <form action="session.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" required />
                </div>
                <div class="form-group">
                    <label for="mdp">Password</label>
                    <input type="password" id="mdp" name="mdp" placeholder="Enter your password" required />
                </div>
                <button type="submit" name="login">Login</button>

                <p style="margin-top: 15px; color: #5a4a42;">
  You don't have an account? <a href="signup.php" style="color: #8d6e63;">sign up here</a>
</p>
            </form>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Al Assala. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
