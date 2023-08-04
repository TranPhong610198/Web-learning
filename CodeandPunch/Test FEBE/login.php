 <?php
 //  lấy dữ liệu vào để kiểm tra
 if(isset($_POST['login'])) // kiểm tra xem đã nhấn nút login hay chưa
 {
     $username = $_POST["username"];
     $password = $_POST["password"];
     if ($username == 'admin' && $password == 'admin' ){
         echo "<br>" . "successful";
        //  header("Location: test.php"); // Khi này web sẽ chuyển đến file test.php
     }
     else {
         header("Location: loginagain.html");
 }
 }
 
?>   
