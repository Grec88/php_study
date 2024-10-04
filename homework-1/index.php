<?php
// Заданные массивы
$array1 = [1, 2, 3, 4, 5];
$array2 = [4, 5, 6, 7, 8];

// Пересечение массивов
$intersection = array_intersect($array1, $array2);

// Объединение массивов
$union = array_unique(array_merge($array1, $array2));

// Функция для красивого вывода массива в HTML
function displayArray($array, $title) {
    echo "<h2>$title</h2>";
    echo "<ul>";
    foreach ($array as $item) {
        echo "<li>$item</li>";
    }
    echo "</ul>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Array Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            background: #f4f4f4;
            margin: 5px 0;
            padding: 10px;
            border: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <h1>Array Operations</h1>
    <?php
    displayArray($array1, "Array 1");
    displayArray($array2, "Array 2");
    displayArray($intersection, "Intersection");
    displayArray($union, "Union");
    ?>
</body>
</html>

