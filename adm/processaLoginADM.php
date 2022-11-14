<?php
session_start();

include("../config.php");

// iremos pegar o dados preenchido no formulario

extract($_POST);

// $email = $_POST['email'];
// $senha = $_POST['senha'];

//echo $login . " " . $senha; 

$sql = " select  * from usuarios " ;
$sql .= " where email = '".$email."' and  senha ='".$senha."'";

// echo $sql;

// executar a string feita em php e converte em comando sql

$resultado  = mysqli_query($banco, $sql );

//$resultado  = $OOP->query( $sql );

// saber o numero de linha retornado
echo mysqli_num_rows($resultado);

   //echo $resultado->num_rows;

 if(mysqli_num_rows($resultado) == 1){

   //if($resultado->num_rows == 1){

      //ler o registro do banco de dados
   $campo = mysqli_fetch_array($resultado); // tabela do banco

      //$campo = $resultado->fetch_array(); // tabela do banco

      $_SESSION["logadoADM"]["id"] = $campo["id_usuario"];
      $_SESSION["logadoADM"]["usuario"] = $campo["nome"];

      header("location:dashboard.php");
   }else{
      //direcionar para tela login.php
      header("location:index.php");
   }