<?php
    # create a form to check if a number is prime or not
    echo "<form action='bai10.php' method='post'>";
    echo "<input type='text' name='n' placeholder='Nhập n'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get n
    $n = $_POST["n"];

    if (!isset($n) || !is_numeric($n)) {
        echo "Vui lòng nhập n";
    }
    else {
        $isPrime = true;
        for ($i = 2; $i <= sqrt($n); $i++) {
            if ($n % $i == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo "$n là số nguyên tố";
        }
        else {
            echo "$n không là số nguyên tố";
        }
    }
?>