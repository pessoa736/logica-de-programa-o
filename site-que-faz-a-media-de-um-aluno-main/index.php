<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>notas do aluno</title>
</head>
<body>
    <div class="info_container" id="info_container">
    <form action="src/php/submit.php" method="post">
        <label for="name">Nome:</label>
        <input type="text" id="nome" name='name' required><br><br>

        <label for="1bismetre">1°bimestre</label>
        <input type="number" id="nota1" name="nota1" required max="10" min="0"><br><br>

        <label for="2bismetre">2°bimestre</label>
        <input type="number" id="nota2" name="nota2" required max="10" min="0"><br><br>
        
        <label for="3bismetre">3°bimestre</label>
        <input type="number" id="nota3" name="nota3" required max="10" min="0"><br><br>
        
        <label for="4bismetre">4°bimestre</label>
        <input type="number" id="nota4" name="nota4" required max="10" min="0"><br><br>

        <input type="submit" value="Enviar">
    </div>
    <script scr="src/js/index_main.js"></script>
</body>
</html>