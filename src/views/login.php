<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/assets/css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="login-form">
      <div class="logo"><img src="images/logo.png" alt=""></div>

      <h6>YALI - O SEU SIMULADOR</h6>

      <form action="/login" method="post">
        <div class="textbox">
          <input type="text" id="usuario" name="usuario" placeholder="Usuário ou Email">
          <span class="check-message hidden">Obrigatório</span>
        </div>

        <div class="textbox">
          <input type="password" id="senha" name="senha" placeholder="Senha">
          <span class="check-message hidden">Obrigatório</span>
        </div>

        <div class="options">
          <a href="#">Esqueci minha senha</a>
        </div>

        <input type="submit" value="Entrar" class="login-btn" disabled>
        <div class="privacy-link">
          <a href="#">Política de Privacidade</a>
        </div>
      </form>

      <div class="dont-have-account">
        Não é cadastrado?
        <a href="#">Cadastre-se</a>
      </div>
    </div>

    <script type="text/javascript">
      $(".textbox input").focusout(function(){
        if($(this).val() == ""){
          $(this).siblings().removeClass("hidden");
          $(this).css("background","#554343");
        }else{
          $(this).siblings().addClass("hidden");
          $(this).css("background","#484848");
        }
      });

      $(".textbox input").keyup(function(){
        var inputs = $(".textbox input");
        if(inputs[0].value != "" && inputs[1].value){
          $(".login-btn").attr("disabled",false);
          $(".login-btn").addClass("active");
        }else{
          $(".login-btn").attr("disabled",true);
          $(".login-btn").removeClass("active");
        }
      });
    </script>
  </body>
</html>
