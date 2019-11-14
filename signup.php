<html>
    <head>
        <title>Inscription</title>
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

        <div id="container2">
            
            <!-- zone d'inscription -->
            
            <form action="php/inscription.php" method="POST" class="form2">

                <img src="image/user.png" alt="user logo" class="user">
                <label><b>Prenom</b></label>
                <input type="text" placeholder="Entrer votre prenom" name="prenom" required><p><p>

                <label><b>Nom</b></label>
                <input type="text" placeholder="Entrer votre nom" name="nom" required><p><p>


                <label><b>E-mail</b></label>
                <input type="email" placeholder="Entrer votre adresse e-mail" name="email" required><p><p>


                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><p><p>



                <input type="submit" id='submit' value="S'INSCRIRE" name ="bouton" class="bouton">
            </form>
        </div>
    </body>
</html>