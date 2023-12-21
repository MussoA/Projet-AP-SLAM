<article>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('PAGE YAML/a propos.yaml');
//print_array($data);

echo "<p>".$data["une accroche"]." </p>";
echo "<p>".$data["un paragraphe"]."</p>";
echo '<img height="300" width="300" src="image/'.$data["photo"].'">';
?>
</article>