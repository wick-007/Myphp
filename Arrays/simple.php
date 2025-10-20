<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="./simple.php" method="post">
        <input type="text" id="name" name="name"><br><br>
        <input type="number" id="test1" name="test1">
        <input type="number" id="test2" name="test2">
        <input type="number" id="test3" name="test3"><br><br>
        <button>SUBMIT</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = htmlspecialchars($_POST["name"]);
        $test1 = filter_input(INPUT_POST, "test1", FILTER_SANITIZE_NUMBER_FLOAT);
        $test2 = filter_input(INPUT_POST, "test2", FILTER_SANITIZE_NUMBER_FLOAT);
        $test3 = filter_input(INPUT_POST, "test3", FILTER_SANITIZE_NUMBER_FLOAT);
        $grade = "";
        $averageScore = 0;
        $error = false;

        if (empty($test1) || empty($test2) || empty($test3)) {
            echo "Please fill in all the fields correctly";
            $error = true;
        }
        if (
            $test1 > 100 || $test1 < 0 ||
            $test2 > 100 || $test2 < 0 ||
            $test3 > 100 || $test3 < 0
        ) {
            echo "Invalid Score";
            $error = true;
        } else {
            $averageScore = ($test1 + $test2 + $test3) / 3;
        }
        if (!$error) {
            if ($averageScore >= 90 && $averageScore <= 100) {
                $grade = "A";
            } else if ($averageScore >= 80 && $averageScore <= 89) {
                $grade = "B";
            } else if ($averageScore >= 70 && $averageScore <= 79) {
                $grade = "C";
            } else if ($averageScore >= 60 && $averageScore <= 69) {
                $grade = "D";
            } else if ($averageScore >= 0 && $averageScore <= 59) {
                $grade = "F";
            }
        }


        echo "Student:" . $name . "<br>" .
            "Average:" . $averageScore . "<br>" .
            "Grade:" . $grade;
    }
    ?>
</body>

</html>