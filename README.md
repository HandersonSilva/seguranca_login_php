# seguranca_login_php
    Objetivo dessa aplicação é mostrar como se prevenir de alguns ataques basicos em um Formulário de Login em  aplicações Web.


    
   # Prevenindo Spoofing com Captcha
        Libs:
        phpcaptcha
            https://www.phpcaptcha.org/

        reCaptcha Google Api
            https://www.google.com/recaptcha/admin
            Link Tutorial:
                https://webdesign.tutsplus.com/pt/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024

  # Prevenindo Cross-Site Script(XSS)
        Prevenir XSS usando as Funções:
            trim() = remover os espaços antes e depois da variavel
            utf8_decode() = ajustar os caracteres acentuado 
            htmlentities() = converte simbolos html em entidades html
            addslashes() = troca ' ou " por \' ou \"
  #Criptografia de Senhas
        Criptografia com:
            md5 = tamanho 32 caracteres
            sha1 = tamanho 40 caracteres
            base64; tamanho relativo a senha original (Pode ser descriptografada facilmente)

  #Prevenir Mysql Inject
        Para prevenir o mysql inject basta usar a função validaString() da classe App/Libs/funcao.php


    

#Link da Aplicação
http://handersonsilva.com/seguranca_login_php/
