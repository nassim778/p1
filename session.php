<?php

include 'db_connection.php';
  

if (isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['mdp'];

    $id=$_POST['id'];
    $adresse=$_POST['adresse'];



    $sql="SELECT * FROM member where email='$email'and mdp='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['email']=$row['email'];
     header("location: homepage.php");
     exit();
    }
    else{
        echo " not found, incorrect email or password !";
    }
}

?>
