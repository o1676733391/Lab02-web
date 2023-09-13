<?php
    echo "<form action='bai05.php' method='post'>";
    echo "<input type='text' name='side1' placeholder='Nhập cạnh 1'/>";
    echo "<input type='text' name='side2' placeholder='Nhập cạnh 2'/>";
    echo "<input type='text' name='side3' placeholder='Nhập cạnh 3'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    $s1 = $_POST["side1"];
    $s2 = $_POST["side2"];
    $s3 = $_POST["side3"];

    if (!isset($s1) || !isset($s2) || !isset($s3) || !is_numeric($s1) || !is_numeric($s2) || !is_numeric($s3)) {
        echo "Vui lòng nhập 3 cạnh của tam giác";
    }
    else {
        if ($s1 + $s2 > $s3 && $s1 + $s3 > $s2 && $s2 + $s3 > $s1) {
            if ($s1 == $s2 && $s2 == $s3) {
                echo "Tam giác đều";
            }
            else if ($s1 == $s2 || $s1 == $s3 || $s2 == $s3) {
                echo "Tam giác cân";
            }
            else if ($s1 * $s1 == $s2 * $s2 + $s3 * $s3 || $s2 * $s2 == $s1 * $s1 + $s3 * $s3 || $s3 * $s3 == $s1 * $s1 + $s2 * $s2) {
                echo "Tam giác vuông";
            }
            else {
                echo "Tam giác thường";
            }
        }
        else {
            echo "3 cạnh không thể tạo thành tam giác";
        }
    }
?>