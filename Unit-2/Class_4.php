<!-- Arrays are of three types in php => PHP Enumerated Arrays, PHP Associative Arrays, PHP MultiDimensional Arrays -->

<?php
    $courses = array("PHP", "ReactJS", "Maths");
    $courseslength = count($courses);

    for ($x = 0; $x < $courseslength; $x++) {
            echo "Course " . ($x + 1) . ": " . $courses[$x] . "<br>";
    }

    echo "<br>";

    //Associative array
    $courses = array(
        "INT220" => "PHP",
        "INT221" => "Laravel",
        "INT222" => "Node js"
    );
  
    // Loop through associative array
    foreach($courses as $key => $value) {
        echo "key= " . $key . " Value = " . $value . "<br>";
    }

    $keys = array_keys($courses);
    $values = array_values($courses);
    echo "<br>";
    for($x = 0; $x < count($courses); $x++ ) {
        echo "key= " . $keys[$x] . " Value = " . $values[$x] . "<br>";
    }
    echo "<br>";


    // Multidimensional array
    $students = array(
        "Anisha" => array(
            "Math" => 85,
            "Science" => 92,
            "History" => 78
        ),
        "Nisha" => array(
            "Math" => 90,
            "Science" => 88,
            "History" => 94
        ),
        "Isha" => array(
            "Math" => 72,
            "Science" => 80,
            "History" => 65
        )
    );
    
    // Loop through the multidimensional array
    foreach($students as $student => $subjects) {
        echo "Grades for " . $student . ":<br>";
        foreach($subjects as $subject => $grade) {
            echo $subject . ": " . $grade . "<br>";
        }
        echo "<br>";
    }


    // array operators
    $a= array(
        "INT220" => "PHP",
        "INT221" => "Laravel",
        "INT222" => "Node js"
    );
    $b = array(
        "CSE325" => "Operating System",
        "INT219" => "Front End Web"
    );
    $c = ($a + $b); // union of $a and $b
    var_dump($c);
    echo "<br>";
    var_dump($a==$b); // Output: bool(false)
    echo "<br>";
    var_dump($a===$b);  // Output: bool(false)
    echo "<br>";
    var_dump($a != $b);  // Output: bool(ftrue
    echo "<br>";
    var_dump($a <> $b);  // Output: bool(true)
    echo "<br>";
    var_dump($a!== $b);  // Output: bool(true)
    echo "<br";
?>
