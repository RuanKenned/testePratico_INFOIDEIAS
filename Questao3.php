<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            isRpete();
            
            function preenche_array(){
                $numeros = array();
                echo 'Array:<br>';
                for($i = 0; $i < 20; $i++){
                    $numeros[$i] = rand(1, 10);
                    echo ($numeros[$i] . ' ');
                }
                echo '<br>';
                echo '<br>';
                echo '<br>';
                sort($numeros);
                return $numeros;
            }

            function isRpete(){
                $numeros_ordenados = preenche_array();
                echo 'O números que não se repetem são:<br>';
                if($numeros_ordenados[0] != $numeros_ordenados[1]){
                    echo "$numeros_ordenados[0]<br>";
                }

                for($i = 1; $i < count($numeros_ordenados)-1; $i++){
                    if(($numeros_ordenados[$i] != $numeros_ordenados[$i+1]) && ($numeros_ordenados[$i-1] != $numeros_ordenados[$i])){
                        echo "$numeros_ordenados[$i]<br>";
                    }
                }

                if($numeros_ordenados[19] != $numeros_ordenados[18]){
                    echo "$numeros_ordenados[19]<br>";
                }
            }
        ?>
    </body>
</html>

