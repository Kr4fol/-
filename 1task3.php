<?php 
$temperature = 49;

if ($temperature < 0) {
    echo 'Мороз';
} elseif ($temperature > 30) {
    echo 'Жарко';
} elseif ($temperature > 20) {
    echo 'Тепло';
} else {
    echo 'Прохладно';
}
?>
