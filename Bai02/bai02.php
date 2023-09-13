<!DOCTYPE html>
<html>
<head>
    <title>Giải phương trình bậc 2</title>
    <meta charset="utf-8"/>
    <style>
        form {
            margin: 20px 0;
        }
        input[type=text] {
            width: 200px;
            padding: 5px;
            font-size: 16px;
        }
        input[type=submit] {
            padding: 5px 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
<?php
    # create a form to get input
    echo "<form method='post' action='bai02.php'>";
    echo "Hệ số A: <input type='text' name='a' value=''/><br/>";
    echo "+ <br/>";
    echo "Hệ số B: <input type='text' name='b' value=''/><br/>";
    echo "+ <br/>";
    echo "Hệ số C: <input type='text' name='c' value=''/><br/>";

    echo "<input type='submit' name='submit' value='Tính'/>";
    echo "</form>";

    # get input
    if (isset($_POST["submit"])) {
        $a = isset($_POST["a"]) ? $_POST["a"] : 0;
        $b = isset($_POST["b"]) ? $_POST["b"] : 0;
        $c = isset($_POST["c"]) ? $_POST["c"] : 0;

        # calculate
        $delta = $b * $b - 4 * $a * $c;
        $x1 = $x2 = 0;
        if ($delta < 0) {
            $x1 = $x2 = "Phương trình vô nghiệm";
        }
        else if ($delta == 0) {
            $x1 = $x2 = -$b / (2 * $a);
        }
        else {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
        }

        # display result, example: Phương trình: 2x<sup>2</sup> + 3x + 1 = 0 or Phương trình: 2x<sup>2</sup> - 3x + 1 = 0 if $b < 0, similar to $c
        echo "Phương trình: $a x<sup>2</sup> ";
        if ($b < 0) {
            echo "- " . abs($b) . "x ";
        }
        else {
            echo "+ " . $b . "x ";
        }
        if ($c < 0) {
            echo "- " . abs($c) . " = 0 <br/>";
        }
        else {
            echo "+ " . $c . " = 0 <br/>";
        }
        if ($delta < 0) {
            echo "Phương trình vô nghiệm <br/>";
        }
        else if ($delta == 0) {
            echo "Phương trình có nghiệm kép x<sub>1</sub> = x<sub>2</sub> = $x1 <br/>";
        }
        else {
            echo "Phương trình có 2 nghiệm phân biệt: <br/>";
            echo "x<sub>1</sub> = $x1 <br/>";
            echo "x<sub>2</sub> = $x2 <br/>";
        }
    }
?>
</body>
</html>
