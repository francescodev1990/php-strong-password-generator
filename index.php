<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>php-strong-password-generator</title>
</head>

<body>
    <div>
        <div class="container">
            <h1>php-strong-password-generator</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="./passwordpage.php" method="POST">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Inserisci Password">
                        </div>
                        <div class="btn-submit">
                            <button>Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

</body>

</html>