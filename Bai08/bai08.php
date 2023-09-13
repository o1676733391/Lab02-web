<?php
    #create form to get n to calculate sum of squares of odd numbers from 1 to n
    echo "<form action='bai08.php' method='post'>";
    echo "<input type='text' name='n' placeholder='Nhập n'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    #get n
    $n = $_POST["n"];

    if (!isset($n) || !is_numeric($n)) {
        echo "Vui lòng nhập n";
    }
    else {
        $sum = 0;
        for ($i = 1; $i <= $n; $i++) {
            if ($i % 2 != 0) {
                $sum += $i * $i;
            }
        }
        echo "Tổng bình phương các số lẻ từ 1 đến $n là $sum";
    }
?>