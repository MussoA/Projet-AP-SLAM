<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('page yaml/experience.yaml');
//print_array($data);

echo "<p>".$data["experiences"]."</p>";

?>