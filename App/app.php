<?php


    namespace App;
    use App\Controllers\controlleUser;
   
    class app{
      
        public function index(){
            $passo = (isset($_GET['p']))? $_GET['p']:"";
          

        
          

            switch ($passo){
               
                case "logar":
                   $user = new controlleUser();
                    //Prevenindo Cross-Site Script(XSS)
                    $user->validarDadosString();
                   //chamada da função recaptcha do google
                   $user->reCaptchaGoogle();   
                   //chamada da função captcha da biblioteca phpcaptcha
                   $user->captcha();
                  
                                  
                    
                    break;
                default:
                    require_once("Views/login.php");
            }

           

        }

       
    }