<?php
    require('db_con.php');
    $con=db_connect();
    $sql = "SELECT * FROM `blog_posting` order by boardnum DESC";
    $result=mysqli_query($con,$sql);
    $count=0;
    while($data = mysqli_fetch_array($result)) {
        $count=$count+1;
?>
    <div class="contents_box">
        <div class="title_line" id="<?php echo"$count"?>" onclick=title_click();>
            <?php echo "* $data[boardtitle]" ?>
        </div>
        <div class="post_line" id="board_contents<?php echo"$count"?>" style="display:None">
            <?php echo nl2br("$data[boardcontents]") ?>
        </div>
    </div>
<?php } ?>

<script>
    document.getElementById("board_contents1").style.display='block';
    document.getElementById("1").style.background='gray';
</script>
