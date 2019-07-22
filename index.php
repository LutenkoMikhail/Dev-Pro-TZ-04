<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$initialValuesArrayOne = [0, -1, -2, 3, 4, -5, 6, -7, 88, 9, -10, 22];
$initialValuesArrayTwo = [0, 1, 2, 3, 4, -5, 6, -7, 77, 9, 10, 11, 12, 23];
$resultArray = [];
$countNumbersArray = 0;


echo "<h1> Dev-Pro.net</h1>";
echo "<h3>ТЗ.№ 4  </h3>";
echo "<h3>Функция нахождения в массивах все пересекающие значения. </h3>";

/**
 * The function of finding in the arrays is all crossing values.
 * @param array $arrayOne
 * @param array $arrayTwo
 * @return arrayIntersect
 */
function arrayIntersect(array $arrayOne, array $arrayTwo): array
{
    $resultArray = [];
    if (count($arrayOne) !== 0 && count($arrayTwo) !== 0) {
        foreach ($arrayOne as $elementArrayOne) {
            foreach ($arrayTwo as $elementArrayTwo) {
                if ($elementArrayOne === $elementArrayTwo) {
                    $resultArray[] = $elementArrayOne;
                }
            }
        }
    }
    return $resultArray;
}


$resultArray = arrayIntersect($initialValuesArrayOne, $initialValuesArrayTwo);
$countNumbersArray = count($resultArray);

if ($countNumbersArray === 0) {
    die("Пересекающиеся значения в 2-х массивах не найдены!");
}

echo "В исходных массивах было найдено {$countNumbersArray} пересекающихся значений :<br>";
foreach ($resultArray as $elemensArray) {
    echo $elemensArray . "<br>";
}




