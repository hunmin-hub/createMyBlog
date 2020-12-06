<?php
    require('db_con.php');
    $con=db_connect();

    $content_title=$_POST["write_title"];
    $content_body=$_POST["write_content"];
    if($content_title==NULL || $content_body==NULL) {
        echo "<script>alert('빈 제목이나 빈 내용을 등록할 수 없습니다.');</script>";
    }
    else {
        $sql = "INSERT INTO `blog_posting` (boardtitle, boardcontents) VALUES ('$content_title', '$content_body')";
        mysqli_query($con,$sql);
    }
    echo "<script>
            location.href='../index.php';
        </script>";   
?>
