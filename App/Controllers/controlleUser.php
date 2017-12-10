<?php
    namespace App\controllers;
    use App\Models\Entidades\usuario;
    use App\Libs\securimage\securimage;
    use App\Libs\ReCaptcha;
   
  
    class controlleUser{
        
     

        public function captcha(){
                  session_start();
                    $securimage = new securimage();
                   
                    
                    $capctha = isset($_POST['captcha_code'])? $_POST['captcha_code']:"Nada";
                    if ($securimage->check($capctha) == false) {
                        // the code was incorrect
                        // you should handle the error so that the form processor doesn't continue
                      
                        // or you can use the following code if there is no validation or you do not know how
                        echo "O Codigo do Captcha PHP está Incorreto.<br /><br />";
                        
                        exit;
                      }
                      echo "codigo Captcha PHP está correto!!!<br/>";
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
                echo "Olá Senhor, " . $_POST["name"] .", Recaptcha OK!!!<br/>";
             }else{
                 echo "Ocorreu Um Erro com o Recaptcha (Erro)=>".$resp->errorCodes."<br/>";
             }
            
                
          

        }

          
    }