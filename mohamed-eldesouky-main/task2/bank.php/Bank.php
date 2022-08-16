<!doctype html>
<html lang="en">

<head>
    <title>Calculate The Grade</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css  ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="main" style="border: 1px solid green; border-radius: 10px;"><br>
        <h1 class="mb-5"> Bank</h1>
        <form action="" method="post">

            <span> User Name :</span><input class="form-control w-50" type=text name="t1" require><br>
            <span>loan amount :</span><input class="form-control w-50" type=text name="t2" require><br>
            <span>loan year :</span><input class="form-control w-50" type=text name="t3" require><br>
            <br>

            <input type=submit name="percentage" value="submit" style="background-color:green ; color: white; border: none ; width: 265px; height: 40px;" class="rounded-pill mb-4">
            <?php
            if (isset($_POST['percentage'])) ////checking whether the input element is set or not
            {
                $a = $_POST['t1'];
                $a1 = $_POST['t2'];
                $a2 = $_POST['t3'];
                $loanRate = ($a1 * .10 * $a2);
                // $avg = $sum / 5;
                $loanAmount = ($a1 + $loanRate);
                $monthly = ($loanAmount / $a2 / 12);

                echo "<br>";
                echo "<font size=4><center>User Name is : " . $a . "</center><br>";
                echo "<font size=4><center>Insert rate is : " . $loanRate . "</center><br>";
                echo "<font size=4><center>Loan After rate is : " . $loanAmount . "</center><br>";
                echo "<font size=4><center>Monthly is : " . $monthly . "</center><br>";
            }
            ?>
        </form>
    </div><br>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>