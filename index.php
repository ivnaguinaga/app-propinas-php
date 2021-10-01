<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script type="text/javascript" src="js/code.js"></script>
</head>

<body>
    <div class="header">
        <h1>Propinas</h1>
    </div>
    <form action="process/calculo.proc.php" method="POST" class="todo">
        <div class="casilla">
            <input type="number" name="cuenta" placeholder="Total de la cuenta"></input>
        </div>
        <div class="casilla">
            <select name="servicio" id="">
                <option value="0.3">30% Excelente</option>
                <option value="0.2">20% Bueno</option>
                <option value="0.1" selected>10% Normal</option>
                <option value="0.05">5% Mala</option>
        </select>
        </div>
        <div class="casilla">
            <input type="number" name="personas" placeholder="¿Cuantas personas van a pagar?"></input>
        </div>
        <div class="casilla">
            <input type="submit" name="submit" value="Calcular">
        </div>
    </form>
    <?php
    if(isset($_REQUEST['tot'])){
    echo "<p>Total a pagar<p>";
    echo "<h3>".$_REQUEST['tot']."€<h3>";
}

if(isset($_REQUEST['camp'])){
    echo "no dejes campos vacios.";
}
?>
    
    
</body>
</html>