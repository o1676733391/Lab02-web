<?php
    # create a form to get the radius
    echo "<form action='circle.php' method='post'>";
    echo "<input type='text' name='radius' placeholder='Nhập bán kính'/>";
    echo "<input type='submit' value='Enter'/>";
    echo "</form>";
    # get the radius
    $r = $_POST["radius"];
    # define pi
    define("pi",3.14);

    $area = pi * $r * $r;
    $perimeter = 2 * pi * $r;

    if (!isset($r) || !is_numeric($r)) {
        echo "Vui lòng nhập bán kính";
    }
    else {
        echo "Diện tích hình tròn là: " . $area . "<br/>";
        echo "Chu vi hình tròn là: " . $perimeter;
    }
?>