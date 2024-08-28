<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
</head>
<?php
    $plataforma = "DIO";
    $cursos = 15;
    $linguagens = ["PHP", "JAVA", "PYTHON"];
    $data = date("d/m/Y")
?>
<body>
    <h1>Curso sobre tipos em PHP</h1>
    <h4>O curso foi feito pela 
        <?php
            echo $plataforma;
        ?>
    </h4>
    <p>Atualmente, <?php echo $data ?>. <br>A <?php echo $plataforma ?> possui mais de <?php echo $cursos ?> cursos de <?php print_r($linguagens) ?></p>
    
</body>
</html>