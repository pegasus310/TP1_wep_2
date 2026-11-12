<?php
$date=new DateTime();

$titre = "Ma premiere page PHP";
$prenom = "Mohammed";
$nom = "MAZOUZI";
$formation = "Informatique Appliquee";
$annee = date('Y');
$date_heure = date('d/m/Y H:i');
$presentation = "Etudiant en informatique a la Faculte des Sciences d'Oujda, 
passionne par le developpement web, les nouvelles technologies et l'Intelligence Artificielle. 
J'aime apprendre, relever de nouveaux defis et construire des projets qui ont un impact positif.";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Site - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <div class="navbar">
            <div class="logo">Mon Site</div>
            <ul class="nav-links">
                <li><a href="#" class="active">Accueil</a></li>
                <li><a href="#">A propos</a></li>
                <li><a href="#">Projets</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </header>

    <main class="container">

        <div class="hero-title">
            <h1><?php echo $titre; ?></h1>
            <p>Bienvenue sur mon site personnel !</p>
        </div>

        <div class="profile-card">
            <div class="photo">
                <img src="ima.png" alt="Photo de profil">
            </div>

            <div class="info-list">
                <div class="info-item"><span class="label">Prenom :</span><span><?php echo $prenom; ?></span></div>
                <div class="info-item"><span class="label">Nom :</span><span><?php echo $nom; ?></span></div>
                <div class="info-item"><span class="label">Formation :</span><span><?php echo $formation; ?></span></div>
                <div class="info-item"><span class="label">Annee :</span><span><?php echo $annee; ?></span></div>
                <div class="info-item"><span class="label">Date et heure :</span><span><?php echo $date_heure; ?></span></div>
            </div>
        </div>

        <div class="about-card">
            <h3>A propos de moi</h3>
            <p><?php echo $presentation; ?></p>
        </div>

    </main>

    <footer>
        <p> © <?php echo $annee; ?> - Mon Site | Cree avec PHP</p>
    </footer>

</body>
</html>