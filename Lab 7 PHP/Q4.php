<?php declare(strict_types=1);
    function reverseInteger($num){
        // $temp=0;
        // while($num>=1){
        //     $temp = ($temp*10)+($num%10);
        //     $num/=10;
        // }
        // return $temp;
        return strrev($num);
    }
    function computeReverseSum( $firstNum, $secondNum): int{
        return reverseInteger($firstNum)+reverseInteger($secondNum);
    }

    # CONSOLE VERSION
    // $input = readline("Sample Input: ");
    // $arrNum = explode(", ",$input);
    // echo "Sample Output: ", computeReverseSum((int)$arrNum[0],(int)$arrNum[1]);

    # BROWSER VERSION
    $firstNum = $_GET['num1'];
    $secondNum = $_GET['num2'];
    echo "<strong>Sample Input: </strong>", $firstNum,", ",$secondNum,'<br>';
    echo "<strong>Sample Output: </strong>", computeReverseSum($firstNum,$secondNum);
?>