<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>My name is Prabin Joshi</p>

    <?php
        echo "Hello World" . "<br>";
        $a = 5;
        $b = 10;
        $c = $a + $b;
        echo "The sum is" . $c . "<br>";
        echo "The sum is {$c}s" . "<br>";

        $d = 10;
        $e = 10;

        echo $d == $e ? "True" : "False"; 

        include 'views/index.view.php';
    ?>
</body>
</html>

