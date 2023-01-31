<?php
    include __DIR__. './function.php';

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $charactersAll = '!#$%&\'()*+,-./0123456789:;=>?@ABCDEFGHIJKLMNOPQRSTUVWXYZ[\\]^_`abcdefghijklmnopqrstuvwxyz{|}~';
    $count = strlen($charactersAll);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <header class="py-5 bg-dark">
        <div style="width: 1000px; margin: 0 auto">
            <div class="container">
                <div class="row mb-5">
                    <div class="col">
                        <div class="mycard text-center">
                            <h1 class="text-secondary">Strong Password Generator</h1>
                            <h2 class="text-white">Genera una password sicura</h2>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="mycard text-center">
                            <input type="text" class="form-control px-5 py-3" value="<?php echo isset($_GET['error']) ? $_GET['error'] : 'Inserisci un valore valido' ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card px-5 py-3 text-center">
                            <form action="./ciuppo.php">
                                <div class="d-flex align-items-center justify-content-between mb-5">
                                    <label class="form-label fw-semibold text-nowrap mb-0" for="">Lunghezza password: (max <?php echo $count ?> characters)</label>
                                    <input style="width: 200px;" type="number" name="numberCharacters" class="border-2 form-control">
                                </div>
                                <div class="d-flex justify-content-between mb-5">
                                    <div class="fw-semibold text-nowrap">Consenti ripetizioni di uno o più caratteri:</div>
                                    <div style="width: 200px;">
                                        <div class="text-start form-check mb-2">
                                            <input class="form-check-input" type="radio" name="isRepeating" value="repeat" checked>
                                            <label class="form-check-label" for="isRepeating">
                                                Si
                                            </label>
                                        </div>
                                        <div class="text-start form-check">
                                            <input class="form-check-input" type="radio" name="isRepeating" value="noRepeat">
                                            <label class="form-check-label" for="isRepeating">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Invia</button>
                                <button type="reset" class="btn btn-secondary">Reset</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>