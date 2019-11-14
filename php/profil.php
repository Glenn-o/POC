<?php 
session_start();

$bd = new PDO('mysql:host=127.0.0.1;dbname=espace_membres', 'root', ''); //connexion base de données 

if (isset($_GET['id']) && $_GET['id'] > 0)
{

	$requser = $bd -> prepare("SELECT * FROM membres WHERE id = ?");
	$requser -> execute(array($_GET['id']));
	$userinfo = $requser -> fetch();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>profil</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/POC/css/style.css">
	</head>
	<body>
			 <!-- menu d'identification -->
			<div class="nav">
				<a href=""><img src="/POC/image/logo.png" class="logo" alt="logo"></a>

				<div class="userlogo"><img src="/POC/image/userlogo.png" alt="userlogo" width="4%" align="right"></div>
			</div>

			<div class="option">
			<nav>
				<ul>
					<li>PRENOM NOM</li>
					<li><a href="/POC/index.php">Se déconnecter</a></li> 
				</ul>
			</nav>
			</div>
		<script type="text/javascript" src="js/app.js"></script>
		</header>
	</body>
	</body>
</html>
<?php 
}
?>