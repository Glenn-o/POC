<?php 
    session_start();

    if(isset($_POST['bouton']))// site le bouton est utilisé
    {
        $email = $_POST['email'];
        $password = sha1($_POST['password']);

        $bd = new PDO('mysql:host=localhost;dbname=espace_membres', 'root', ''); //connexion à la base de données

        $requser = $bd ->prepare("SELECT * FROM membres WHERE email = ? AND password = ? ");
        $requser -> execute(array($email,$password));
        $userexist = $requser -> rowCount();

        if($userexist == 1) //si l'email existe alors voir si le mot de passe correspond
        {
            echo "vous etes connecté";
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            header("Location: profil.php?id=".$_SESSION["id"]);
        }
        else //sinon soit le compte n'existe pas soit les identifiant sont faux 
        {  ?>
                <html>
                    <head>
                        <title>Connexion</title>
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


                        <div id="container">
                            
                            <!-- zone de connexion -->
                            
                            <form action="" method="POST">

                                <img src="/POC/image/user.png" alt="user logo" class="user">
                                
                                <label><b>E-mail</b></label>
                                <input type="email" placeholder="Entrer votre adresse email" name="email" required>

                                <label><b>Mot de passe</b></label>
                                <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

                                <a href=""><p align="right">Mot de passe oublié ?</p></a>

                                <br><p class="erreur"> Mauvais mail ou mot de passe </p>

                                <input type="submit" id="submit" value="SE CONNECTER" name="bouton" >
                            </form>
                        </div>

                    </body> 
                </html><?php  


        }
     
    }
?>