<?php
include_once("banco.php");
session_start();

if(isset($_POST['enviar'])){
    $enviar = array();
    
    $enviar['titulo'] = $_POST['titulo'];
    $enviar['descricao'] = $_POST['descricao'];
    $enviar['dia'] = $_POST['datas'];
    $enviar['status'] = $_POST['status'];
 
    
    cadastrar_oficina($conexao, $enviar);
    
    header('Location: oficina_cad.php');
    
} else{
    echo "Algo deu errado";
}
?>