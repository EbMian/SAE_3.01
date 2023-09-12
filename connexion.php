<html>

<head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
</head>

<body>

    <div id="container">
        <div class="fit-content">
            <form action="verification.php" method="POST">
                <h2>Connexion</h2>

                
                <div class="input">
                    <p>
                        <input type="mail" class="champs" placeholder="E-mail" name="email" required>
                    </p>
                </div>
                
                <div class="input">
                    <p>
                        <input type="password" class="champs" placeholder="Mot de passe" name="password" required>
                    </p>
                </div>
        </div>
        <div id="button">
        <table cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td><input type="submit" id='submit' value='Valider'></td>
                
                <?php
                if (isset($_GET['erreur'])) {
                    $err = $_GET['erreur'];
                    if ($err == 1 || $err == 2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>   

            </form>
                
                <td><a href="creationDeCompte.php">
                    <button id="button2">S'inscire</button></td>
                
            </tr>
        </table>
        </div>
        
    </div>
</body>

</html>