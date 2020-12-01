<?php
    require('db_con.php');
    $con=db_connect();

    $content_title=$_POST["write_title"];
    $content_body=$_POST["write_content"];

    $sql = "INSERT INTO `blog_posting` (boardtitle, boardcontents) VALUES ('$content_title', '$content_body')";
    mysqli_query($con,$sql);
    echo "<script>
            location.href='../index.php';
        </script>";   
?>
