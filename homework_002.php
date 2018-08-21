<pre>
<?php
/**
 * Created by Evgenii Yakovlev
 * From: homework #1 for loftshool
 * Date: 18.08.2018
 */

/**
 * dz - 1.1
 */
$name = 'Евгений';
$age = 30;

echo 'Меня зовут:' . ' ' . $name . PHP_EOL;
echo 'Мой возвраст' . ' ' . $age . PHP_EOL;
echo "\"!|\\/'\"\\" . PHP_EOL;
echo PHP_EOL;

/**
 * dz - 1.2
 */
const PIC = 80;
const PIC_FL = 23;
const PIC_PENCIL = 40;
const PIC_OTHERS = PIC - (PIC_FL + PIC_PENCIL);

echo 'Рисунков сделаных красками:' . ' ' . PIC_OTHERS . PHP_EOL;
echo PHP_EOL;

/**
 * dz - 1.3
 */

$age = 70;
echo 'Ваш возвраст:' . ' ' . $age . PHP_EOL;
if ($age >= 18 and $age <= 65) {
    echo 'Вам еще работать и работать' . PHP_EOL;
} elseif ($age > 65) {
    echo 'Вам пора на пенсию' . PHP_EOL;
} elseif ($age >= 1 and $age <= 17) {
    echo 'Вам ещё рано работать' . PHP_EOL;
} else {
    echo 'Неизвестный возвраст' . PHP_EOL;
}
echo PHP_EOL;

/**
 * dz - 1.4
 */

$day = rand(0, 10);
echo 'День недели:' . ' ' . $day . PHP_EOL;

switch ($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Это рабочий день' . PHP_EOL;
        break;
    case 6:
    case 7:
        echo 'Это выходной день' . PHP_EOL;
        break;
    default:
        echo 'Неизвестный день' . PHP_EOL;
        break;
}
echo PHP_EOL;

/**
 * dz - 1.5
 */

$bmw ['model'] = 'X5';
$bmw ['speed'] = 120;
$bmw ['doors'] = 5;
$bmw ['years'] = '2015';

$toyota ['model'] = 'Camry';
$toyota ['speed'] = 130;
$toyota ['doors'] = 4;
$toyota ['years'] = '2014';

$opel ['model'] = 'Astra';
$opel ['speed'] = 110;
$opel ['doors'] = 4;
$opel ['years'] = '2014';

$result['bmw'] = $bmw;
$result['toyota'] = $toyota;
$result['opel'] = $opel;

foreach ($result as $key => $value) {
    echo 'Car' . ' ' . $key . ' ';
    echo PHP_EOL;
    foreach ($value as $item) {
        echo $item . ' ';
    }
    echo PHP_EOL;
    echo PHP_EOL;
}

/**
 * dz - 1.6
 */

$rows = 10; // количество строк, tr
$cols = 10; // количество столбцов, td

echo '<table style border="2">';
for ($tr = 1; $tr <= $rows; $tr++) {
    echo '<tr style="text-align: center">';
    for ($td = 1; $td <= $cols; $td++) {
        if ($tr % 2 == 0 and $td % 2 == 0) {
            echo '<td>' . '(' . $tr * $td . ')' . '</td>';
        } elseif ($tr % 2 != 0 and $td % 2 != 0) {
            echo '<td>' . '[' . $tr * $td . ']' . '</td>';
        } else {
            echo '<td>' . $tr * $td . '</td>';
        }
    }
}

echo '</table>';

echo PHP_EOL;

