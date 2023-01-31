<?php
    function dictionary() {
        $charactersAll = '!#$%&\'()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $_SESSION['allCharacters'] = $charactersAll;
        
        // POSSIBLE ULTIRIOR BONUS
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        $numbers = '0123456789';
        $entities = ':;=>?@!#$%&\'()*+,-./[\\]^_`{|}~';
    };

    function randomPassword($num, $rep, $characters) {
        if(isset($_GET['numberCharacters']) && $_GET['numberCharacters'] <= 92) {
            $pass = [];
            $alphaLength = strlen($characters) - 1;
            while (sizeof($pass) < $num) {
                $n = rand(0, $alphaLength);
                if($rep == 'repeat') {
                    array_push($pass, $characters[$n]);
                }
                else {
                    if(!in_array($characters[$n], $pass)) {
                        array_push($pass, $characters[$n]);
                    }
                }
            }
            return implode($pass);
        }
    }
?>