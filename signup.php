<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
  include('db_connection.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Collect form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $email = $_POST['email'];
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT); // Hash the password
    
     // check email:
     $checkemail="SELECT * FROM member where email='$email'";
     $result=$conn->query ($checkemail);
      if ($result->num_rows>0){
      echo "email adress is already exist !";

     } else{
      // Insert data into the database
    $sql = "INSERT INTO member (nom, prenom, adresse, email, mdp) VALUES ('$nom', '$prenom', '$adresse', '$email', '$mdp')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

     }
    

    // Close connection
    $conn->close();
} else {
    echo "Form not submitted.";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
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
    <div class="login-container">
      <h2>Sign Up</h2>
      <form action="signup.php" method="post">

        <div class="form-group">
        <label for="nom">First Name:</label>
        <input type="text" id="nom" name="nom" required placeholder="enter your name"/>
        </div>
        <div class="form-group">
        <label for="prenom">Last Name:</label>
        <input type="text" id="prenom" name="prenom" required placeholder="enter your last name"/>
        </div>
        <div class="form-group">
        <label for="adresse">Address:</label>
        <input type="text" id="adresse" name="adresse" required placeholder="enter your adress" />
        </div>
        <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required placeholder="enter your email"/>
        </div>
        <div class="form-group">
        <label for="mdp">Password:</label>
        <input type="password" id="mdp" name="mdp" required placeholder="enter your password" />
        </div>
        <button type="submit">Sign Up</button>
        <p style="margin-top: 15px; color: #5a4a42;">
  Already have an account? <a href="login.php" style="color: #8d6e63;">Login here</a>
</p>
      </form>
    </div>
  </body>
</html>
