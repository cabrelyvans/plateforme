<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>


<!DOCTYPE html>
<html>
<head>
	<title><?php echo $_SESSION['name']; ?></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
       <!-- #navigation -->	
       <div class="topnav">
                                 <a class="active" href="home.php"><?php echo $_SESSION['name']; ?></a>
                                 <a href="declaration.php">Déclarations</a>
                                 <a href="statistique.php">Statistiques</a>
                                 <a href="logout.php">Déconnexion</a>
                           </div>
			<!-- #navigation -->
               <div style="position: relative; width: 600px; height: 50px;"> </div>
     <h1>Bienvenue dans la section: <?php echo $_SESSION['name']; ?></h1>

     <div style="position: relative; width: 600px; height: 50px;"></div>
     <h3 class="rene">Vous aller pouvoir consulter:</h3>
     <div>
          <ul>
          <h4><li>Les déclarations de sinistre reçues de vos assurés</li></h4>
          <h4><li>les constats amiables numériques détaillés</li></h4>
          <h4><li>Les statistiques de reception de votre section</li></h4>
         </ul>
	</div>

     </section>
		<!-- footer -->
	   
			<div style="position: relative; width: 600px; height: 150px;"> 
				<div style="position: absolute; bottom: 5px; text-center starting-text">
               	<h4>© 2022 Technext. Designed and Developed by Cabrel & Lesly company</h4>
                </div>
            </div>
		
		<!-- footer -->
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>