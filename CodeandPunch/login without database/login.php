<?php
            //  lấy dữ liệu vào để kiểm tra
            if(isset($_POST['login'])) // kiểm tra xem đã nhấn nút login hay chưa
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
                if ($username == 'admin123' && $password == 'admin123' ){
                    echo "<br>" . "successful";
                    header("Location: test1.html"); // Khi này web sẽ chuyển đến file test.php
                }
                else {
                    header("Location: loginagain.html");
                    // echo "<br>" . "Wrong username or Password";
            }
        }
            
    ?>   