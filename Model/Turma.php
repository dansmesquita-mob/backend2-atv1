<?php 

class Turma
{
    protected $alunos = [];
    protected $nomeTurma;

    public function __construct($nomeTurma, $aluno)
    {
        $this->setNomeTurma($nomeTurma);
        $this->setAlunos($aluno);

    }
    
    private function setNomeTurma($nomeTurma)
    {
        $this->nomeTurma = $nomeTurma;
       
    }

    private function setAlunos($aluno)
    {
        $this->alunos = $aluno;
       
    }

    public function getNomeTurma()
    {
       return $this->nomeTurma;
    }
    public function getAlunos()
    {
       return $this->alunos;
    }
    
    public function getResult($array)
    {
        if(sizeof($array)> 5)
        {
            return False;
        }
        else
        {
            return True;
        }
     
    }
   
}