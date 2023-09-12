<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>

<body>

    <div id="container">
        <div class="fit-content">
            <form action="verification.php" method="POST">
                <h2>Création du compte</h2>

                
                <div class="input">
                    <p>
                        <input type="mail" class="champs" placeholder="E-mail" name="email" required>
                    </p>
                </div>

                
                <div class="input">
                    <p>
                        <input type="text" class="champs" placeholder="Nom d'utilisateur" name="username" required>
                    </p>
                </div>

                
                <div class="input">
                    <p>
                        <input type="password" class="champs" placeholder="Mot de passe" name="password" required>
                    </p>
                </div>
        </div>
        <div id="button">
            <input type="submit" id='submit2' value='Valider'>
        </div>        
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>

            </form>
        
    </div>
</body>

</html>