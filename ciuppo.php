<?php
    session_start();
    include __DIR__. './function.php';

    $_SESSION['numberCharacters'] = $_GET['numberCharacters'];
    $_SESSION['isRepeating'] = $_GET['isRepeating'];
    dictionary();
    $count = strlen($_SESSION['dictionaries']);

    if(empty($_SESSION['numberCharacters']) || $_SESSION['numberCharacters'] > strlen($_SESSION['dictionaries'])) {
        header("Location: ./index.php?error=EVITIAMO DI FARE GLI SGARGIULLI E DIAMO UN PARAMETRO VALIDO&info=$count");
    }
    else {
        $string = randomPassword($_SESSION['numberCharacters'], $_SESSION['isRepeating'], $_SESSION['dictionaries']);
        $_SESSION['string'] = $string;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <h1>La tua Password Super Sicura:</h1>
                        <h3 class="mb-0 border-2 rounded-3 p-3 bg-primary text-white"><?php echo $_SESSION['string'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>