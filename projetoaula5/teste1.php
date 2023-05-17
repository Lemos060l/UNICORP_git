<?php

$num = $_POST["valor"];

if ($num > 10)

echo "$num é maior que 10";

else if($num == 10)

echo "$num é 10";

else

echo "$num é menor que 10";

include 'home.php';

?>

