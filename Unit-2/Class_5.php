<?php
    $name = array("Manoj","Rahul","Aneesh");
    $marks = array("75","89","44");
    // array_combine function creates an array by using the elements from one keys and another as values....
    $c = array_combine($name,$marks);
    print_r($c);
    echo "<br>";

    // array_chunk() function splits an array into chunks of new arrays....
    // array_chunks(array,size,preserve_key);
    $courses = array("PHP","Laravel","Node","HTML","CSS","ASP.NET");
    print_r(array_chunk($courses,2));
    echo "<br>";

    // array_count_values() function counts all the values of an array....
    // array_count_values(array);
    $a = array("Block 33","Block 34","Block 34","Block 36","Block 36");
    print_r(array_count_values($a));
    echo "<br>";

    // array_diff() function compares the values of two(or more) arrays, and returns the differences....
    $a1 = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2 = array("e"=>"red","f"=>"green","g"=>"blue");
    $a3 = array("h"=>"magenta","i"=>"seagreen");
    $result = array_diff($a1,$a2);
    print_r($result);
    echo "<br>";

    // array_intersect() function comparesthe values of two(or more) arrays and returns the matches....
    // array_intersect(array1,array2,array3)
    $result1 = array_intersect($a1,$a2,$a3);
    print_r($result1);
    echo "<br>";

    // array_merge() function merges one or more arrays into one array.
    // array_merge(array1,array2,array3,....);
    $b1 = array("a"=>"red","b"=>"green");
    $b2 = array("c"=>"magenta","d"=>"seagreen");
    print_r(array_merge($b1,$b2));
    echo "<br>";

    // array_pop() 
    $arr = array("red","green","htt");
    array_pop($arr);
    print_r($arr);
    echo "<br>";


    // array_push() function inserts one or more elements to the ned of the array
    // array_push(array,value1,value2,..);
    $arr1 = array("red","green");
    array_push($arr1,"yellow");
    print_r($arr1);
    echo "<br>";

    // array_search() function search an array for a valyue and returns the key..
    // array_search(value,array,strict);
    $s = array("red","green","yellow");
    print_r(array_search("yellow",$s));
    echo "<br>";

    // array_slice() function is used to extract a portion of an array
    $array = ['a', 'b', 'c', 'd', 'e'];
    
    $sliced_array = array_slice($array, 2); // Extract a portion of the array starting from index 2 (third element)
    print_r($sliced_array);
    echo "<br>";

    // array_column() return the values from a single colums in the input array..
    $people = [
        ['id' => 1, 'name' => 'John', 'age' => 28],
        ['id' => 2, 'name' => 'Jane', 'age' => 24],
        ['id' => 3, 'name' => 'Doe', 'age' => 30],
    ];
    $names = array_column($people, 'name'); // Extract the 'name' column
    print_r($names);
    echo "<br>";

    // Program to find the third largest element in array....
    $find = array(25,26,27,28,29,30);
    // sort($find); // Sort the array in ascending order
    rsort($find); // Sort the array in descending order
    $thirdLargest = $find[2];
    echo "The third largest element is: " . $thirdLargest;
    echo "<br>";
    
    // to find the mean of the array
    $sum = array_sum($find);
    $count1 = count($find);
    $mean = $sum/$count1;
    echo "The mean of the array is: " . $mean; 
    echo "<br>";

    // to find the median of an array..
    $mid = $count1 / 2;
    echo $find[$mid]; 

    // to find the unique element in array
    $array = array(25, 26, 27, 28, 29, 30, 27, 29, 25);
    $unique_elements = array_unique($array);
    print_r($unique_elements);

?>