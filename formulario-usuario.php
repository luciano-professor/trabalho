<?php include("cabecalho.php"); ?>

	<h2>Formulário de Usuário</h2>
	
	<form action="adicionar-usuario.php" method="post">
	
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input class="form-control" type="text" id="nome" name="nome" />
		</div>
		
		<div class="form-group">
			<label for="login">Login:</label>
			<input class="form-control" type="text" id="login" name="login" />
		</div>
		
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input class="form-control" type="password" id="senha" name="senha" />
		</div>
		
		<div class="pull-right">
			<button class="btn btn-default" type="reset">Limpar</button>
			<button class="btn btn-default" type="submit">Cadastrar</button>
		</div>
		
	</form>
	
<?php include("rodape.php"); ?>