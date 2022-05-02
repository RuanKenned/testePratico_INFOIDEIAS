<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $sequencia = array(1, 3, 2, 1);

            foreach($sequencia as $num){
                echo "$num ";
            }
            echo '<br>';

            if(SequenciaCrescente($sequencia)){
                echo "True";
            }else{
                echo "False";
            }

            function SequenciaCrescente($array){
                for($i = 0; $i < count($array); $i++){    
                    $novo_array = array();  
                    
                    for($p = 0; $p < count($array); $p++){                                   
                        if($i != $p){                            
                            array_push($novo_array,$array[$p]);
                        }
                    }

                    if(isCrescente($novo_array)){
                        return true;
                    }
                }
                return false;
            }

            function isCrescente($array){
                for($i = 0; $i < count($array)-1; $i++){                                   
                    if($array[$i] >= $array[$i+1]){
                        return false;
                    }
                }
                return true;
            }
        ?>
    </body>
</html>

