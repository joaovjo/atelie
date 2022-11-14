<?php


class Login  {
     

    public function processaLogin ($email, $senha,$banco){
        
        $sqlLogin = " select  * from usuario " ;
        $sqlLogin .= " where email = '".$email."' and  senha ='".$senha."'";

          $resultado  = $banco->query( $sqlLogin );

         //   if($resultado->num_rows == 1){
        
         //      $campo = $resultado->fetch_array(); // tabela do banco
        
         //      $_SESSION["logado"]["id"] = $campo["id_usuario"];
         //      $_SESSION["logado"]["usuario"] = $campo["nome"];
         //      //echo $campo["cod_us"];
         //      //echo $campo["nome_us"];
         //      //echo $campo["login_us"];
         //      //echo $campo["senha_us"];
         //      header("location:dashboard.php");
         //   }else{
         //      //direcionar para tela login.php
         //      header("location:index.php");
         //   }
    }

    public function verificaLogado() {
      if(!isset($_SESSION["logado"])){
         header("location:dashboard.php");
      }
    }
}
