<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
		  <li  class="active"><a href="index.php">Home</a>
		  </li>
		  <li><a href="produits.php">Produit</a>
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
<div id="mainpage">
<h2>Welcome to Our Website!</h2>
<p>Zonnebank en zonnestudios is a  "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum, Small   Businesses Website</a>. After designing your site, we also submit  it major search engines and take due care to list them in relevant directories  and press releases. <br />
			  <br />
"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum,Domain name registration, Flash Animation,  Contact page with web form, Logo design, Web hosting services, Zonnebank en zonnestudios,  Traffic analysis and reporting, Navigation system creation etc. All these  services are available to you through , just login and  find out the miracles we have for you.</p>
</div>
<div id="sidebar">

</div>
<div id="sidebarcontents"> 
<ul id="menu">
<li>
  <h2>Our Services</h2>
</li>
<li>
	<ul><li><a href="#">Link a   Website</a></li>
				  			<li><a href="#">Website Link B</a></li>
				 
							<li><a href="#">Website Link C</a></li>
							<li> <a href="#">Small Businesses Website</a></li>
							<li><a href="#">Flyer Website</a></li>
			</ul>
</li>
</ul>
</div>

  <div id="sidebarbottom"></div>
</div>
<div class="clear"></div>
</div>

</div>
<div id="footer">
<p>Copyright &copy; 2013 your sitename| <a href="#">Sitemap</a></p>
</div>
</body>
</html>
