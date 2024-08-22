<!-- Standard tag -->
<?php 
    echo "Hello World <br>";
    echo "this "."is "."SSS <br>"; // dot is for concatenation
    echo "this ","is ","SSS <br>"; //  passing multiple parameters
    $a = 10;
    $b = 5;
    echo "$a + $b <br>";
    echo $a + $b. "<br>";
    echo $a.$b. "<br>";

    echo gettype($a)."<br>"; // integer
    $m = (9<5);
    echo $m; // will not be visible....as 0 cannot be seen in the console
    echo gettype($m)."<br>"; // boolean

    // $file = fopen("test.txt","r");

    // to define a constant: define(var,value); // defining the constant
    // const $c = 10;

    define ("Wishes","Good Morning");
    echo Wishes."<br>";
    echo gettype(Wishes);

    define("courses",[
        "php",
        "html",
        "css"
    ]);
    echo courses[0];
    // Constants are global and can be used in the entire script..


    function test(){
        echo Wishes;
    }
    test();


?>


<!-- Short echo tag -->
<!-- <?= 
    'Hello';
?> -->

<!-- <?php echo 'We omitted the last closing tag';?> -->

 <!-- php can be embedded into html documents...avoid the usage of paragraph tag -->
 <!-- echo has no print value while print has a return value 1...... -->
  <!-- variable declaration: $a=10 -->