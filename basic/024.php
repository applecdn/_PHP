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
        $list = [234,546,123,765,435,234];
        echo max($list);
        echo "<br>";
        echo min($list);
        echo "<br>";
        sort($list);
        print_r($list);
    ?>
</body>
</html>