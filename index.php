<?php
require_once './action/aAlunos.php';

$aluno = new aAlunos();

//SELECT
$select = array();
$select = $aluno->select();
?>

<h1>Página de Alunos</h1>

<div>
    <h2>Cadastro</h2>
    <form method="POST" action="cadastra.php">

        <label>Digite seu nome:</label>
        <input type="text" name="nome">
        <br><br>
        <label>Digite seu curso:</label>
        <input type="text" name="curso">
        <br><br>

        <input type="submit">

    </form>
</div>


<div>
    <h2>Listagem</h2>
    <?php foreach ($select as $value): ?>
    <th>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['nome']; ?></td>
        <td><?php echo $value['curso']; ?></td>
        <td><small style="color: blue;">Editar</small></td>
        <td><small style="color: red;"> Deletar</small></td>
    </th>
    <br>



    <?php endforeach; ?>

</div>