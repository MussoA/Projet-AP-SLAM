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

    
<article>
<form id="genre" method="post">
    <section id="contact">
        <h2>contact</h2>
        <?php include("php/contact.php"); ?>
    </section>
      <p>
        <input type="radio" name="civi" value="Mme" required /> Madame
        <input type="radio" name="civi" value="M" required /> Monsieur
      </p>
      <br>
    <label for="prenom">prenom:</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>
    
    <label for="email">email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="message">message:</label><br>
    <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>
    
    <input type="submit" value="Envoyer">


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfaRzUpAAAAAHv-TnFnzqahQ20cmn-XzNjMx9nt"></div>
      <br/>
    </form>
</article>
</body>
    <footer>
        <p></p>
    </footer>

</html>