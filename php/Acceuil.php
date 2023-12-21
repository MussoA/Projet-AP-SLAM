<?php

require_once("yaml/yaml.php");
$data = yaml_parse_file('page yaml/acceuil.yaml');
//print_array($data);

echo "<p>".$data["prenom"]." ".$data["nom"]."</p>";
echo "<p>".$data["accroche"]."</p>";
echo '<img height="300" width="400" src="image/'.$data["photo"].'">';
?>