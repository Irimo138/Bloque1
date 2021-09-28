
        <?php
        $pot = 2;
        $cantidad= 100;
        $cont = 1;
        $result = 1;
        $num=1;

        do{
            $result=1;
            while($cont<$pot) {
                $cont++; 
                $result= $num * $num;


            }
            echo " $num -  $result <br>";
            $cont=1;
            $num++;

        }while( $result < $cantidad)

        ?>