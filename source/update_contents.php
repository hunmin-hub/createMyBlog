<?php
    require('db_con.php');
    $con=db_connect();

    $content_title=$_POST["write_title"];
    $content_body=$_POST["write_content"];
    $content_num=$_POST["board_num"];
    if($content_body==NULL || $content_title==NULL) {
        echo "<script>
            alert('빈 제목이나 빈 내용으로 수정할 수 없습니다');
            location.href='../source/update_view_contents.php?upname=$content_num';
        </script>";   
    }
    else {
        $sql = "UPDATE `blog_posting` SET boardtitle='$content_title', boardcontents='$content_body' WHERE boardnum=$content_num";
        mysqli_query($con,$sql);
        echo "<script>
            alert('수정완료');
            location.href='../index.php';
        </script>";  
    }
    mysqli_close($con);
?>