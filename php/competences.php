<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGE YAML/competences.yaml');
//print_array($data);

echo "<p>".$data["domaines"]."</p>";
echo "<p>".$data["items"]."</p>";
echo "<p>".$data["Reseau"]."</p>";
echo "<p>".$data["developpement"]."</p>";
echo "<p>".$data["cybercerurité"]."</p>";
echo "<p>".$data["anglais"]."</p>";
echo "<p>".$data["francais"]."</p>";
echo "<p>".$data["score"]."</p>";
echo '<a href="image/'.$data["certif"].'">Certification et score</a>';

?>