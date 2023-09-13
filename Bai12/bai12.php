<?php
    $str = "Trung tam tin hoc";
    echo "Chuoi ban dau: $str<br/>";
    echo "Sau khi tach chuoi thanh mang: <br/>";
    $arr = explode(" ", $str);
    foreach ($arr as $value) {
        echo "$value<br/>";
    }
    echo "Sau khi noi mang thanh chuoi: <br/>";
    $str = implode(" ", $arr);
    echo $str . "<br/>";

    echo "Tim kiem chuoi 'tin' trong chuoi ban dau va thay the thanh 'tin tin', neu khong thong bao khong tim thay chuoi: <br/> ";
    if (strpos($str, "tin") !== false) {
        $str = str_replace("tin", "tin tin", $str);
        echo $str . "<br/>";
    }
    else {
        echo "Khong tim thay chuoi <br/>";
    }

    echo "Chuyen chuoi ban dau thanh chuoi viet hoa: <br/>";
    $str = strtoupper($str);
    echo $str . "<br/>";   
    echo "Chuyen chuoi ban dau thanh chuoi tieu de: <br/>";
    $str = ucwords($str);
    echo $str . "<br/>";

    echo "Ma hoa chuoi ban dau thanh 32 ky tu: ";
    $str = md5($str);
    echo $str;
?>