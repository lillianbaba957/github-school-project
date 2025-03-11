<?php
function getRandomNumber($min = 1, $max = 100) {
    $randomNumber = mt_rand($min, $max);
    return $randomNumber;
}
?>