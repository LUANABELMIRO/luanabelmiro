<?php

      $nome = addcslashes($_POST['nome']);
      $email = addcslashes($_POST['email'];
      $telefone = addcslashes($POST_['telefone']);

      $to = "luanag.belmiro@gmail.com";
      $assunto = "Obrigado por entrar em contato - Luana Belmiro"

      $corpo = "Nome: ".$nome."\n" ."E-mail ".$email. "\n"."Telefone " .$telefone;

      $cabeca = "From luanag.belmiro@gmail.com"."\n"."Reply-to: ".$email. "\n"."X=Mailer:PHP/.phpversion()";

      if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
      }else{
        echo("Houve um erro ao enviar o email");
      }
      
?>