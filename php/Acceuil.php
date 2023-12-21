<article>
<?php

require_once("yaml/yaml.php");
$data = yaml_parse_file('page yaml/acceuil.yaml');


echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo '<img height="300" width="400" src="image/'.$data["photo"].'">';
?>
</article>