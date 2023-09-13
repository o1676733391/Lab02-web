<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="info.php" method="post">
        <div  style="border:1px solid black;width:550px;margin:auto;">
         <table width="500" >
            <td align="center" style="color:blue" colspan="2"><h2>ĐĂNG KÍ THÔNG TIN CÁ NHÂN</h2></td>
           <tr>
            <td style="color:blue"><h4>THÔNG TIN CÁ NHÂN</h4></td>
            <td>
                
            </td>
           </tr>
           <tr>
            <td>Họ và Tên</td>
            <td><input type="text" name="hoten"></td>
           </tr>
           <tr>
            <td>Giới tính</td>
            <td>
                <select name="gioitinh" id="">
                    <option value="1">Nữ</option>
                    <option value="2">Nam</option>
                    <option value="0">Khác</option>
                </select>
            </td>
           </tr>
           <tr>
            <td>Địa chỉ</td>
            <td>
                <input type="text" name="diachi">
            </td>
           </tr>
           <tr>
            <td>Ngày sinh</td>
            <td>
                <input type="date" name="ngaysinh" id="">
            </td>
           </tr>
           <tr>
            <td>Email</td>
            <td> 
                <input type="email" name="email" id="">
            </td>
           </tr>
           <tr>
            <td>Tịnh trạng hôn nhân</td>
            <td>
                <input type="radio" name="honnhan" value="Độc nhân" >Độc thân
                <input type="radio" name="honnhan" value="Độc nhân">Đã kết hôn
               
                
            </td>
           </tr>
           <tr>
            <td>Nghề nghiệp</td>
            <td>
                <select name="nghenghiep" id="">
                    <option value="Kỉ sư công nghệ">Kỉ sư công nghệ</option>
                    <option value="Trí tuệ nhân tạo">Trí tuệ nhân tạo</option>
                </select>
            </td>
           </tr>
           <tr>
            <td>Sở thích</td>
            <td>
                <input type="checkbox" name="sothich[]" value="Đọc sách">Đọc sách
                <input type="checkbox" name="sothich[]" value="Đá banh">Đá banh
                <input type="checkbox" name="sothich[]" value="Lập trình">Lập trình
                <input type="checkbox" name="sothich[]" value="Game">Game
            </td>
           </tr>
           <tr>
            <td>Ghi chú</td>
            <td>
                <textarea name="ghichu" id="" cols="30" rows="10"></textarea>
            </td>
           </tr>
           <tr>
                <input type="hidden" name="action" value="dangky">
                <td align="right"><input type="submit" name="btnDangKy" value="Đăng Ký"></td>
                <td><input type="reset" name="btnNhapLai" value="Nhập lại">
           </tr>
            </table>
         </div>
    </form>
    
    
</body>
</html>