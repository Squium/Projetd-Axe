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

    <link rel="stylesheet" href="../CSS/6User.css">
    

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
          
                        Mon Compte :
          
                    </h1>
                  
                    <!-- Compte -->

                    <div id="infos">
                        
                    </div>

                    <div id="signoutbtndiv">
                        <button id="sign-out">Sign Out</button>
                    </div>
                    
                    <!-- Padding down pour agrendir le rectangle -->
                    <div class="paddingdown"></div>

                </div>
                
            </div>

        </section>

    </main>

    <!-- Fin du Main -->

    <?php
        require_once("footer.php"); 
    ?>

    <script src="../JS/6User.js"></script>
</body>


</html>