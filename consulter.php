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
                                 <a class="active" href="declaration.php">Déclarations</a>
                                 <a href="declaration.php">Retour</a>
                           </div>
			<!-- #navigation -->

<!-- Tableau -->


<img src="CONSTAT.png" alt="Constat Amiable" width="800" height="950">





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