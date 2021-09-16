<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema de Gestão Acadêmica</title>
</head>
<body>
    <?php
        include_once __DIR__."./Model/Aluno.php";
        include_once __DIR__."./Model/Turma.php";
    
        $nome = 'Daniel';
        $ra = '20010012020';
        $nota1 = 2.0;
        $nota2 = 5.0;
        $nota3 = 4.0;
        $nota4 = 6.0;

        $aluno = new Aluno($nome, $ra, $nota1, $nota2, $nota3, $nota4);

        echo "<p>".$aluno -> getNota1()."</p>";

        echo $aluno-> getMedia();

        echo "<br/>";
        echo "<br/>";
        echo $aluno -> armazenaAluno(0) -> getNome();

    ?>
</body>
</html>