<?php include("cabecalho.php"); 

function inserirUsuario($conexao, $nome, $login, $senha){
    
    //Preparando o Comando sql a ser executado
    $sql = mysqli_prepare($conexao, "INSERT INTO usuarios (nome, login, senha)
    VALUES (?, ?, ?)");
    
    //Substituir os parametros (?)
    mysqli_stmt_bind_param($sql, 'sss', $nome, $login, $senha);
    
    return mysqli_stmt_execute($sql);
    
}

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];

//Representa a conexao com o BD
$conexao = mysqli_connect('localhost', 'root', '', 'aulaphp');

//Executar o comando
if(inserirUsuario($conexao, $nome, $login, $senha)){

?>

	<p class="alert-success"> O usuário <?=$nome ?> foi inserido! </p>
		
<?php    
    
}
else{

?>
   <p class="alert-danger"> Login já foi inserido! </p> 
   
<?php     
}

//Fechar a conexao (opcional)
mysqli_close($conexao);

?>

<?php include("rodape.php"); ?>