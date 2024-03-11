<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>


  <?php
  include("../presets/header.php");
  ?>


    <div class="flex_container">
      
      <form method="post" action="../login">
        <h1>Cadastrar</h1>
        <!-- Nome  -->
        <!-- <div class="form1"> -->
          <label for="exampleInputEmail1" class="labelInputs1" for="user">Nome de usuário</label>
          <input type="name" class="inputs1" id="user" name="user" maxlength="15"/>
        <!-- </div> -->
        <br/>
        <!-- Email -->
        <!-- <div class="form1"> -->
          <label for="exampleInputPassword1" class="labelInputs1" for="email">Email</label>
          <input type="email" class="inputs1" id="email" name="email"/>
        <!-- </div> -->
        <br/>
        <!-- Senha  -->
        <!-- <div class="form1"> -->
          <label for="senha" class="labelInputs1">Senha</label>
          <input
            type="password"
            class="inputs1"
            id="senha"
            name="senha"
          />
        <span id="spanManter"><input type="checkbox" name="manter" id="manter"><label for="manter" class="labelSub">Manter-me conectado</label></span>
        <!-- </div> -->
        <br />
        <!-- enviar -->
        <button type="submit" id="botaoEnviar" name="enviar">Enviar</button>
        <span id="spanLogin"><label for="login" class="labelSub">Já possui uma conta?</label><a href="../login" id="login">Entrar</a></span>

        
      </form>
    </div>
  </body>
</html>

<?php
  
  if(isset($_POST["enviar"])){
    $_SESSION["user"] = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["email"] = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["senha"] = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];


  };



  

  

?>