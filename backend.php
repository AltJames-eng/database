<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    

    $servername = "localhost";
    $username = "username";
    $password = "password";
    
   try{
   $conn= new PDO("mysql:host=$servername","james", "123456789");
   $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $sql="CREATE DATABASE myDBPDO";
   $conn->exec($sql);
   }catch(PDOException $error){
       echo ("An error occured" .$error);
   }
    
   echo ("Connected succesfully");
   
   $conn= null;
   
   
      
    //  echo "<h2>Sign Up Successful</h2>";
    //  echo "Username: " . $username . "<br>";
    //  echo "Email: " . $email . "<br>";
    
    //  echo "Password: " . $password . "<br>";
}
?>
