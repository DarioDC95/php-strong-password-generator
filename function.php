<?php
    function randomPassword($num, $rep) {
        if(isset($_GET['numberCharacters']) && $_GET['numberCharacters'] <= 92) {
            $characters = '!#$%&\'()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
            $pass = [];
            $alphaLength = strlen($characters) - 1;
            while (sizeof($pass) < $num) {
                $n = rand(0, $alphaLength);
                if($rep == 'repeat') {
                    array_push($pass, $characters[$n]);
                }
                elseif($rep == 'noRepeat') {
                    if(!in_array($characters[$n], $pass)) {
                        array_push($pass, $characters[$n]);
                    }
                }
            }
            return implode($pass);
        }
    }
?>