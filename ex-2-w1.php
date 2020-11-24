Experement 2<br>a)
<?php
    $taxCode = 'TC';
    $taxRate = .20; //assuming 20% TAX
    $price = 1200;  //assuming 1200 as price
    if($taxCode=='TC'){
        $price = $price + $price*$taxRate;
        echo 'Price with tax '.$price;
    }
?>
<br>
b)
<?php
    //assuming values of A & B
    $A = 100;
    $B = 50;
    $opCode = 1;
    if($opCode == 1){
        $A*=2;
        $B*=2;
        $sum = $A+$B;
        echo 'Sum with opCode '.$opCode.' is '.$sum;
    }
?>
<br>
c)
<?php
    $currentNumber = 11;
    echo "Before : $currentNumber, ";
    if($currentNumber%2!=0){//checking if odd
        $currentNumber*=3;
        $currentNumber+=1;
    } else{
        $currentNumber/=2;
    }
    echo "After : $currentNumber";
?>
<br>
d)
<?php 
    $givenYear = 2020;
    if($givenYear%4==0){
        $leapYear = TRUE;
    } else if($givenYear%100==0 && $givenYear%400==0){
        $leapYear = TRUE;
    } else{
        $leapYear = FALSE;
    }
    if($leapYear == TRUE){
        echo "$givenYear is a leap year";
    } else{
        echo "$givenYear is not a leap year";
    }
?>
<br>
e)
<?php
    $cost = 0.00;
    $distance = 666;
    if($distance>0 && $distance<=90){
        $cost = 5.00;
    } else if(90<$distance && $distance<=300){
        $cost = 8.00;
    } else if(300<$distance && $distance<=900){
        $cost = 10.00;
    } else if($distance>900){
        $cost = 12.00;
    } else{
        echo "Invalid distance "; // Incase distance is less than or equal 0
    }
    echo "Cost = $cost";
?>







