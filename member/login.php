<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>

<!-- 작업해주세요. -->
<h2 class="Login main_tit">로그인</h2>
<div class="login">
    <form action="/login" method="POST">
        <div class="input-group basic_txt">
            <input type="text" id="username" name="username" required placeholder="아이디를 입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <input type="password" id="password" name="password" required placeholder="비밀번호를 입력하세요.">
        </div>
        <div class="sub0">   
            <p class="sub1 basic_txt"><a href="#">로그인 유지</a><p>
            <p class="sub2 basic_txt"><a href="#">비밀번호 재설정</a><p>
        </div>
        <button type="submit" class="login-btn list_tit">로그인</button>
        <p class="basic_txt">계정이 없으신가요?</p>
        <p class="main_tit"><a href="#">회원가입</a></p>
    </form>
</div>



<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>