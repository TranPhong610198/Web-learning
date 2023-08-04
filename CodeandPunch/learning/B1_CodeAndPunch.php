<?php
// DEMO THỬ TẠO 1 WEB LOGIN
    // khai báo session
    session_start();
    // khai báo utf -8 để hiển thị Tiếng Việt
    header('Content_Type:text/html;Charset=UTF-8');

    // xử lý đăng nhập 
    // POST và GET cần có "_"
    if (isset($_POST["dangnhap"])){
        //kết nối DB
        include('connect.php');

        //lấy dữ liệu nhập vào
        $username = $_POST['username'];
        $password = $_POST['password'];

        //chưa có db nên tạm thời phần này chưa làm được
        // chuyển qua buổi 2
        
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatiable" content="IE=edge">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <title>Just For Fun</title>
    </head>
    <body>
        <form action="" method="POST">
            <!-- trong phần username và password cái name xóa đi cũng được
             chưa hiểu tạo sao lại có thể xóa đi được -->

            username : <br><input type="text" name="username" /> <br>
            password : <br><input type="password" name="password" /> <br>
            
            <!-- class là dùng cho css có thể xóa đi cũng không ảnh hưởng -->
            <input type="submit" class="button" name="dangnhap" value="Đăng nhập" />

        </form>
    </body>
</html>