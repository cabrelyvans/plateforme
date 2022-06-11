<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
 input[type=submit] {
	background-color: #555;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
  }

  input[type=submit]:hover {
	background-color: #04AA6D;
  }

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 15px;
}
</style>
</head>
</head>
<body>
	  <!-- #navigation -->	
	
	  <div class="topnav">
                                 <a href="accueil.php">Accueil</a>
                                 <a href="index.php">Connexion</a>
                                 <a class="active"href="contact.php">Contact</a>
                              
                           </div>
			<!-- #navigation -->
            <body>
                <div class="container">
                    <form action="/action_page.php">
    <label for="fname">Nom et prémom</label>
    <input type="text" id="fname" name="firstname" placeholder="...">

    <label for="lname">Email</label>
    <input type="text" id="lname" name="lastname" placeholder="...">

    <label for="subject">Sujet</label>
    <textarea id="subject" name="subject" placeholder="Ecrivez quelque chose.." style="height:100px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>


	
  

</body>
 <!-- footer -->
	   
 <div style="position: relative; width: 600px; height: 50px;"> 
				<div style="position: absolute; bottom: 5px; text-center starting-text">
				<h4>© 2022 Technext. Designed and Developed by Cabrel & Lesly company</h4>
                </div>
            </div>
		
		<!-- footer -->
</html>


