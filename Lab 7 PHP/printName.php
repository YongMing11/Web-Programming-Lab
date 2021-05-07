<?php
    function printName($firstName,$lastName,$num){
        for($i=0;$i<$num;$i++){
            echo $firstName," ",$lastName,"<br>";
            //'.'=> join the string before output
            //','=> directly output one after another
        }
    }

    printName("John", "Smith", 10);
?>