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
        <h1>Calculate The Grade &#x1F60E;</h1>
        <form action="" method="post">

            <span> Student Name :</span><input class="form-control w-50" type=text name="t1" require><br>
            <span>Physics :</span><input class="form-control w-50" type=text name="t2" require><br>
            <span>Chemistry :</span><input class="form-control w-50" type=text name="t3" require><br>
            <span>Biology :</span><input class="form-control w-50" type=text name="t4" require><br>
            <span>Mathematic :</span><input class="form-control w-50" type=text name="t5" require><br>
            <span>Computer :</span><input class="form-control w-50" type=text name="t6" require><br>

            <br>

            <input type=submit name="s" value="Result" style="background-color:green ; color: white; border: none ; width: 100px; height: 40px;" class="rounded-pill">
            <?php
            if (isset($_POST['s'])) ////checking whether the input element is set or not
            {
                $a = $_POST['t1'];
                $a1 = $_POST['t2'];
                $a2 = $_POST['t3'];
                $a3 = $_POST['t4'];
                $a4 = $_POST['t5'];
                $a5 = $_POST['t6'];
                $sum = (($a1 + $a2 + $a3 + $a4 + $a5) / 500) * 100; //total percentage
                // $avg = $sum / 5;
                if ($sum >= 0 && $sum <= 50)
                    $grade = "Fail";
                if ($sum > 50 && $sum <= 70)
                    $grade = "Bad";
                if ($sum > 70 && $sum <= 80)
                    $grade = "Good";
                if ($sum > 80 && $sum <= 90)
                    $grade = "Very_good";
                if ($sum > 90)
                    $grade = "Excelent";
                echo "<br>";
                echo "<font size=4><center>Student is: " . $a . "</center><br>";
                echo "<font size=4><center>Total marks: " . $sum . "%</center><br>";
                echo "<font size=4><center>Grade is: " . $grade . "</center>";
            }
            ?>
        </form>
    </div><br>
    <p> &#128170; Muhammed El-Desouky &#128170; &copy; </p>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>