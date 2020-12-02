<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/static/main.css?after">
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
                echo '<a href="./source/admin_logout.php">[로그아웃]</a>';
            }
            else {
                echo '<a href="./source/admin_login.html">[관리자모드 로그인]</a>';
            }
        ?>
    </div>
    
    <div class="body_area">
    <!-- 글 작성 마다 div 추가 -->
        <?php
            include('./source/read_contents.php');
        ?>
    <!-- 여기까지 -->
    <!-- 글 작성 탭 (write_tab.html) div -->
    <!-- 위탭은 (관리자 로그인) 상태일때만 보여줍니다. -->
        <?php
            if(isset($_SESSION['admin_check'])) {
                include('./source/write_tab.html');
            }
        ?>
    </div>
</body>
<!-- 자바스크립트 함수 -->
<!-- title_click() : 게시글 제목 클릭하면 실행되는 함수
               기능 : 게시글 제목을 클릭하면 내용부분 div를 보여주고 다시 클릭하면 숨김 -->
<script>
    function title_click() {
        var find_id= "board_contents"+event.srcElement.id;
        if(document.getElementById(find_id).style.display=='none') {
            document.getElementById(find_id).style.display='block';
        }
        else if(document.getElementById(find_id).style.display=='block') {
            document.getElementById(find_id).style.display='none';
        }
    }
</script>
</html>