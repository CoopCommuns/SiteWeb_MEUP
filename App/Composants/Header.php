<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<?php include 'lien.php';?>

</head>
<body>
    <nav class="cc-navbar navbar navbar-expand-lg  navbar-dark bg-dark fixed-top">
        <div class="container">
            <!-- Ajout  d'un bouton pour le menu mobile -->
            <button class="navbar-toggler navbar-toggler-" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i></button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 drop">
                    <li class="nav-item">
                     <a href="index.php"  class="nav-link active nav-i"> <i class="fa-solid fa-house " style="color: black; font-size: 24px;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="évènement.php">Évènements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#activités">Activités</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Projets
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end  justify-content-center" aria-labelledby="navbarDropdown" id="dropdownMenu" style=" width: 330px; left: 25px; right: 0; border:outset;">
                            <li><a class="dropdown-item" href="Projets.php#Restaurant Café">Le Restaurant Café coopératif de La MEUP</a></li>
                            <li><a class="dropdown-item" href="Projets.php#Compositeur Collectif">Le Composteur collectif et son Jardin créatif <br> & productif</a></li>
                            <li><a class="dropdown-item" href="Projets.php#La Bricothèque & La Grainothèque">La Bricothèque & la Grainothèque</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    
</body>
</html>
