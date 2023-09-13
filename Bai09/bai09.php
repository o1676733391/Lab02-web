<?php
    # create form to get a and b then calculate GCD and LCM of a and b
    echo "<form action='bai09.php' method='post'>";
    echo "<input type='text' name='a' placeholder='Nhập a'/>";
    echo "<input type='text' name='b' placeholder='Nhập b'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get a and b
    $a = $_POST["a"];
    $b = $_POST["b"];

    if (!isset($a) || !isset($b) || !is_numeric($a) || !is_numeric($b)) {
        echo "Vui lòng nhập a và b";
    }
    else {
        $gcd = 1;
        $lcm = $a * $b;
        for ($i = 2; $i <= $a && $i <= $b; $i++) {
            if ($a % $i == 0 && $b % $i == 0) {
                $gcd = $i;
            }
        }
        while ($lcm % $a != 0 || $lcm % $b != 0) {
            $lcm++;
        }
        echo "Ước chung lớn nhất của $a và $b là $gcd<br/>";
        echo "Bội chung nhỏ nhất của $a và $b là $lcm";
    }
?>