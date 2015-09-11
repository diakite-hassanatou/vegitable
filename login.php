<?php
session_start();

if (array_key_exists('connected', $_SESSION)){
		$user_is_logged = true;
		// echo "Vous etes connected";
	}else {
		$user_is_logged = false;
		//echo "Veuillez vous logger";
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ferme Veggies</title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="style3"></div>
<div id="wrap">
<div id="topbar">
  <h1 id="sitename"><a href="#" target="_blank">  Ferme Veggies</a></h1>
  <div id="menus">
	  <ul id="topmenu">
		  <li><a href="index.php">Home</a>
		  </li>
		  <li><a href="produits.php">Produit</a>
		  </li><?php
		  if(array_key_exists('connected', $_SESSION)){ ?>
			  <li><a href="admin.php">Admin</a>
			  </li>
		  <?php  }
		  ?>
		  <li  class="active"><a href="login.php">Login</a>
		  </li>
	  </ul>
</div>
</div>

	<div id="header">
	</div>
<div id="content">
<div id="mainpage">
<h2>Welcome to Our Website!</h2>
<div><?php if ($user_is_logged){ ?>
	<form action="deconnecter.php" method="post">

		<input type="submit" name="deconnecter" id="se_deconnecter" value="Se déconnecter" />
	</form>
	<?php }else{
		if(array_key_exists("logged", $_GET)){
			echo "<br /> <h5>Veuillez vous connecter pour pouvoir acceder a la page admin</h5>";
		}
			?>
	<form action="authentification.php" method="post">
		Nom d'utilisateur:
		<input type="text" name="username" id="username" value=""/><br>
		Password :
		<input type="password" name="password" id="password" value=""/><br>
		<input type="submit" name="connect" id="se_connecter" value="Connexion"/>
	</form>
	<?php } ?>

</div>
<div class="clear"></div>
</div>

</div>
<div id="footer">
<p>Copyright &copy; 2013 your sitename| <a href="#">Sitemap</a></p>
</div>
</body>
</html>
