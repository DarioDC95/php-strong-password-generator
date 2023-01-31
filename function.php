<?php
function randomPassword($num) {
    if(isset($_GET['numberCharacters'])) {
        $characters = ' !#$%&\'()*+,-./0123456789:;<=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $pass = [];
        $alphaLength = strlen($characters) - 1;
        for ($i = 0; $i < $num; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $characters[$n];
        }
        return implode($pass);
    }
}