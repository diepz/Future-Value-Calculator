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
<form method="post" action="Futurevalue.php">
<div><h1>Future Value Calculator</h1></div>
    <div>
        <span>Investment Amount:
            <input type="text" name="ia" placeholder="0"></span>
    </div>
    <div>
        <span>Yearly Interest Rate:
            <input type="text" name="rate" placeholder="0"></span>
    </div>
    <div>
        <span>Number Of Year:
            <input type="text" name="number" placeholder="0" style="margin: 1px 41px;"></span>
    </div>
    <div>
            <input type="submit" value="Calculate">
    </div>
</form>
</body>
</html>