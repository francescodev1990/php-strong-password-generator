<?php
include __DIR__ . "/funzione.php";
session_start();
$_SESSION['pass'] = $_POST['pass'];
if (empty($_SESSION['pass'])) {
    header("Location:./index.php");
}
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
                    <p>
                        <?php echo password($_POST['pass']); ?>
                    </p>
                    <p>
                        password lenght: <?php echo strlen($_POST['pass']); ?>
                    </p>
                    <form action="./index.php"></form>
                    <button>Vai alla pagina precedente!</button>

                </div>

            </div>

        </div>

</body>

</html>