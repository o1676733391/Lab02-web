<?php
    # create a form to get the season
    echo "<form action='bai04.php' method='post'>";
    echo "<input type='text' name='season' placeholder='Nhập mùa'/>";
    echo "<input type='submit' value='Xác định'/>";
    echo "</form>";
    # get the season
    $ss = $_POST["season"];
    switch ($ss) {
        case !isset($ss):
            echo "Vui lòng nhập mùa";
            break;
         case "x":
             echo "Xuân";
             break;
         case "h":
             echo "Hạ";
             break;
         case "t":
             echo "Thu";
             break;
         case "d":
             echo "Đông";
             break;
         default:
             echo "Không xác định";
             break;
    }    
?>