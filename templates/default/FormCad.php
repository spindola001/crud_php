
<h1 class="text-center text-light">Cadastro de usuário</h1> 
<hr>

<div id="result" class="alert alert-success d-none" role="alert"></div>

<form action="../../src/controllers/CadastroController.php" method="POST" id="formCadastro" class="text-light">
    <input type="hidden" name="action" id="action" value="<?php echo $action?>">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Insira seu email" value="<?php echo $email?>">
    </div>
    <div class="form-group">
        <label for="passwd">Senha</label>
        <input type="password" class="form-control" name="passwd" placeholder="Insira sua senha" value="<?php echo $passwd?>">
    </div>
    <button type="submit" class="btn btn-primary"><?php echo $action?></button>
    <a href="Index.php" class="btn btn-success">Inicio</a>
</form>