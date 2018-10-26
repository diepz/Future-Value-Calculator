<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        form {
            width: 500px;
            height: 200px;
            border: 2px solid blue;
            margin: 0 auto;
        }
        input {
            margin: 1px 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<?php
$rates = "%";
$usd = "$";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ia = $_POST["ia"];
    $rate = $_POST["rate"];
    $number = $_POST["number"];

    $futurevalue = $ia * (1 + ($rate/100))**$number;

}
?>
<form method="post">
    <div><h1>Future Value Calculator</h1></div>
    <div>
        <span>Investment Amount:
            <?php
            echo $ia;
            ?>
        </span>
    </div>
    <div>
        <span>Yearly Interest Rate:
            <?php
            echo $rate;
            ?>
        </span>
    </div>
    <div>
        <span>Number Of Year:
            <?php
            echo $number;
            ?>
        </span>
    </div>
    <div>
    <span>
        Future Value:
        <?php
        echo $futurevalue;
        ?>
        </span>
    </div>
</form>
</body>
</html>