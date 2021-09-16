<?php 

include_once __DIR__."./Aluno.php";

class Turma extends Aluno
{
    protected $alunos = [];
    protected $nomeTurma;

    public function __construct($nomeTurma)
    {
        $this->setNomeTurma($nomeTurma);
    }
    
    private function setNomeTurma($nomeTurma)
    {
        $this->nomeTurma = $nomeTurma;
    }

    
}