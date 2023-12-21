<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>src="JVS/acceuil.java"</script>
</head>
<body>
    <header>
        <h1>Site web de Alexandre Musso</h1>
        <div class="logo-container">
        <img src="image/logo.png" alt="Logo" class="logo">
    </header>
    <nav>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#a propos">A propos</a></li>
            <li><a href="#Compétences">Compétences</a></li>
            <li><a href="#Expérience">Experience</a></li>
            <li><a href="#Formation">Formation</a></li>
            <li><a href="#contact">Contact</a></li>
    </nav>
    <section id="accueil">
        <h2>Accueil</h2>
        <?php include("php/acceuil.php"); ?>
    </section>

    <section id="a propos">
        <h2>À propos</h2>
        <?php include("php/a propos.php"); ?>
    </section>

    <section id="Compétences">
        <h2>Compétences</h2>
        <?php include("php/competences.php"); ?>
    </section>

    <section id="Expérience">
        <h2>experiences</h2>
       <?php include("php/experience.php"); ?>
    </section>

    <section id="Formation">
        <h2>formation</h2>
       <?php include("php/formation.php"); ?>
    </section>

    <section id="contact">
        <h2>contact</h2>
        <?php include("php/contact.php"); ?>
    </section>
    <footer>
        <p></p>
    </footer>

</body>
</html>