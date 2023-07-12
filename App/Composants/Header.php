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
            <!-- Ajoutez un bouton pour le menu mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php#activités">Évènements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#activités">Activités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">Historique</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contact">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Nos Projets
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" id="dropdownMenu">
                            <li><a class="dropdown-item" href="Projets.php#Restaurant Café">Le Restaurant Café coopératif de La MEUP</a></li>
                            <li><a class="dropdown-item" href="Projets.php#Compositeur Collectif">Le Composteur Collectif Et Son Jardin Créatif & Productif</a></li>
                            <li><a class="dropdown-item" href="Projets.php#La Bricothèque & La Grainothèque">La bricothèque & La grainothèque</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>
