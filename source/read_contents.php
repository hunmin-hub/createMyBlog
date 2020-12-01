<?php
    require('db_con.php');
    $con=db_connect();
    $sql = "SELECT * FROM `blog_posting` order by boardnum DESC";
    $result=mysqli_query($con,$sql);

    while($data = mysqli_fetch_array($result)) {
?>
    <div class="contents_box">
        <div class="title_line">
            <?php echo nl2br("$data[boardtitle]") ?>
        </div>
        <div class="post_line">
            <?php echo nl2br("$data[boardcontents]") ?>
        </div>
    </div>
<?php } ?>
