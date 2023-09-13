<?php
    # create a form to get n to calculate n! 
    echo "<form action='bai07.php' method='post'>";
    echo "<input type='text' name='n' placeholder='Nhập n'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get n
    $n = $_POST["n"];

    if (!isset($n) || !is_numeric($n)) {
        echo "Vui lòng nhập n";
    }
    else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        echo "$n! = $factorial";
    }
?>