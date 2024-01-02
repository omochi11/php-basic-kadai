<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎</title>
</head>
<body>
<?php
$numbers = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

$average = array_sum($numbers) / count($numbers);

echo $average;
?>
</body>
</html>