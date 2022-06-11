<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	  <!-- #navigation -->	
	
	  <div class="topnav">
                                 <a href="accueil.php">Accueil</a>
                                 <a class="active"href="index.php">Connexion</a>
                                 <a href="contact.php">Contact</a>
                              
                           </div>
			<!-- #navigation -->
			<div style="position: relative; width: 600px; height: 10px;"> </div>
<form action="login.php" method="post">
     	<h2>CONNEXION</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Nom d'utilisateur</label>
     	<input type="text" name="uname" ><br>

     	<label>Mot de passe</label>
     	<input type="password" name="password"><br>

     	<button type="submit">Connexion</button>
     </form>
	 <div style="position: relative; width: 600px; height: 60px;"> </div>
	 <!-- footer -->
	   
	 <div style="position: relative; width: 600px; height: 50px;"> 
				<div style="position: absolute; bottom: 5px; text-center starting-text">
				<h4>© 2022 Technext. Designed and Developed by Cabrel & Lesly company</h4>
                </div>
            </div>
		
		<!-- footer -->
</body>
</html>
