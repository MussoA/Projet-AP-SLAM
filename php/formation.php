<article>
<?php

require_once("yaml/yaml.php");
$data = yaml_parse_file('page yaml/formation.yaml');
//print_array($data);
echo "<p>".$data["formation"]."</p>";
echo '<a href="image/'.$data["cv"].'">CV</a>';

?>
</article>