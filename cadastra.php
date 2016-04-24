<?php

require_once 'action/aAlunos.php';


$aluno = new aAlunos();

$aluno->setNome($_POST['nome']);
$aluno->setCurso($_POST['curso']);
$aluno->insert();

echo "Dados inseridos com sucesso";
?>
<br>
<a href="index.php" >Voltar</a>
