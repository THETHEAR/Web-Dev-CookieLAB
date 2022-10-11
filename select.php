<html>
    <body>
        <?php
            $language = $_GET["language"];
            if(empty( $language)){
                setcookie("lang",$language,time()+3600*24);
            }
            else{
                setcookie("lang",$language,time()+3600*24);
            }
        ?>
    </body>
</html>