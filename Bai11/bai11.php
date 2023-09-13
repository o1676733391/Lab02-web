<?php
    # create a form to check a number is perfect or not
    echo "<form action='bai11.php' method='post'>";
    echo "<input type='text' name='n' placeholder='Nhập n'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get n
    $n = $_POST["n"];

    if (!isset($n) || !is_numeric($n)) {
        echo "Vui lòng nhập n";
    }
    else {
        $sum = 0;
        for ($i = 1; $i < $n; $i++) {
            if ($n % $i == 0) {
                $sum += $i;
            }
        }
        if ($sum == $n) {
            echo "$n là số hoàn hảo";
        }
        else {
            echo "$n không là số hoàn hảo";
        }
    }
?>