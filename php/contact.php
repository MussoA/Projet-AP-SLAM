<form id="genre" method="post">
      <p>
        <input type="radio" name="civi" value="Mme" required /> Madame
        <input type="radio" name="civi" value="Mlle" required /> Monsieur
      </p>
      <br>
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom" required><br><br>
    
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>
    
    <label for="objet">Objet du message:</label>
    <input type="text" id="objet" name="objet" required><br><br>
    
    <label for="message">Message:</label><br>
    <textarea id="message" name="message" rows="5" cols="40" required></textarea><br><br>
    
    <input type="submit" value="Envoyer">

    <?php
    require_once 'autoload.php';
    if(isset($_POST['ok'])){
        $recaptcha = new \ReCaptcha\ReCaptcha("6LfaRzUpAAAAABwbqhjnpSqHwUoRmWibMfzf2kV8");

            $gRecaptchaResponse = $_POST['g-Recaptcha-Response'];

        $resp = $recaptcha->setExpectedHostname('localhost')
                          ->verify($gRecaptchaResponse, $remoteIp);
        if ($resp->isSuccess()) {
            echo "Success !";
        } else {
            $errors = $resp->getErrorCodes();
            var_dump($errors);
        }
    }
    ?>




    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfaRzUpAAAAAHv-TnFnzqahQ20cmn-XzNjMx9nt"></div>
      <br/>
    </form>

