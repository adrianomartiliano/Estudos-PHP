<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <fieldset>
            <legend>Operações</legend>
            Valor 1: <input type="number" name="v1"><br>
            Valor 2: <input type="number" name="v2">
            <label for="1">Somar</label><input type="radio" name="op" value="1" checked><br>
            <label for="2">Subtrair</label><input type="radio" name="op" value="2"><br>
            <label for="3">Divisão</label><input type="radio" name="op" value="3"><br>
            <label for="4">Multiplicação</label><input type="radio" name="op" value="4">
            <input type="submit" value="Resultado">
        </fieldset>
        
    </form>
    <br>
    <form action="contador.php" method="post">
        <fieldset>
            <legend>Contador com invervalos</legend>
            <label for="n1">De </label><input type="number" name="n1"><br>
            <label for="n2">Até </label><input type="number" name="n2"><br>
            Intervalo: <select name="inter" id="intervalo" >
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <input type="submit" value="Conte">
        </fieldset>
    </form><br>
    
    <form action="fatorial.php" method="post">
        <fieldset>
            <legend>Fatorial</legend>
            Valor: <input type="number" name="val">
            <input type="submit" value="Calcular">
        </fieldset>
    </form><br>

    <form action="tabuada.php" method="post">
        <fieldset>
            <legend>Tabuada</legend>
            <select name="op">
                <?php
                    $i = 1;
                    while($i <= 10){
                        echo "<option value='$i'>$i</option>";
                        $i++;
                    }

                ?>
            </select>
            <input type="submit" value="Calcular">
            
        </fieldset>
    </form>
    
</body>
</html>