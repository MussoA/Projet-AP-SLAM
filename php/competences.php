<article>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('page yaml/competences.yaml');

echo "<p>".$data["Reseau"]."</p>";
echo "<p>".$data["developpement"]."</p>";
echo "<p>".$data["cybercerurité"]."</p>";
echo "<p>".$data["anglais"]."</p>";
echo "<p>".$data["francais"]."</p>";
echo "<p>".$data["math"]."</p>";

echo "<p>".$data["html"]."</p>";
echo "<p>".$data["css"]."</p>";
echo "<p>".$data["php"]."</p>";
echo "<p>".$data["sql"]."</p>";

echo '<a href="image/'.$data["certif"].'">Certification et score</a>';


?>
</article>