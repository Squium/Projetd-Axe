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

    <!-- Lien CSS -->

    <link rel="stylesheet" href="../CSS/2Cartes.css">
    

</head>

<body>
    
    <?php
        require_once("header.php"); 
    ?>

    <!-- Début du Main -->

    <main>
        <section class="container">

            <h1>
                <span>Toutes les cartes</span>
                <span>disponibles : </span>
            </h1>
            <div class="card-container">

                <div class="card-wrapper" id="characters">
                
                </div>

            </div>

        </section>
    </main>

    <!-- Fin du Main -->

    <?php
        require_once("footer.php"); 
    ?>

    <script src="../JS/2Cartes.js"></script>
</body>

</html>