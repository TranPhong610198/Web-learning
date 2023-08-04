<!-- Tương tác và làm viêc với file -->
<!-- file_exists('tên file') : check the existion ò the file in the folder -->
<!-- fopen($file_name, $mode, $use_include_path, $context) : use to open file  
    file_name : name of the file
    mode:   r : read only
            r+: read and write
            w : write only - if file don't exists attemp to create it
            w+: same with w but can read 
            a : same with w but continue write in the end of file
            a+: same with a but can read -->
<?php
if (file_exists('login.php')){
    echo "File Found !!!";
}
else
    echo "file not found";
?>