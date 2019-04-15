<?php
include('conecta.php');

function listarUsuarios(){
    
    //Dizendo que vai usar a variavel do escopo global
    global $conexao;
    
    $usuarios = array();
    
    $sql = "SELECT * FROM usuarios";
    
    $resultado = mysqli_query($conexao, $sql);
    
    while($linha = mysqli_fetch_assoc($resultado)){
        
        $usuarios[] = $linha;
        
    }
    
    return $usuarios;
    
}