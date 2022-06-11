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
                                 <a href="statistique.php">Statistiques</a>
                                 <a href="logout.php">Déconnexion</a>
                           </div>
			<!-- #navigation -->
               <div style="position: relative; width: 600px; height: 10px;"> </div>
     <h1>Liste complète des  déclarations reçues par : <?php echo $_SESSION['name']; ?></h1>

<!-- Tableau -->
<!DOCTYPE html>
<html>

<body>


<?php
include "db_conn.php";
 $nom = $_SESSION['name']; 
 $result = mysqli_query($conn,"SELECT * FROM declaration");

echo "<table border='3'>
<tr>
<th>N° Ordre</th>
<th>N° Contrat</th>
<th>Nom</th>
<th>Prénom</th>
<th>Constat</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['num'] . "</td>";
echo "<td>" . $row['nom'] . "</td>";
echo "<td>" . $row['prenom'] . "</td>";
echo "<td><a href='consulter.php'>Consulter</a></td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

<!-- Tableau -->


</body>
</html>



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