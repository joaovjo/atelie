<?php include "../layout/cabecalho.php"; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco</title>
</head>
<!------------------------------------------------------CABEÇALHO------------------------------------------------->

<body>
    <!-- <div id="deixe-mensagem">
      Deixe sua mensagem
    </div>

    <div id="formulario">
      <div id="campo-nome">
        <input id="contatoNome" type="text" name="nome" value="" size="45" aria-required="true" aria-invalid="false" placeholder="Nome">
      </div>

      <div id="campo-email">
      <input id="contatoEmail" type="email" name="email" value="" size="70" aria-required="true" aria-invalid="false" placeholder="E-mail">
      </div>

      <div id="campo-telefone">
      <input id="contatoTelefone" type="tel" name="telefone" value="" size="13" aria-required="true" aria-invalid="false" placeholder="Telefone">
      </div>

      <div id="campo-mensagem">
        <textarea id="contatoMensagem" name="mensagem" value="" cols="45" rows="10" aria-required="true" aria-invalid="false" placeholder="Mensagem"></textarea>
      </div>

      <div id="botao-enviar">
        <button type="submit" id="contatoEnviar">Enviar</button>
      </div> 

    </div> -->


<div id="deixe-msg">
    <form action="" method="get">
  
    <div id="contatoNome">
    <label for="name">Nome:</label>
    <input type="text" id="lblNome" name="nome">
  </div>
  
  <div id="contatoEmail">
    <label for="email">E-mail:</label>
    <input type="text" id="lblEmail" name="email">
  </div>
  
  <div id="contatoTelefone">
    <label for="tel"> Telefone:</label>
    <input type="tel" id="lblTelefone" name="telefone">
  </div>  
  
  <div id="contatoMensagem">
    <textarea id="contatoMsg" name="txtMsg" value="" cols="45" rows="10" aria-required="true" aria-invalid="false" placeholder="Deixe sua Mensagem"> </textarea>
  </div>
  
  <div id="contatoEnviar">
      <button type="submit" formmethod="post">Enviar</button> 
  </div>
  <!-- Personalizar Conteúdo, desde lbl até btn (Borda, mensagem, cor, etc)-->
</div>
</form> 
</body>


<!------------------------------------------------------RODAPÉ------------------------------------------------->
    <?php include "../layout/rodape.php"; ?>