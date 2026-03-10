<?php
require('../vendor/autoload.php');


# TODO: Récuperer une instance de Config
# Afficher une valeur contenu dans config.php
# Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques

$config = \App\Config::getInstance();
echo 'db => { <br>';
foreach($config->get("db") as $name => $value){
    echo '<p style="margin-left: 4rem; margin-top: 0; margin-bottom: 0;">'. $name . " => " . $value . ',</p>';
}
echo '} <br>';

echo "debut => " . $config->get("debug") . ",<br>";
echo "apiKey => " . $config->get("apiKey") .",";
