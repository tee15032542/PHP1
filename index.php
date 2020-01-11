<?php

$site = "MarcusCode";
$year = 2016;
$pi = 3.14;

echo var_dump($site);
echo var_dump($year);
echo var_dump($pi);

echo isset($site), "\n";
unset($site);
echo isset($site), "\n";

?>
