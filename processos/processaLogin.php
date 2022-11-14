<?php
session_start();

include("../config.php");

// iremos pegar o dados preenchido no formulario

extract($_POST);

$sql = " select  * from clientes " ;
$sql .= " where email = '".$email."' and  senha ='".$senha."'";



$resultado  = mysqli_query($banco, $sql );


echo mysqli_num_rows($resultado);



 if(mysqli_num_rows($resultado) == 1){

      //ler o registro do banco de dados
   $campo = mysqli_fetch_array($resultado); // tabela do banco

      $_SESSION["logado"]["id"] = $campo["id_cliente"];
      $_SESSION["logado"]["usuario"] = $campo["nome"];

      header("location:../");
   }else{
      //direcionar para tela login.php
      header("location:index.php");
   }