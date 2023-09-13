<?php
    # create a form to get month and year
    echo "<form action='bai06.php' method='post'>";
    echo "<input type='text' name='month' placeholder='Nhập tháng'/>";
    echo "<input type='text' name='year' placeholder='Nhập năm'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get month and year
    $mm = $_POST["month"];
    $yy = $_POST["year"];

    if (!isset($mm) || !isset($yy) || !is_numeric($mm) || !is_numeric($yy)) {
        echo "Vui lòng nhập tháng và năm";
    }
    else {
        switch ($mm) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12: 
                echo "Tháng $mm năm $yy có 31 ngày";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "Tháng $mm năm $yy có 30 ngày";
                break;
            case 2:
                if ($yy % 4 == 0 && $yy % 100 != 0 || $yy % 400 == 0) {
                    echo "Tháng $mm năm $yy có 29 ngày";
                }
                else {
                    echo "Tháng $mm năm $yy có 28 ngày";
                }
                break;
            default:
                echo "Không xác định";
                break;
        }
    }
?>