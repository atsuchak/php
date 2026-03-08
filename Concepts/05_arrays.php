<?php

    // indexed arrays
    $studentsName = ["Stu1", "Stu2", "Stu3"];
    echo "Student name array: ";
    echo "$studentsName[0], ", "$studentsName[1], ", "$studentsName[2] <br>";
    
    $studentsID = [5, 3, 2, 1];
    echo "Student id array: ";
    // echo "$studentsID[0], ", "$studentsID[1], ", "$studentsID[2] <br>";
    print_r($studentsID);  // efficient way
    echo "<br>";

    // add new element
    $studentsName[] = "Hello";
    echo "push to last idx: " .$studentsName[3]. "<br>";
    
    array_push($studentsName, "Hmm");
    echo "array push: " .$studentsName[4]. "<br>";

    // array count
    echo "Count array size: " .count($studentsName). "<br>";

    // merge array
    $mergeArr = array_merge($studentsName, $studentsID);
    print_r($mergeArr);
    echo "<br>";
    
    
    // associative arrays (keys and value pairs)
    $studentDetails = ["A"=>01, "B"=>02, "C"=>05];
    echo "StudentDetails[\"A\"]: " .$studentDetails["A"]. "<br>";
    print_r($studentDetails);
    echo "<br>";
    
    // change value
    $studentDetails["C"] = 100;
    echo "StudentDetails[\"C\"]: " .$studentDetails["C"]. "<br>";

    echo "Count student details array: " .count($studentDetails). "<br>";
    

?>