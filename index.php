<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="recibe.php" method="POST">
        <label>
            nombre:
            <input type="text" name="nombre">
        </label>

        <br>
        
        <label>
            edad:
            <input type="number" name="edad">
        </label>
        <br>

        <label>
            Masculino:
            <input type="radio" name="sexo" value="Masculino">
        </label>
        <br>

        <label>
            Femenino:
            <input type="radio" name="sexo" value="Femenino">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>

</body>
</html>