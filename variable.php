<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practise</title>
</head>
<body>
    <h1>Variable :</h1>
    <h2>variable numbers :</h2>
    <?php
        $one = 1;
        $two = 2;
        $sum = $one + $two;

        echo 'Sum is '. $sum;
    ?>
    <hr>
<h2>variable Concatenate :</h2>
    <?php
        $name = 'John';
        $age = 25;

        echo $name . 'age is ' . $age . ' Years old';
    ?>
    <hr>
</body>
</html>