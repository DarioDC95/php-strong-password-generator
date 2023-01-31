<?php
    function dictionary() {
        $charactersAll = '!#$%&\'()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
        $_SESSION['allCharacters'] = $charactersAll;
        
        // POSSIBLE ULTIRIOR BONUS
        $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numbers = '0123456789';
        $entities = ':;=>?@!#$%&\'()*+,-./[\\]^_`{|}~';

        $_SESSION['dictionaries'] = 'abcdefghijklmnopqrstuvwxyz';

        if(isset($_GET['letters'])) {
            $_SESSION['dictionaries'] .= $letters;
        }
        if (isset($_GET['numbers'])) {
            $_SESSION['dictionaries'] .= $numbers;
        }
        if (isset($_GET['simbols'])) {
            $_SESSION['dictionaries'] .= $entities;
        }
    };

    function randomPassword($num, $rep, $characters) {
        if(isset($_GET['numberCharacters']) && $_GET['numberCharacters'] <= strlen($characters)) {
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