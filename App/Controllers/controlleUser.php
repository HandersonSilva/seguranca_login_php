<?php
    namespace App\controllers;
    use App\Models\Entidades\usuario;
    use App\Libs\securimage\securimage;
    use App\Libs\ReCaptcha;
   
  
    class controlleUser{
        
     

        public function captcha(){
                  session_start();
                    $securimage = new securimage();
                    $user = $_POST['name'];
                    echo $user;
                    $capctha = isset($_POST['captcha_code'])? $_POST['captcha_code']:"Nada";
                    if ($securimage->check($capctha) == false) {
                        // the code was incorrect
                        // you should handle the error so that the form processor doesn't continue
                      
                        // or you can use the following code if there is no validation or you do not know how
                        echo "The security code entered was incorrect.<br /><br />";
                        echo $capctha;
                        exit;
                      }
                      echo "codigo Captcha correto!!!<br/>";
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
             print_r( $resp);
             if ($resp->success == true){
                echo "Olá Senhor, " . $_POST["name"] .", obrigado por enviar seu formulário!";
             }
               // se submetido, verifique a resposta
            if ($_POST["g-recaptcha-response"]) {
                $response = $reCaptcha->verifyResponse(
                        $_SERVER["REMOTE_ADDR"],
                        $_POST["g-recaptcha-response"]
                    );
                }
                
            //Verificar o response
            if ($response != null && $response->success) {
              echo "Olá, " . $_POST["name"] .", obrigado por enviar seu formulário!";
            }else{
                echo "Erro response = ".$response->errorCodes;
            }

        }

          
    }