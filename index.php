<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$kintamasis = 54;

// if (rand(0, 5) > 2) {
//     pirmoji();
// }

function pirmoji()
{
    echo "<h1>Kebabas!<h1>";
}

for ($i = 0; $i < 10; $i++) {
    //   echo "<h1 class= \"petras\">keletas eiluciu " . $i . "<h1>";
    //   echo '<h1 class="petras">keletas eiluciu ' . $i . "<h1>";

}
$arnoKintamasis = 17;

// echo $arnoKintamasis;

$arr = [1, 5, 8];
// print_r($arr);
// var_dump($arr);

// echo ' <script>
//         console.log(' . $arnoKintamasis . ');
//     </script>';

/**arrays:
types:
associative
sequencial - sequence
 */

//sequencial - sequence
$cars = ["Volvo", "BMW", "Toyota"];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
$cars[25] = "bugatti";
array_push($cars, "tesla");
print_r($cars);
echo "<hr>";

//associative
$age = ["Peter" => "35", "Ben" => "37", "Joe" => "43"];
echo "Peter is " . $age['Peter'] . " years old.";
echo "<hr>";

$student1 = ["name" => "Naglis", "surname" => "Mockevicius", "age" => 32];
$student2 = ["name" => "Tomas", "surname" => "Perminas", "age" => 32];
print_r($student1);
echo "<hr>";
echo $student1['age'];
echo "<hr>";
$students = [$student1, $student2];
echo $students[0]['surname'] . "<br>";

for ($i = 0; $i < count($students); $i++) {
    echo "va." . $students[$i]['name'] . "<br>";
}
echo "<hr>";

foreach ($students as $student) {
    foreach ($student as $key => $value) {
        // echo "va." . $student[$key] . "<br>";
        echo "key -" . $key . ", value - " . $value . "<br>";
    }
    echo "<hr>";
}

echo "<hr>";

$pokemon1 = ['name' => 'pikachoo', 'max_attack' => 2000, 'max_defence' => 2000, 'max_stamina' => 2000, 'photo' => 'uasdf.jpeg'];
$pokemon2 = ['name' => 'raichoo', 'max_attack' => 2500, 'max_defence' => 2500, 'max_stamina' => 2500, 'photo' => 'sdfd.jpeg'];
$dbResult = [$pokemon1, $pokemon2];

foreach ($dbResult as $item) {
    foreach ($item as $raktazodis => $ivertis) {
        echo "key -" . $raktazodis . ", value - " . $ivertis . "<br>";
    }
    echo "<hr>";
}
echo "<hr>";

$pokemonas = ['name' => 'pikachoo', 'max_attack' => 2000, 'max_defence' => 2000, 'max_stamina' => 2000, 'photo' => 'uasdf.jpeg', 70, 34 => "skaicius", 16];
print_r($pokemonas);
?>


</body>
</html>