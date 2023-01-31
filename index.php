<?php
    include __DIR__. './function.php';
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
                            <input type="text" class="form-control px-5 py-3" placeholder="Non hai inserito nessun valore" value="<?php echo randomPassword($_GET['numberCharacters']) ?>">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card px-5 py-3 text-center">
                            <form class="d-flex align-items-center justify-content-between">
                                <label class="form-label fw-semibold text-nowrap mb-0" for="">Lunghezza password:</label>
                                <input style="width: 200px;" type="number" name="numberCharacters" class="border-2 form-control">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>