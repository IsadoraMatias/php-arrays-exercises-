<?php
 echo '<strong style="color: green; font-size: 18px;">Ejercicio 1</strong><br>';

// crear un array, um loop para contar los numeros y imprimir por el indice
$numbers = [1, 2, 3, 4, 5];
for($i=0; $i< count($numbers); $i++){
    echo $numbers[$i]."<br>";
};

 echo '<strong style="color: green; font-size: 18px;">Ejercicio 2</strong><br>';

 $X = array (10, 20, 30, 40, 50,60);
 echo "Before" . count($X) ."<br>";
 print_r($X) ;
 echo "<br>";
 $x = array_splice($X, 2, 1);

 echo "After" . count($X) ."<br>";
 print_r($X) .PHP_EOL;
 echo "<br>";
 
 echo '<strong style="color: green; font-size: 18px;">Ejercicio 3</strong><br>';

 //create an array of words that all contain the same letter, except one
 $animals = ["dog", "cat","owl","wolf","otter"];
 $find = "o";
 $rightChar = true;

 //Now check each word and find the one that doesnt have the same letter
   foreach ($animals as $animal){
    if(strpos($animal, $find) === false){
    echo $animal ."<br>";
    $rightChar = false;
    }
    
};

echo '<strong style="color: green; font-size: 18px;">Ejercicio 4</strong><br>';

$profile = [
    "name" => "Isadora",
    "age" => "Still young",
    "email" => "izzadora@outlook.com",
    "favoriteFood" => "Loves rice"
];
 foreach ($profile as $key => $value){
    echo $value ."<br>";
 }


 echo "<br><br><a href='index.php'>🔙 Volver a la página principal</a>";
?> 