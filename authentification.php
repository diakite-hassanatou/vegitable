<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hdiakite
 * Date: 2015-09-08
 * Time: 15:34
 */

$username_input = $_POST['username'];
$password_input = $_POST['password'];

//echo $username;
//echo $password;

//Ouverture de session base de donnÉes

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "veggies";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
   // echo "erreur de connexion";
}

$sql = "SELECT * FROM utilisateurs WHERE username='$username_input' AND password='$password_input'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   /* while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Userame: " . $row["username"]. " " . $row["password"]. "<br>";
    }*/
    //echo "Success";
    $_SESSION["connected"] = "true";
    echo $_SESSION['connected'];
    setcookie("username", $username_input, time()+3600);
    setcookie("password", $password_input, time()+3600);
    echo $_COOKIE['username'];
    echo "<br/>";
    echo $_COOKIE['password'];


   header('Location: admin.php');
    exit;
} else {
    header('Location: login.php');
    exit;
    //echo "Veuillez vous logger ici";
}
$conn->close();