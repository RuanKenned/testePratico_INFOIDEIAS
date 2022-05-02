<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            #Informe o ano
            $ano = 1700;
            function SeculoAno($ano){
                $seculo = ceil($ano/100);
                return $seculo;
            }
            echo'Século do ano '. $ano .': '.SeculoAno($ano);
        ?>
    </body>
</html>

