<?php
session_start();

include("../config.php");

// iremos pegar o dados preenchido no formulario
extract($_POST);

// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $senha = $_POST['senha'];
// $telefone = $_POST['telefone'];

// //endereco
// $cep = $_POST['cep'];
// $logradouro = $_POST['logradouro']; 
// $numero = $_POST['numero'];
// $complemento = $_POST['complemento'];
// $bairro = $_POST['bairro'];
// $cidade = $_POST['cidade'];
// $estado = $_POST['estado'];

$dir = "uploads/usuarios/fotos/" . $imagem["name"];

$sqlCadCliente = " INSERT into clientes(nome, email, senha, telefone, cep, logradouro, numero, complemento, bairro, cidade, estado, foto)
VALUES 
('$nome', '$email', '$senha', '$telefone', '$cep', '$logradouro', $numero, '$complemento', '$bairro', '$cidade', '$estado', '$foto')" ;

// Executar

$resp = mysqli_query($banco, $sqlCadCliente);

//$resp = $OOP->query($sql);

// Saber se algo foi executado(linha) no banco
mysqli_affected_rows($banco);

if (mysqli_affected_rows($banco)) {
    echo "<script type='text/javascript'>
    alert('Cadastro feito!');
    </script>";

// 3º mover a imagem para pasta

    move_uploaded_file($foto["tmp_name"], $dir);

    header("location:../index.php");
}
