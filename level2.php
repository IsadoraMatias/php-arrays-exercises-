<?php
 echo '<strong style="color: green; font-size: 18px;">Ejercicio 1</strong><br>';
 //first create the two number arrays
$numbers1 = [12, 22, 34, 45, 67];
$numbers2 = [56, 21, 34, 89, 67];

//Find the same numbers in the two lists
$equal = array_intersect($numbers1,$numbers2);
print_r($equal);
echo "<br>";

//mix the two arrays
$mix = array_merge($numbers1,$numbers2);
print_r($mix);
echo "<br>";

//erase repeated numbers
$unique = array_unique($mix);
print_r($unique);
echo "<br>";

 echo '<strong style="color: green; font-size: 18px;">Ejercicio 2</strong><br>';

 //Associative students array
 $students = [
    "Ana Maria" => [8, 8, 7, 5, 9],
    "Lucia" => [5, 4.5, 7, 6],
    "Jorel" => [9.5, 10, 10, 9],
    "Gabriel" => [7, 5, 7, 7]
 ];

 //A loop to read every key and value in the associative array
    foreach ($students as $name => $grade ){
        $sum = array_sum($grade);
        $quantity = count($grade);
        $gradeAverage = $sum / $quantity;
        echo $name . " " . $gradeAverage ."<br>";

        //Store avarege student grade
        $averages[] = $gradeAverage;
        
    };
    //And calculate the class average
    $total = array_sum($averages);
    $studentsCount = count($averages);
    $classAverage = $total / $studentsCount;
    echo $classAverage;


    echo "<br><br><a href='index.php'>🔙 Volver a la página principal</a>";
?>