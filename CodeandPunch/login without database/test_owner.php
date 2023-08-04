<?php
    
    if ($_GET["owner"] == 'admin'){
        header("Location: owner.html");
    }
    else {
        header("Location: test2.html");
    }

?>