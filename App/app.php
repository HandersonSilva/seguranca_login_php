<?php


    namespace App;
    use App\Controllers\controlleUser;
   
    class app{
      
        public function index(){
            $passo = (isset($_GET['p']))? $_GET['p']:"";
          

        
          

            switch ($passo){
               
                case "logar":
                   $User = new controlleUser();
                   $User->reCaptchaGoogle();   
                   //$User->captcha();
                                  
                    
                    break;
                default:
                    require_once("Views/login.php");
            }

           

        }

       
    }