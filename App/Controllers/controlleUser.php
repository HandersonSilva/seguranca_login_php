<?php
    namespace App\controllers;
    use App\Models\Entidades\usuario;
    use App\Libs\securimage\securimage;
    use App\Libs\ReCaptcha;
    use App\Libs\funcao;
   
  
    class controlleUser{
        
     

        public function captcha(){
                  session_start();
                    $securimage = new securimage();
                   
                    
                    $capctha = isset($_POST['captcha_code'])? $_POST['captcha_code']:"Nada";
                    if ($securimage->check($capctha) == false) {
                        // the code was incorrect
                        // you should handle the error so that the form processor doesn't continue
                      
                        // or you can use the following code if there is no validation or you do not know how
                        echo "<hr>O Codigo do Captcha PHP está Incorreto.<br /><br />";
                        
                        exit;
                      }
                      echo "<hr>codigo Captcha PHP está correto!!!<br/>";
                      echo "Login Autorizado...";

                      
                       
         }

        public function reCaptchaGoogle(){
            //Pegando os valores para teste
           /* foreach ($_POST as $key => $value) {
                echo '<p><strong>' . $key.':</strong> '.$value.'</p>';
            }*/

            // sua chave secreta
            $secret = "6Lc4TTwUAAAAADzx6Tmuski4senGxgadKNvMX7hD";

            // resposta vazia
            $response = null;

            
            $reCaptcha = new ReCaptcha();
            // verifique a chave secreta
            $reCaptcha->ReCaptcha($secret);
            
            //verificar o response
            $resp = $reCaptcha->verifyResponse($_SERVER['REMOTE_ADDR'],$_POST['g-recaptcha-response']);
             
             if ($resp->success == true){
                echo "<hr>Olá Senhor, " . $_POST["name"] .", Recaptcha OK!!!<br/>";
             }else{
                 echo "<hr>Ocorreu Um Erro com o Recaptcha (Erro)=>".$resp->errorCodes."<br/>";
             }
            
                
          

        }
        public function validarDadosString(){
            //pegando os dados via post
            $usuario = $_POST['name'];
            $senha = $_POST['psw'];
            
           // echo "Variaveis sem tratamento  Usuario = ".$usuario." , Senha =  ".$senha."<br/>";
            //tratando as variaveis
            $validaString  = new funcao();

            $usuarioV = $validaString->validaString( $usuario );
            $senhaV = $validaString->validaString( $senha );

            echo "<hr>Variaveis tratada com a Função validaString()<br/>  Usuario = ".$usuarioV." , Senha =  ".$senhaV."<br/>";
            
        }

        public function cryptoSenhaMd5(){
            //Pegando a variavel
            $senha = isset($_POST['psw'])? $_POST['psw']:"";
            
            if($senha != ""){
                $senhaMd5 = md5($senha);
                echo "<hr>Senha criptografada em md5 = ".$senhaMd5."<br/>";
            }

            
        }
        public function cryptoSenhaSha1(){
            //Pegando a variavel
            $senha = isset($_POST['psw'])? $_POST['psw']:"";
            
            if($senha != ""){
                $senhaSha1 = sha1($senha);
                echo "<hr>Senha criptografada em Sha1 = ".$senhaSha1."<br/>";
            }

            
        }
        public function cryptoSenhaBase64(){
            //Pegando a variavel
            $senha = isset($_POST['psw'])? $_POST['psw']:"";
            
            if($senha != ""){
                $senhaBase = base64_encode($senha);
                echo "<hr>Senha criptografada em Base64 = ".$senhaBase."<br/>";
            }

            
        }
          
    }