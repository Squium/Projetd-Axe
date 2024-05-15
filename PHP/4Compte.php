<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Site -->
    
    <title>Hogwarts Swapmania</title>
    <link rel="shortcut icon" href="../Images/LogoHPBoost.png" type="image/x-icon">

    <!-- Polices -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
    <link href="https : //fonts.googleapis.com/css2?family= PT +Sans & display=swap" rel="stylesheet">

    <!-- Lien CSS -->

    <link rel="stylesheet" href="../CSS/4Compte.css">
    

</head>

<body>

    <?php
        require_once("header.php"); 
    ?>

    <!-- Début du Main -->

    <main>
        
        <section class="contact">

            <div class="rectangle arrondis bloccontact">
                <div class="rectangletxt">
                    
                    <h1 class="margeGtexte h1contact marge1">
          
                        &#9993; Connectez vous ! &#9993; 
          
                    </h1>
                  
                    <!-- Formulaire de Contact -->

                    <form action="#" method="dialog" class="formcontact" id="form">

                        <!-- Première Division flexbox -->


                        <div class="nomdiv">

                            <!-- Division Email -->
                            <div class="div1">
                                <input type="email" name="email" placeholder="Email" required class="formmail" id="email">
                                <!-- Label et Input pour l'email -->
                                

                            </div>

                            <!-- Division Password -->
                            <div class="div1">
                                <input type="password" name="password" placeholder="Mot de Passe" required class="formpdw" id="password">
                                <!-- Label et Input pour le téléphone -->


                                <!-- Error du password -->
                                <h5 id="error4"></h5>

                            </div>
                        </div>

                        <!-- Division Bouton Envoyer -->
                        <div class="submitbtndiv">
                            <div class="divcenter">
                                <button type="submit" class="submitbtn">
                                    Connexion
                                </button>
                            </div>

                            
                        </div>
                        
                        <!-- Message Envoyé -->

                        <h3 id="envoi"></h3>

                    </form>
                
                    <!-- Padding down pour agrendir le rectangle -->
                    <div class="paddingdow"></div>

                </div>
                
            </div>

        </section>

    </main>

    <!-- Fin du Main -->

    <?php
        require_once("footer.php"); 
    ?>

    <script src="../JS/4Compte.js"></script>
</body>


</html>