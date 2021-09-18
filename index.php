<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Sistema de Gestão Acadêmica</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include_once __DIR__."./Model/Aluno.php";
        include_once __DIR__."./Model/Turma.php";

        $alunos = [];
        function instanciaObjetos()
        {
            // valores:
            $valuesAluno = [];
            $valuesAluno[0] = array("nome"=>"Daniel Mesquita", "ra"=>"2001001320", "nota1"=>7.0, "nota2"=>9.2, "nota3"=>8.7, "nota4"=>7.8);
            $valuesAluno[1] = array("nome"=>"Carlos Martins", "ra"=>"5002001321", "nota1"=>8.0, "nota2"=>7.2, "nota3"=>9.0, "nota4"=>8.8);
            $valuesAluno[2] = array("nome"=>"Maria Souza", "ra"=>"4001250981", "nota1"=>6.0, "nota2"=>8.9, "nota3"=>9.5, "nota4"=>9.5);
            $valuesAluno[3] = array("nome"=>"José Lima", "ra"=>"1370142280", "nota1"=>9.0, "nota2"=>9.2, "nota3"=>8.7, "nota4"=>8.0);
            $valuesAluno[4] = array("nome"=>"Lucas Novaes", "ra"=>"1202481307", "nota1"=>10.0, "nota2"=>9.5, "nota3"=>9.3, "nota4"=>9.8);
            $valuesAluno[5] = array("nome"=>"Leonardo Cardoso", "ra"=>"1402471307", "nota1"=>7.0, "nota2"=>6.5, "nota3"=>9.3, "nota4"=>10.0);

            $aluno;
            for($i=0; $i < sizeof($valuesAluno); $i++)
            {
                $aluno = new Aluno(
                                    $valuesAluno[$i]["nome"],
                                    $valuesAluno[$i]["ra"],
                                    $valuesAluno[$i]["nota1"],
                                    $valuesAluno[$i]["nota2"],
                                    $valuesAluno[$i]["nota3"],
                                    $valuesAluno[$i]["nota4"]
                                );
                $alunos[$i] = $aluno;
                
            }
            
            return $alunos;
        }
        function insereObj($indice)
        {
            $inserts = [];
            $resultado = [];
            $msgs=[];
            $array = instanciaObjetos();
            for($i=0; $i < sizeof($array); $i++)
            {
                $turma = "T01";
                $t = new Turma($turma, $array[$indice]);
                array_push($resultado,$array[$indice]);
                $result = $t->getResult($resultado);
                $obj = $array[$indice];
                if($result == True)
                {
                    $nome = $obj->getNome();
                    $msg = "O aluno <strong>".$nome."</strong> foi inserido com Sucesso na turma!";
                    array_push($msgs, $msg);
                }
                else
                {
                    $nome = $obj->getNome();
                    $msg = "<strong style='color:red;'>ERRO</strong> - Turma lotada. Aluno <strong style='color:red;'>".$nome."</strong> não inserido!";
                    array_push($msgs, $msg);
                   
                }
            }
            array_push($inserts,$t);
            array_push($inserts,$msgs);
            
           return $inserts;
        }
        
        function calcMediaTurma()
        {
            $objs = instanciaObjetos();
            $acumulado = 0.0;
            for($i=0; $i<5; $i++)
            {
                $acumulado = $acumulado + $objs[$i]->getMedia();
            }
            $mediaGeral = $acumulado/5;
            return $mediaGeral;
        }

        $array = instanciaObjetos();

        for($i=0; $i < sizeof($array); $i++)
        {   
            $result = insereObj($i);
            $msgs = $result[1];
            
            echo "  <div class='divalunos'>
                    <br/>".$msgs[$i]."<br/>
                    </div>";
        }

        echo "<br/>";
        echo "<br/>";

        echo "<h1> CONTROLE DE NOTAS DE TURMA </h1>";
        echo "<h1> NOTAS DOS ALUNOS DA TURMA ".$result[0]->getNomeTurma()." </h1>";

        echo "<h2> Média Turma: ".calcMediaTurma()."</h2>";

        for($i=0;$i<5;$i++)
        {    
         echo "<b class='nomealuno'> Nome aluno: ".$array[$i]->getNome()."</b>";
         echo 
         "<table style='border-collapse: collapse; border: 1px solid black;'>
         <thead style='border: 1px solid black;'>
            <tr style='border: 1px solid black;'>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Média</th>
            </tr>
            <tbody style='border: 1px solid black;'>
                <tr style='border: 1px solid black;'>
                    <td>".$array[$i]->getNota1()."</td>
                    <td>".$array[$i]->getNota2()."</td>
                    <td>".$array[$i]->getNota3()."</td>
                    <td>".$array[$i]->getNota4()."</td>
                    <td>".$array[$i]->getMedia()."</td>
                </tr>
            </tbody>
         </thead>
         </table>";
        }


    ?>
</body>
</html>