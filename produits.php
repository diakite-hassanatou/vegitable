<?php
session_start();

// Definition des parametres d' acces a la base de donnees
$servername = "localhost";
$username = "hassalobe";
$password = "ypa9esegu";
$dbname = "hassalobe_veggies";

// Creer connection avec la base de donnees
$conn = new mysql($servername, $username, $password, $dbname);
// Verifie si connection a marche
if ($conn->connect_error) {
    die("Connection echouee: " . $conn->connect_error);
}

if(array_key_exists("filtre", $_COOKIE)){

    if($_COOKIE["filtre"] == "tous"){
        $sql = "SELECT * FROM produits";
    }elseif($_COOKIE["filtre"] == "categorie"){
        $sql = "SELECT * FROM produits WHERE categorie = '" . $_COOKIE["categorie_value"] . "'";
    }
}else{
    $sql = "SELECT * FROM produits";
}

//Execution de la requete et recuperation des donnees(depuis la base de donnees
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Ferme Veggies</title>

    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="style3"></div><div class="style_2"><span class="style3"><a href="http://www.zonnebank-studio-vergelijk.nl" title="Zonnebank Zonnestudio"><strong>Zonnebank zonnestudio</strong></a></span></div>
<div id="wrap">
    <div id="topbar">
        <h1 id="sitename"><a href="#" target="_blank">  Ferme Veggies</a></h1>
        <div id="menus">
            <ul id="topmenu">
                <li><a href="index.php">Home</a>
                </li>
                <li class="active"><a href="produits.php">Produit</a>
                </li><?php
                if(array_key_exists('connected', $_SESSION)){ ?>
                    <li><a href="admin.php">Admin</a>
                    </li>
                <?php  }
                ?>
                <li><a href="login.php">Login</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="header">
    </div>
    <div id="content">
        <h2>Liste des produits</h2>
        <br />	<br />
        <div id="filtrage">
            <form action="filtrage_produits.php" method="post">
                <input type="submit" name="filtre_tous" value="Afficher tous les produits" />
            </form>
            <form action="filtrage_produits.php" method="post">
                <select name="categorie">
                    <option value="fruit">Fruit</option>
                    <option value="legume">Legume</option>
                    <option value="animal">Animal</option>
                </select>
                <input type="submit" name="filtre_cat" value="Filtrer par categorie" />
            </form>
           <!-- <form action="filtrage.php" method="post">
                <select name="comparateur">
                    <option value="superieur">Superieur</option>
                    <option value="inferieur">Inferieur</option>
                    <option value="egal">Egal</option>
                </select>
                <input type="number" name="comp_value" value=""/>
                <input type="submit" name="filtre_quant" value="Filtrer par quantite" />
            </form> -->
        </div><br />
        <br />
        <table>
            <tr>
                <td>Nom du produit : </td>
                <td>Categorie : </td>
                <td>Quantite : </td>
                <td>Prix Unitaire : </td>
                <td>Image : </td>
            </tr>
            <tr></tr>
            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['nom'] . "</td><td>" . $row['categorie'] . "</td><td>" . $row['quantite'] . "</td><td>" . $row['prix_unitaire'] . "</td><td><img src='images/" . $row['image'] . "'/></td></tr>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();


            ?>
        </table>

        <div class="clear"></div>
    </div>

</div>
<div id="footer">
    <p>Copyright &copy; 2013 your sitename| <a href="#">Sitemap</a></p>
</div>
</body>
</html>
