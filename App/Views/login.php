<?php
     session_start();
 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Prevenir Invasão </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src='https://www.google.com/recaptcha/api.js'></script>

        <link rel="stylesheet" type="text/css" href="public/css/styleLogin.css"/>
    </head>
<body>


    <div class="container">
            
        <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
                <form action="index.php?p=logar" method="POST">
                        <div class="imgcontainer">
                            <img src="img/img.png" alt="Avatar" class="avatar">
                        </div>
            
                        <div >
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="name" required>
            
                            <label><b>Password</b></label>
                            <input type="password" maxlength="20" placeholder="Enter Password" name="psw" required>
                                 
                           
                            <input type="checkbox" checked="checked"> Remember me
                        </div>
            
                        <div  style="background-color:#f1f1f1">
                            <button type="button" class="cancelbtn">Cancel</button>
                            <span class="psw">Forgot <a href="#">password?</a></span>
                          
                        </div>
                        <div >
                                <img id="captcha" src="App/Libs/securimage/securimage_show.php" alt="CAPTCHA Image" />
                                <input type="text" name="captcha_code" size="10" maxlength="6" />
                                <a href="#" onclick="document.getElementById('captcha').src = 'App/Libs/securimage/securimage_show.php?' + Math.random(); return false">[ Different Image ]</a>
                                

                        </div>
                        <!--Não funciona em local host-->
                        <div class="g-recaptcha" data-sitekey="6Lc4TTwUAAAAANtJO4NqxUlpcmNjFe-CLO5pnRgf"></div>
                        <div >
                            <button type="submit">Login</button>
                        </div>
                        </form>
        </div>
        <div class="col-md-3"></div>
            
        </div> 
    </div>
           

</body>
</html>