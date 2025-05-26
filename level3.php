<?php
echo '<strong style="color: green; font-size: 18px;">Ejercicio 1</strong><br>';
//create an array of number
$numbers = [3, 9, 18];
//appliyng array map in each number 
function cube($number)
{
    return ($number ** 3);
};
$cube = array_map("cube", $numbers);
print_r($cube);
echo "<br>";

echo '<strong style="color: green; font-size: 18px;">Ejercicio 2</strong><br>';
//create an array of words
$tortilla = ["egg", "cebolla", "aceite", "salt", "patatas"];
//Count the letters
function even($ingredient)
{
    $length = strlen($ingredient);
    return $length %  2 === 0; //is even?
}
$eveningredient = array_filter($tortilla, "even");

print_r($eveningredient);
echo "<br>";

echo '<strong style="color: green; font-size: 18px;">Ejercicio 3</strong><br>';
$numbers = [3, 4, 5, 6, 7, 8, 11, 13, 14, 15];
function isPrime($number)
{
    if ($number < 2) return false;

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
//Prime filter
$primeNumbers = array_filter($numbers, "isPrime");
echo "Show all the prime numbers" . "<br>";
print_r($primeNumbers);
echo "<br>";
$sumPrimes = array_reduce($primeNumbers, function ($carry, $item) {
    return $carry + $item;
}, 0);

echo $sumPrimes;




echo "<br><br><a href='index.php'>🔙 Volver a la página principal</a>";
?>

