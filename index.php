<?php
$motdepasse = "123456";

// calcul du temps de l'algorithme
$time_pre = microtime(true);
for ($i = 0; $i < 1000000; $i++) {
    $hash = hash('sha256', $motdepasse);
}
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Temps d'exécution : $exec_time secondes";

