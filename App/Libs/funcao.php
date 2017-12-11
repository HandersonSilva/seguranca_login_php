<?php 



    namespace App\Libs;

    class funcao{

        public function validaString($string){
            //Prevenindo Cross-Site Script(XSS)
            return addslashes(//troca ' ou " por \' ou \"
                htmlentities(//converte simbolos html em entidades html
                    utf8_decode(//ajustar os caracteres acentuado 
                        trim($string)//remover os espaços antes e depois da variavel
                    )
                    )
            );
        }

    }


?>