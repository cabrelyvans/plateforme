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
                                 <a class="active" href="statistique.php">Statistiques</a>
                                 <a href="logout.php">Déconnexion</a>
                           </div>
			<!-- #navigation -->
               <div style="position: relative; width: 600px; height: 50px;"> </div>
     <h1>Graphe statistique des réceptions de : <?php echo $_SESSION['name']; ?></h1>
     <!DOCTYPE html>
<html>
<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>
<body>

<div id="myPlot" style="width:100%;max-width:700px"></div>

<script>
var xArray = ["Janvier", "Février", "Mars", "Avril", "Mai","Juin"];
var yArray = [23, 30, 44, 24, 15, 25];
var barColor = ["green"];

var data = [{
  x:xArray,
  y:yArray,
  type:"bar"
}];

var layout = {title:"Déclaration sinistres automobile"};

Plotly.newPlot("myPlot", data, layout);
</script>

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