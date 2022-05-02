<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $numero_inicial = 1;
            $numero_final = 10;
            $numeros_primos = Primos($numero_inicial, $numero_final);

            echo nl2br('Números Primos entre '. $numero_inicial . ' e '.$numero_final . ': ');
            for($i = 0; $i < count($numeros_primos); $i++){
                echo ($numeros_primos[$i] . ' ');
            }

            function Primos($inicial, $final){
                $numeros_primos = array();
                $aux = 0;
                for($i = $inicial+1; $i <= $final-1; $i++){
                    if(isPrimo($i)){
                        $numeros_primos[$aux] = $i;
                        $aux++;
                    }
                }
                return $numeros_primos;
            }

            function isPrimo($n){
                $soma = 0;
                for($i = 2; $i <= $n; $i++){
                    if(($n % $i) == 0){
                        $soma++;
                    }
                }
                if($soma == 1){
                    return true;
                }else{
                    return false;
                }
            }
        ?>
    </body>
</html>

