<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acronym</title>
</head>
<body>
    <header>
        <h1>Ejercicio de acrónimos</h1>
    </header>
    <form action="" method="post" >
        <label for="text">Introduzca un texto</label>
        <input type="text" id="text" name="text">
        <input type="submit" name="btn" value="Enviar">
    </form>
    <?php
   
    include ('acronym.php') ;  
    getAcroym();
     ?>
</body>
</html>