<?php
$password = "123456";

// calculate the time of the algorithm
$time_pre = microtime(true);
for ($i = 0; $i < 10; $i++) {
    $hash = password_hash($password, PASSWORD_DEFAULT);
}
$time_post = microtime(true);
$exec_time = $time_post - $time_pre;
echo "Execution time: $exec_time seconds";