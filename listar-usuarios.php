<?php
include('cabecalho.php');
include('bd-usuarios.php');
?>

<table class="table table-striped table-bordered">
	<tr>
		<th>id</th>
		<th>nome</th>
		<th>login</th>
	</tr>

<?php 
$usuarios = listarUsuarios();

foreach($usuarios as $usuario):
?>
	
	<tr>
		<td><?=$usuario['id']?></td>
		<td><?=$usuario['nome']?></td>
		<td><?=$usuario['login']?></td>
	</tr>
<?php     
endforeach;
?>

</table>
<?php include('rodape.php') ?>