<html>
    <head>
        <title>Connexion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
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
            
            <form action="php/connexion.php" method="POST">

                <img src="image/user.png" alt="user logo" class="user">
                
                <label><b>E-mail</b></label>
                <input type="email" placeholder="Entrer votre adresse email" name="email" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

                <a href=""><p align="right">Mot de passe oublié ?</p></a>


                <input type="submit" id='submit' value='SE CONNECTER' name="bouton" >
            </form>
        </div>

    </body>
</html>