<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Par ou Impar</title>
</head>

<body>
    <div class="container border p-4">
        <h1 class="text-center p-2 bg-info"> Par ou Impar</h1>
        <h2  class="text-center">Resultado:</h2>
        <?php
        $n=$_POST["vl1"];
        if ($n%2==0) {
            echo("$n é Par!");
        }
        else{
            echo("$n é Ímpar!");
        }
        ?>
    </div>
</body>

</html>