<?php

?>


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

    <!-- Lien CSS et JS -->

    <link rel="stylesheet" href="../CSS/1Accueil.css">
    

</head>

<body>
    
    <?php
        require("header.php"); 
    ?>

    <!-- Début du Main -->
    
    <main>
        
        <!-- Diapo -->

        <section>

           <div class="diapo">
                
                <div class="slider_nav">

                    <button onclick="previous()" class="slider_nav_button slider_nav_button_prev">
                        <img class="button_prev" src="../Images/Previous.png" alt="Previous">
                    </button>

                    <button onclick="next()" class="slider_nav_button slider_nav_button_next">
                        <img class="button_next" src="../Images/Next.png" alt="Next">
                    </button>

                </div>
                
                <div class="slider_content">

                    <div class="slider_content_items">
                        <img class="actu" src="../Images/Actu1-Ban.png" alt="Actu1">
                    </div>
                    <div class="slider_content_items">
                        <img class="actu" src="../Images/Actu2-Ban.png" alt="Actu2">
                    </div>
                    <div class="slider_content_items">
                        <img class="actu" src="../Images/Actu3-Ban.png" alt="Actu3">
                    </div>

                </div>

            </div>
            
        </section>

        <!-- Fin du Diapo -->

        <!-- Début Section 24H Du Mans Moto -->

        <section>

            

        </section>

        <!-- Fin Section 24H Du Mans Moto -->

        <!-- Début Section À Propos -->

        <section> 

            <div class="apropos">

                <h1 class="titreapropos">
                    À propos du site !
                </h1>
                
                <p class="textapropos">
                    Le site Hogwarts Swapmania a été créé afin de permettre aux fans de la saga Harry Potter et pouvoir collectionner ainsi que d'échanger des cartes des personnages d'Harry Potter avec ses amis. Vous pouvez également consulter les nombreuses informations sur les pernonnages principaux en vous penchant sur l'onglet Cartes où toutes les cartes disponibles sont affichées
                </p>

            </div>

        </section>
           
        <!-- Fin Section À Propos -->

    </main>

    <!-- Fin du Main -->

    <?php
    require_once("footer.php");
    ?>

    <script src="../JS/1Accueil.js"></script>

</body>


</html>

