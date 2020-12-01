<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/main.css">
    <title>취업하고 싶다's Blog</title>
</head>
<body>
    <!-- 블로그 메뉴 라인 -->
    <div class="title_area">
        <h1>My Blog</h1>
    </div>
    <!-- 로그인 라인 -->
    <div class="login_area">
        <?php
            if(isset($_SESSION['admin_check'])) {
                echo '현재 관리자 모드 입니다.';
            }
            else {
                echo '<a href="./source/admin_login.html">관리자 모드</a>';
            }
        ?>
        
    </div>
    <div class="body_area">
    <!-- 글 작성 마다 div 추가 -->
        <?php
            include('./source/read_contents.php');
        ?>
    <!-- 여기까지 -->
    <!-- 글 작성 탭 div-->
        <div class="write_contents_box">
            <form id="write_from" method="POST" action="./source/write_contents.php">
                <div class="write_title_line">
                    <input type="text" name="write_title" placeholder="글제목을 입력해주세요."></input>
                </div>
                <div class="write_contents_line">
                    <textarea class="write_contents_line" style="width:100%" name="write_content"></textarea>
                </div>
                <input value="작성" type="submit">
            </form>
        </div>
    </div>
</body>
</html>