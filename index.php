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

if (rand(0, 5) > 2) {
    pirmoji();
}

function pirmoji()
{
    echo "<h1>Kebabas!<h1>";
}

for ($i = 0; $i < 10; $i++) {
    echo "<h1>keletas eiluciu " . $i . "<h1>";
}
$arnoKintamasis = 17;

echo $arnoKintamasis;

$arr = [1, 5, 8];
print_r($arr);
var_dump($arr);

echo ' <script>
        console.log(' . $arnoKintamasis . ');
    </script>';
?>

</body>
</html>