<?php 
// Phần 2 tiếp tục với mảng và một số vòng lặp, bla bla ...

// Arrays - Mảng
    // tạo mảng như bình thường
    $sport1 = array("Footbal","Chess","Badminton");
    echo "<br> $sport1[0] ";   // output : Football
    echo "<br> $sport1[1] ";   // outout : Chess
    echo "<br> $sport1[2] ";   // output : Badminton 
    
    // tạo mảng bằng keyname --- khi tạo bằng keyname ta sẽ phải xuất phần tử bằng keyname chứ không thể dùng cách thông thường nữa
    $sport2 = array(
        "first" => "Basketball",
        "second" => "Volleyball",
        "third" => "Baseball"
    ) ;
    echo "<br> $sport2[first]"; // output : Basketball
    echo "<br> $sport2[second]"; // output : Volleyball
    echo "<br> $sport2[third]"; // output : Baseball

    // mảng lồng trong mảng hay mảng hai/nhiều chiều
    $game = [$sport1,$sport2];
        // để xuất ra môn thể thao đầu tiên trong mảng sport 1
            echo "<br>" . ($game[0][0]) ;

// Tiếp theo là đến các toán tử so sánh nó cũng gần giống như các ngôn ngữ khác như C, java

// Kế tiếp là các vòng lặp cũng tương tự như C và Java

// String một vài câu lệnh với string, có thể nghiên cứu GG sau

    $baby_name = "Shalon";
    // output sẽ là When Shalon was young
    echo <<<EOT
        When $baby_name was young  
    EOT;

    // output sẽ là When $baby_name was young
    echo <<<'EOT'
        When $baby_name was young
    EOT;


// Function - Hàm trong PHP
    
    // Here is some common numeric function
        // is_number()       : kiểm tra giá trị của biên có phải là số không
        // number_format()   : dùng để format lại 1 số . vd: 2509663 ==> 2,509,663
        // rand()            : dùng để random số
        // round()           : dùng để làm tròn số thập phân
        // ceil()            : dùng để làm tròn lên >< floor() : dùng để làm tròn xuống
        // các hàm toán học như sin() ; cos() ; tan() ; pi() ; sqrt().
    
    // Create a Function :
        /* function functionName(){
            code to be executed;
        } 
        */
        // Ví dụ về Hàm không trả về giá trị
        function sayHello($name){
            echo "<br>". "Hello $name" ;
        }
        sayHello("Phong"); // call the function ---- output : Hello Phong

        // Ví dụ về Hàm có trả về giá trị 
        function km_to_miles($km = 0){
            $mile_scale = 0.62;
            return $km * $mile_scale;
        }
        echo "<br>". km_to_miles(100); // call the function --- output : 62
?>