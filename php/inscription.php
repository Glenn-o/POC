<?php 
session_start();

$bd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', ''); //connexion base de données 


$prenom= $_POST['prenom'];
$nom= $_POST['nom'];
$email=$_POST['email'];
$password = sha1($_POST['password']);


if (isset($_POST['bouton']))
{	
	

	$reqemail = $bd->prepare("SELECT * FROM membres WHERE email = '$email'");
	$reqemail -> execute(array($email));
	$emailexist = $reqemail -> rowCount();	

	if($emailexist == 0) //si l'email n'existe pas alors créer un compte
	{
	    $insertmbr = $bd->prepare("INSERT INTO membres(prenom,nom,email,password) VALUES('$prenom','$nom','$email','$password')");
	    $insertmbr->execute(array($prenom, $nom, $email, $password)); ?>
	    
					<html>
					    <head>
					        <title>Inscription</title>
					        <meta charset="utf-8">
					        <link rel="stylesheet" type="text/css" href="/POC/css/style.css">
					    </head>
					    <body>

							<header>
					        <div class="toggle_btn"> 
					            <span></span>
					        </div>
					             <!-- menu -->
					            <div class="nav">
					                <nav>
					                    <div class="menu">
					                        <ul class="selection">
					                            <li><a href="/POC/index.php">HOME</a></li>
					                        </ul>
					                    </div>
					                </nav>
					            </div>
					        <script type="text/javascript" src="js/app.js"></script>
					        </header>

					        <div id="container2">
					            
					            <!-- zone d'inscription -->
					            
					            <form action="" method="POST" class="form2">

					                <img src="/POC/image/user.png" alt="user logo" class="user">
					                <label><b>Prenom</b></label>
					                <input type="text" placeholder="Entrer votre prenom" name="prenom" required><p><p>

					                <label><b>Nom</b></label>
					                <input type="text" placeholder="Entrer votre nom" name="nom" required><p><p>


					                <label><b>E-mail</b></label>
					                <input type="email" placeholder="Entrer votre adresse e-mail" name="email" required><p><p>


					                <label><b>Mot de passe</b></label>
					                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><p><p>

					                <p>Votre compte à été créé,  <a href="/POC/login.php">SE CONNECTER</a></p>

					                <input type="submit" id='submit' value="S'INSCRIRE" name ="bouton" class="bouton">
					            </form>
					        </div>
					    </body>
					</html><?php
	    
	}
	else //sinon le compte existe deja 
	{  ?>
		
		<html>
		    <head>
		        <title>Inscription</title>
		        <meta charset="utf-8">
		        <link rel="stylesheet" type="text/css" href="/POC/css/style.css">
		    </head>
		    <body>

				<header>
		        <div class="toggle_btn"> 
		            <span></span>
		        </div>
		             <!-- menu -->
		            <div class="nav">
		                <nav>
		                    <div class="menu">
		                        <ul class="selection">
		                            <li><a href="/POC/index.php">HOME</a></li>
		                        </ul>
		                    </div>
		                </nav>
		            </div>
		        <script type="text/javascript" src="js/app.js"></script>
		        </header>

		        <div id="container2">
		            
		            <!-- zone d'inscription -->
		            
		            <form action="" method="POST" class="form2">

		                <img src="/POC/image/user.png" alt="user logo" class="user">
		                <label><b>Prenom</b></label>
		                <input type="text" placeholder="Entrer votre prenom" name="prenom" required><p><p>

		                <label><b>Nom</b></label>
		                <input type="text" placeholder="Entrer votre nom" name="nom" required><p><p>


		                <label><b>E-mail</b></label>
		                <input type="email" placeholder="Entrer votre adresse e-mail" name="email" required><p><p>


		                <label><b>Mot de passe</b></label>
		                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><p><p>

		               	<br><p class="erreur">L'adresse email rentrée est deja utilisée avec un autre compte</p>

		                <input type="submit" id='submit' value="S'INSCRIRE" name ="bouton" class="bouton">
		            </form>
		        </div>
		    </body>
		</html> <?php
	}    
}
?>