
<h1 class="text-center text-light">Cadastro de usuário</h1> 
<hr>

<div id="result" class="alert alert-success d-none" role="alert"></div>

<form action="" method="POST" id="formCadastro" class="text-light">
    <input type="hidden" name="action" id="action" value="">
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" placeholder="Insira seu nome completo" value="">
    </div>
    <div class="form-group">
        <label for="endereco">Endereco</label>
        <input type="text" class="form-control" name="endereco" placeholder="Insira seu endereço" value="">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Insira seu email" value="">
    </div>
    <div class="form-group">
        <label for="dataNasc">Data de nascimento</label>
        <input type="date" class="form-control" name="dataNasc" placeholder="Insira sua data de nascimento" value="">
    </div>
    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" placeholder="Insira seu CPF" value="">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a href="Index.php" class="btn btn-success">Inicio</a>
</form>