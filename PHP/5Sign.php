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

    <link rel="stylesheet" href="../CSS/5Sign.css">
    

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
          
                        &#9993; Inscrivez vous ! &#9993; 
          
                    </h1>
                  
                    <!-- Formulaire de Contact -->

                    <form action="#" method="dialog" class="formcontact" id="form">

                        <!-- Première Division flexbox -->

                        <div class="flex nomdiv">

                            <!-- Division Prénom -->
                            <div class="div1">
                                <input type="text" name="surname" placeholder="Prénom" required class="formprenom" id="prenom"> 
                                <!--  Label et Input pour le prénom -->

                                <!-- Error du prénom -->
                                <h5 id="error1"></h5>

                            </div>
                            
                            <!--  Division Nom -->
                            <div class="div1">
                                <input type="text" name="name" placeholder="Nom de famille" required class="formnom" id="nom">
                                <!--  Label et Input pour le nom -->

                                <!-- Error du nom -->
                                <h5 id="error2"></h5>

                            </div>
                        </div>
                        
                        <!-- Deuxième Division flexbox -->

                        <div class="flex nomdiv">

                            <!-- Division Email -->
                            <div class="div1">
                                <input type="email" name="email" placeholder="Email" required class="formmail" id="email">
                                <!-- Label et Input pour l'email -->
                                

                            </div>

                            <!-- Division Téléphone -->
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
                                    S'inscrire
                                </button>
                                <div id="message">
                                    
                                </div>
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

    <script src="../JS/5Sign.js"></script>
</body>


</html>