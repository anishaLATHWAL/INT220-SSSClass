<!-- 
    == is true if $x is equal to $y 
    === is true if $x is equal to $y and they are of the same type 
    != is not equal to 
    <> means not equal to 
-->
<!-- 
    Conditional assignment opereators
    ?  is ternary
    ?? is nullmcoalescing.....means if expr1 does not exist or is NULL, it takes value of expr2;  $x = expr1 ?? expr2

 -->
<?php
    $x = 25;
    $y = 35;
    $z = "25";
    echo($x==$z) . "<br>";
    var_dump($x === $z); // return the answer in boolean as well as the datatype
    var_dump($x != $y);
    var_dump($x != $z);
    echo "<br>";

    echo ++$x . "<br>";

    // Conditional assignment
    $a = $b ?? "Hello";
    echo $a  . "<br>";
    
    // Logical operators
    $q = 10;
    $w = 8;
    echo ($q & $w) . "<br>";
    echo ($q | $w) . "<br>";
    echo ($q ^ $w) . "<br>";
    
    // if else statement

    $d = date("D"); // date() function is used to format a local date and time and "D" tells date() to return the day of the week as a three-letter abbreviation 
    if($d == "Tue"){
        echo "It's Tuesday";
    }
    else{
        echo "It's not Tuesday";
    }
    
    echo "<br>"
    // Switch statement
    $p = 10;
    switch($a)
    {
        case 10:
            echo "first";
            break;
        case 20:
            echo "Second";
            break;
        default:
            echo "last";
    }
?>
