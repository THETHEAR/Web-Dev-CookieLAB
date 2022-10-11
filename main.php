<html>
    <body>
        <?php
            $check = $_COOKIE["lang"];
            if($check == "en"){
                echo "Welcome ";
            }
            else if($check == "th"){
                echo "ยินดีต้อนรับ";
            }
        ?>
    </body>
</html>