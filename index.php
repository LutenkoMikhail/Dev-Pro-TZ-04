<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$initialValuesArrayOne = [0, -1, -2, 3, 4, -5, 6, -7, 88, 9, -10];
$initialValuesArrayTwo = [0, 1, -2, 3, 4, -5, 6, -7, 77, 9, -10];
$resultArray = [];
$countNumbersArray = 0;
$iterator = 0;


echo "<h1>" . "Dev-Pro.net" . "</h1>";
echo "<h3>" . "ТЗ.№ 4  " . "</h3>";
echo "<h3>" . "Функция нахождения в массивах все пересекающие значения. " . "</h3>";

/**
 * The function of finding in the arrays is all crossing values.
 * @param array $arrayOne
 * @param array $arrayTwo
 * @return arrayIntersect
 */
function arrayIntersect(array $arrayOne, array $arrayTwo): array
{
    $resultArray = [];
    $iteratorOne = 0;
    $iteratorTwo = 0;
    $countArrayOne = 0;
    $countArrayTwo = 0;
    $readNumberOne = 0;
    $readNumberTwo = 0;

    $countArrayOne = count($arrayOne);
    $countArrayTwo = count($arrayTwo);

    if ($countArrayOne !== 0 || $countArrayTwo !== 0) {
        while ($iteratorOne < $countArrayOne) {
            $readNumberOne = $arrayOne[$iteratorOne];
            $iteratorTwo = 0;
            while ($iteratorTwo < $countArrayTwo) {
                $readNumberTwo = $arrayTwo[$iteratorTwo];
                if ($readNumberOne === $readNumberTwo) {
                    $resultArray[] = $readNumberOne;
                }
                $iteratorTwo++;
            }
            $iteratorOne++;
        }
    }
    return $resultArray;
}


$resultArray = arrayIntersect($initialValuesArrayOne, $initialValuesArrayTwo);
$countNumbersArray = count($resultArray);

if ($countNumbersArray === 0) {
    die("Пересекающиеся значения в 2-х массивах не найдены!");
}
echo "В исходных массивах было найдено {$countNumbersArray} пересекающихся значений :" . "<br>";
while ($iterator < $countNumbersArray) {
    echo $resultArray[$iterator] . "<br>";
    $iterator++;
}




