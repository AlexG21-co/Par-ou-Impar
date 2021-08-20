<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Par ou Impar</title>
</head>

<body>
    <form action="ParImpar.php" method="POST" class="container row g-3 border border-primary border m-4 p-2 w-50 mx-auto rounded-2">
        <h1 class="text-center p-2 bg-info"> Par ou Impar</h1>
        <div class="col-2">
            <label for="staticEmail2" class="visually-hidden">Número:</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Número:">
        </div>
        <div class="col-auto">
            <label for="inputPassword2" class="visually-hidden">Digite o número</label>
            <input type="number" class="form-control" name="vl1" id="inputPassword2" placeholder="Digite o número">
        </div>
        <div class="col-auto">
            <button type="submit" id="btn" class="btn btn-primary mb-3">Ver Resultado</button>
        </div>
    </form>
</body>

</html>