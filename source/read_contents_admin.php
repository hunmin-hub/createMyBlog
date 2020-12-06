<?php
    require('db_con.php');
    $con=db_connect();
    $sql = "SELECT * FROM `blog_posting` order by boardnum DESC";
    $result=mysqli_query($con,$sql);
    $default_num=0;
    while($data = mysqli_fetch_array($result)) {
        if($default_num<$data["boardnum"]) {
            $default_num=$data["boardnum"];
        }
?>
    <div class="contents_box">
        <div class="title_line" id="<?php echo"$data[boardnum]"?>" onclick=title_click();>
            <?php echo "* $data[boardtitle]" ?>
            <span style="float:right"><a href="../source/update_view_contents.php?upname=<?php echo"$data[boardnum]"?>">[수정]</a>
                <a href="../source/delete_contents.php?delname=<?php echo"$data[boardnum]"?>">[삭제]</a></span>
        </div>
        <div class="post_line" id="board_contents<?php echo"$data[boardnum]"?>" style="display:None">
            <?php echo nl2br("$data[boardcontents]") ?>
        </div>
    </div>
<?php } ?>

<script>
    document.getElementById("board_contents<?php echo"$default_num"?>").style.display='block';
    document.getElementById("<?php echo"$default_num"?>").style.background='gray';
</script>
