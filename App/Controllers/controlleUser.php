<?php
    namespace App\controllers;
    use App\Models\Entidades\usuario;
    use App\Libs\securimage\securimage;
   
  
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

          
    }