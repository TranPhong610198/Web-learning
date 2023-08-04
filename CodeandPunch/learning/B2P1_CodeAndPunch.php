<?php
/* Buổi này học về 1 số syntax của php.PHP là scripting language >< compile language thường gặp là c, java, ...
 scripting thực hiện đến đâu chuyển sang mã máy đến đấy còn compile language sẽ chuyển hết sang mã máy rồi mới thực hiện
 */ 


//PHP Variable - Biến : không cần khai báo kiểu dữ liệu, php sẽ tự nhận, nếu muốn biết có thể sử gettype()
//PHP có phân biệt viết hoa và viết thường, quy tắc đặt tên biến cũng như các nnlt khác
    $a = 10;    // int
    $a =10.5;   // double
    $b = 5 ;
// trong trường hợp trên nó sẽ thay luôn kiểu dữ liệu 
    echo gettype($a); // output sẽ là double

    
//PHP Data type - Kiểu dữ liệu 
    // String: '' sẽ luôn nhận dang text 
        $message = "HelloWorld";
        $eror = 'Invalid password';
        echo '$a' ; // output : $a
        echo "$a" ; // output : 10.5

    // Interger hay Int 
        $count = 10 ;
        $negative_number = -7 ;
    
    // Double 
        $pi = 3.142 ;
        $temperature = -21.34 ;

    // Boolean
        $logged_in = true ;
        $is_admin = false ;
    
    // Null
        $user_id = null ;
        $user_role;
    
    // Object; Array
    
// Operator 
    // dấu "." dùng để nối các biến 
        echo $a . $b ;       // output = 10.55
        echo $a . $message ; // output = 10.5HelloWorld


        
?>
