<?php

class Aluno
{
    protected $nome;
    protected $ra;
    protected $nota1;
    protected $nota2;
    protected $nota3;
    protected $nota4;

    public function __construct($nome, $ra, $nota1, $nota2, $nota3, $nota4)
    {
        $this->setNome($nome);
        $this->setRa($ra);
        $this->setNota1($nota1);
        $this->setNota2($nota2);
        $this->setNota3($nota3);
        $this->setNota4($nota4);
    }

    protected function setNome($nome)
    {
        $this->nome = $nome;
    }
    protected function setRa($ra)
    {
        $this->ra = $ra;
    }
    protected function setNota1($nota1)
    {
        $this->nota1 = $nota1;
    }
    protected function setNota2($nota2)
    {
        $this->nota2 = $nota2;
    }
    protected function setNota3($nota3)
    {
        $this->nota3 = $nota3;
    }
    protected function setNota4($nota4)
    {
        $this->nota4 = $nota4;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getRa()
    {
        return $this->ra;
    }
    public function getNota1()
    {
        return $this->nota1;
    }
    public function getNota2()
    {
        return $this->nota2;
    }
    public function getNota3()
    {
        return $this->nota3;
    }
    public function getNota4()
    {
        return $this->nota4;
    }
    public function getMedia()
    { 
        $arrayMedia = [];
        array_push($arrayMedia, $this->nota1);
        array_push($arrayMedia, $this->nota2);
        array_push($arrayMedia, $this->nota3);
        array_push($arrayMedia, $this->nota4);
        $sizeArray = sizeof($arrayMedia);
        return $this->nota1 + $this->nota2 + $this->nota3 + $this->nota4/$sizeArray;
    }
    // recebe indice para realização do for e população do array contido em Turma
    public function armazenaAluno($i)
    {
       $registroAlunos = [];
       $aluno = new Aluno($this->nome, $this->ra, $this->nota1, $this->nota2, $this->nota3, $this->nota4);
    
       array_push($registroAlunos, $aluno);
       
       return $registroAlunos[$i];
        
    }
}

?>