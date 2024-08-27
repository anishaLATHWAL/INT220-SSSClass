
<?php 
    // do while loop 
    $i = 0;

    do {
        $i++;
        echo "The number is " . $i . "<br>";
    } while ($i < 5);

    echo "<br>";
    // for loop
    for($i = 1;$i<=3; $i++){
        echo "The number is " . $i ."<br>";
    }

    echo "<br>";

    // for( ; ; ){
    //     echo "hello";  // gives infinte hello
    // }

    // foreach loop
    $color = array("Red","Green","Blue");    // $color = ["Red","Green","Blue"]
    foreach($color as $value){
        echo $value . "<br>";
    }

    echo "<br>";

    // Superhero array or associative array
    $superhero = array(
        "name" => "Anisha Lathwal",
        "email" => "abc@gmail.com",
        "age" => 20
    );

    // loop through superhero array
    foreach($superhero as $key => $value ){
        echo $key . " : " . $value . "<br>";
    }

    echo "<br>";
    // brak inside loop
    for ($i = 0; $i < 10; $i++) {
        echo "Iteration number: " . $i . "<br>";
    
        // Break the loop when $i equals 5
        if ($i == 5) {
            echo "Breaking the loop at iteration number: " . $i . "<br>";
            break;
        }
    }

    echo "<br>";
    // Continue example with for loop
    for ($i = 0; $i < 10; $i++) {
        // Skip the iteration when $i equals 5
        if ($i == 5) {
            echo "Skipping iteration number: " . $i . "<br>";
            continue;
        }
        
        echo "Iteration number: " . $i . "<br>";
    }

?>

