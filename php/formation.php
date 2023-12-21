<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGE YAML/formation.yaml');
//print_array($data);

echo '<a href="image/'.$data["cv"].'">CV</a>';

?>