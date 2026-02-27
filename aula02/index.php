<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 02</title>
</head>
<body>
    <h1>Aula 02 - PHP + HTML</h1>

    <?php
        $nome = "Alana";
        echo "<h2 style='color: red; font-family: Arial';>Bem-vinda $nome </h2>";
        //echo "<h2>Bem-vinda ". $nome . "</h2>";
        
        echo"<ul>";
        for ($i=1; $i <= 20; $i++) { 
            echo "<li>item $i</l1>";
            echo "<br>";
        }
        echo "</ul>"
    ?>
    <ul>
        <li>item 1</li>
        <li>item 2</li>
        <li>item 3</li>
        <li>item 4</li>
        <li>item 5</li>
    </ul>
</body>
</html>