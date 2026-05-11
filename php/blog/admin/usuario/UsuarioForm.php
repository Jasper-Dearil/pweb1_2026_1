<?php 
    include '../header.php';
    include_once "../database/db.class.php";

    $db = new db('usuario');

    if(!empty($_POST)){
        $db->store($_POST);
    }
?>

<div class="col">
<form action="resultadoFormAluno.php" method="get">
    <div class="col">
        <label for="nome">Nome</label>
        <input type="text" name="nome" class="form-control-6">
    </div>

     <div class="col">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control-6">
    </div>
    <button type="submit" class="btn btn-primary">salvar</button>
</form>
</div>

</a><?php 
    include '../footer.php'
?>