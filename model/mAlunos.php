<?php

require_once("./db/db.class.php"); // puxa funçoes e Conexao

class mAlunos extends Db {

    private $cod_aluno;
    private $nome_alumo;
    private $curso_aluno;
    
    //*******GETTERS
    public function getCodigo() {
        return $this->cod_aluno;
    }
    
    public function getNome() {
        return $this->nome_alumo;
    }

    public function getCurso() {
        return $this->curso_aluno;
    }
    
    //*******SETTERS
    public function setCodigo($Id){
	$this->cod_aluno = $Id;
    }
    
    public function setNome($nome_alumo) {
        $this->nome_alumo = $nome_alumo;
    }
    
    public function setCurso($curso_aluno) {
        $this->curso_aluno = $curso_aluno;
    }

    

}

?>
