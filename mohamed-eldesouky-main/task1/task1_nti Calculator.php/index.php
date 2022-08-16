</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>calculator program in PHP</title>
</head>
<?php
$FirstNumber = $_POST['FirstNumber'];
$SecondNumber = $_POST['SecondNumber'];
$operator = $_POST['operator'];
$CalculatorResult = '';
if (is_numeric($FirstNumber) && is_numeric($SecondNumber)) {
    switch ($operator) {
        case "+":
            $CalculatorResult = $FirstNumber + $SecondNumber;
            break;
        case "-":
            $CalculatorResult = $FirstNumber - $SecondNumber;
            break;
        case "*":
            $CalculatorResult = $FirstNumber * $SecondNumber;
            break;
        case "/":
            $CalculatorResult = $FirstNumber / $SecondNumber;
            break;
        case "%":
            $CalculatorResult = $FirstNumber % $SecondNumber;
    }
}
?>

<body>
    <div style="border: 1px solid gray; border-radius: 10px;" class="w-50">
        <h1 style="color: green;">PHP - Calculator &#x1F60E;</h1>
        <form action="" method="post">
            <p>
                <b>First_Number</b> <br> <br><input class="form-control w-50" type="number" name="FirstNumber" id="FirstNumber" required="required" value="<?php echo $FirstNumber; ?>" />
            </p>
            <p>
                <b>Second_Number</b> <br><br><input class="form-control w-50" type="number" name="SecondNumber" id="SecondNumber" required="required" value="<?php echo $SecondNumber; ?>" />
            </p>
            <p>
                <b>Calculator_Result</b><br> <br> <input class="form-control w-50" style="font: 30px bolder;" readonly="readonly" name="CalculatorResult" value="<?php echo $CalculatorResult; ?>">
            </p>
            <input style="background-color: green; border:none ;color:white ; font: 30px bold; " class="rounded-pill p-4 m-1" type="submit" name="operator" value="+" />
            <input style="background-color: green; border:none ;color:white ; font: 30px bold; " class="rounded-pill p-4 m-1" type="submit" name="operator" value="-" />
            <input style="background-color: green; border:none ;color:white ; font: 30px bold; " class="rounded-pill p-4 m-1" type="submit" name="operator" value="*" />
            <input style="background-color: green; border:none ;color:white ; font: 30px bold; " class="rounded-pill p-4 m-1" type="submit" name="operator" value="/" />
            <input style="background-color: green; border:none ;color:white ; font: 30px bold; " class="rounded-pill p-4 m-1" type="submit" name="operator" value="%" />
        </form>
    </div><br><br>

    <p> &#128170; Muhammed El-Desouky &#128170; &copy; </p>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>