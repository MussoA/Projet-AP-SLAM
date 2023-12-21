<article>
<form id="genre" method="post">
      <p>
        <input type="radio" name="civi" value="Mme" required /> Madame
        <input type="radio" name="civi" value="M" required /> Monsieur
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


    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <form action="?" method="POST">
      <div class="g-recaptcha" data-sitekey="6LfaRzUpAAAAAHv-TnFnzqahQ20cmn-XzNjMx9nt"></div>
      <br/>
    </form>

<?php

//echo $_POST["g-recaptcha-response"];


function isValid($code, $ip = null)
{
    if (empty($code)) {
        return false; // Si aucun code n'est entré, on ne cherche pas plus loin
    }
    $params = [
        'secret'    => "6LfaRzUpAAAAABwbqhjnpSqHwUoRmWibMfzf2kV8",
        'response'  => $code
    ];
    if( $ip ){
        $params['remoteip'] = $ip;
    }
    $url = "https://www.google.com/recaptcha/api/siteverify?" . http_build_query($params);
    if (function_exists('curl_version')) {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_HEADER, false);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // Evite les problèmes, si le ser
        $response = curl_exec($curl);
    } else {
        // Si curl n'est pas dispo, un bon vieux file_get_contents
        $response = file_get_contents($url);
    }

    if (empty($response) || is_null($response)) {
        return false;
    }

    $json = json_decode($response);
    return $json->success;
}

if(isValid($_POST["g-recaptcha-response"])==true){
    echo "Captcha valide";
}
?>
</article>









