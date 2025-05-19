<?php

function calculate($num1,$num2,$fuhao){
switch ($fuhao){
    case '+':
         $func ='add'; break;
    case '-':       
        $func ='minus';break;
    case '*':   
         $func ='multiply';break;
    case '/':      
          $func ='divide';break;
}
return $func($num1,$num2);

}
function add($num1,$num2){
    return $num1+$num2;
}
function minus($num1,$num2){
    return $num1-$num2;
}
function multiply($num1,$num2){
    return $num1*$num2;
}
function divide($num1,$num2){
    return $num1/$num2;
}

    echo calculate(12,13,'+');

?>
