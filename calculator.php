<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Calculator</h1>
    <form action="" method="get">
        <div>
            <input type="number" name="nummer1">
            <label for="">First Number</label>
        </div>

        <div>
            <input type="number" name="nummer2" style="margin-top: 20px">
            <label for="">Second Number</label>
        </div>
        <?php
        $antwoord;
        $num1 = $_GET["nummer1"];
        $num2 = $_GET["nummer2"] ?? null;


        switch ($_GET["operation"]) {
            case "Add":
                $antwoord = $num1 + $num2;
                break;
            case "Subtract":
                $antwoord = $num1 - $num2;
                break;
            case "Multiply":
                $antwoord = $num1 * $num2;
                break;
            case "Divide":
                $antwoord = $num1 / $num2;
                break;
            case "Modulo":
                $antwoord = $num1 * $num2;
                break;
        }
        ?>
        <?php echo $antwoord; ?>

        <input type="submit" value="Add" style="margin-top: 20px" name="operation">
        <input type="submit" value="Subtract" name="operation">
        <input type="submit" value="Multiply" name="operation">
        <input type="submit" value="Divide" name="operation">
        <input type="submit" value="Modulo" name="operation">

    </form>

</body>

</html>