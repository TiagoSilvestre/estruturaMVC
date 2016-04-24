<?php
require_once './model/mAlunos.php'; // puxa funçoes, conexao, funcoes da tabela(model)

class aAlunos extends mAlunos
{
    protected $sqlInsert = "insert into alunos (nome, curso) values ('%s', '%s')";
    protected $sqlUpdate = "update alunos set nome='%s', curso='%s' where id ='%s' ";
    protected $sqlDelete = "delete from alunos where id ='%s' ";
    protected $sqlSelect = "select * from alunos where 1=1 %s %s";
    
    public function insert()
    {
        $sql = sprintf($this->sqlInsert, $this->getNome(), $this->getCurso());
        return $this->RunQuery($sql);
    }
    
    public function select($where = '', $order = '')
    {
        $sql = sprintf($this->sqlSelect, $where, $order);
        return $this->RunSelect($sql);
    }
    
    public function update()
    {
        $sql = sprint($this->sqlUpdate, $this->getNome(), $this->getCurso(), $this->getCodigo());
        $this->RunQuery($sql);
    }
    
    
}
