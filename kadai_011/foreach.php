<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>

<body>
    <P>
        <?php
        $vegitable_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
        foreach ($vegitable_data as $key => $value){
            echo "{$key}:{$value}<br>";
        }
        ?>
    </P>
    <p>
        <?php
        $personal_data = ['id ' => 1, '名前' => '侍太郎', '年齢' => 30];
        foreach ($personal_data as $key => $value) {
            echo "{$key}:{$value}<br>";
        }
        ?>
    </p>
</body>

</html>