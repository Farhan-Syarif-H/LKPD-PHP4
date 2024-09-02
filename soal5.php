<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .color{
            color:black;
            background-color:wheat;
            border-radius:10px;
        }
    </style>
</body>
</html>
<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98,];

// Menghitung bilangan yang ada di kedua array
$intersection = array_intersect($bil1, $bil2);

// Menghitung bilangan yang tidak ada di kedua array
$notInBoth = array_diff($bil1, $intersection);

// Mengubah array hasil ke string dengan format yang diinginkan
$intersectionString = implode(',', $intersection);
$notInBothString = implode(',', $notInBoth);

echo "<span class='color'>Bilangan yg ada di kedua variabel:</span>\n";
echo $intersectionString . "\n"."<br>";

echo "<span class='color'> Bilangan yg tidak ada di kedua variabel:</span>\n";
echo $notInBothString . "\n";
?>
