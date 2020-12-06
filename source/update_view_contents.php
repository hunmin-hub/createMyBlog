<?php
    require('db_con.php');
    $con=db_connect();
    $update_num=$_GET['upname'];
    $sql = "SELECT * FROM `blog_posting` WHERE boardnum='$update_num'";
    $result=mysqli_query($con,$sql);
    $data = mysqli_fetch_array($result);
    mysqli_close($con);
?>
<script type="text/javascript" src="/static/js/ckeditor/ckeditor.js"></script>
<link rel="stylesheet" type="text/css" href="/static/main.css?after">

<div class="write_contents_box">
    <form id="write_from" method="POST" action="./update_contents.php">
        <div class="write_title_line">
            <input type="hidden" name="board_num" value="<?php echo"$update_num"?>"></input>
            <input type="text" name="write_title" value="<?php echo"$data[boardtitle]"?>"></input>
        </div>
        <div class="write_contents_line">
            <textarea class="write_contents_line" style="width:100%" name="write_content"><?php echo"$data[boardcontents]"?></textarea>
            <script>
                CKEDITOR.replace('write_content',{width:'100%'});
            </script>
        </div>
        <input value="수정" type="submit">
    </form>
</div>