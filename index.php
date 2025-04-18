<?php


// Include database connection
include('db_connection.php');

// Fetch products from the database
$query = "SELECT * from produit LIMIT 10";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Al Assala - Poterie Tunisienne</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <h1>Welcome to Al Assala!</h1>
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
        <section id="intro" class="container">
            <h2>Authentic Tunisian Pottery and Traditional Crafts</h2>
            <p>
                Explore the beauty and artistry of handmade Tunisian pottery. Crafted
                by artisans who pass down their skills through generations.
            </p>
        </section>

        <!-- Display products -->
        <section id="products" class="container">
            <h2>Featured Products</h2>
            <div class="product-grid">
                <?php
                
                    while ($row = mysqli_fetch_assoc($result)) 
                    {
                ?>
                

                    <div class="product-card">
                     
                     <img src="images/<?php echo $row['img'] ?>">
                        <h3> <p><?php echo $row ['nom'] ?></p></h3>
                        <p><?php echo $row ['nom'] ?></p>
                        <p><?php echo $row ['prix']; echo " DINAR"?></p>
                        <H3><button><a href="login.php">BUY</a></button></H3>

                    </div>
                <?php
                    }
                ?>

            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2025 Al Assala. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
