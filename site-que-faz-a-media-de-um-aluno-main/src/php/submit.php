<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <?php
        require "../../includes/meus scripts/php/media-de-um-aluno-em-php(modicado)/scr/classAluno.php";

        $nome = $_POST["name"];

        $notas = [
            (float) $_POST["nota1"], 
            (float) $_POST["nota2"], 
            (float) $_POST["nota3"],
            (float) $_POST["nota4"]
        ];

        $aluno = new aluno($nome);

        $aluno->setNotas($notas);
        $aluno->calculeAMedia();

        function PrintHtml($type, $texto){
            echo "<".$type." >".$texto."</".$type.">";
        }
        echo "<div class='submit_container' id='submit_container'>
        ";
        
        echo "<script src='../js/submit_main.js'></script>";
        PrintHtml("h1", $nome);
        PrintHtml("h2", $aluno->mostarDadosDoAluno());
        echo "
        </div>";

    ?>
</body>
</html>
