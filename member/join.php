<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>

<!-- 작업해주세요. -->
<h2 class="Join main_tit">회원정보입력</h2>
<h2 class="basic_txt">가입을 위해 정보를 입력해 주세요.</h2>
<div class="join">
    <form action="/join" method="POST">
        <div class="input-group basic_txt">
            <label for="username">아이디*</label>
            <input type="text" id="username" name="username" required placeholder="아이디를 입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="username">비밀번호*</label>
            <input type="password" id="password" name="password" required placeholder="비밀번호를 입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="username">비밀번호 재입력*</label>
            <input type="password" id="password" name="password" required placeholder="비밀번호를 재입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="username">이름*</label>
            <input type="password" id="password" name="password" required placeholder="이름을 입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="username">이메일*</label>
            <input type="password" id="password" name="password" required placeholder="abc@sosul.com">
        </div>
        <div class="sub">   
            <p class="basic_txt"><a href="#">약관 모두 동의</a><p>
            <p class="basic_txt"><a href="#">만 14세 이상입니다.</a><p>
            <p class="basic_txt"><a href="#">소슬 약관 동의</a><p>
            <p class="basic_txt"><a href="#">개인정보수집 및 이용에 대한 안내</a><p>
            <p class="basic_txt"><a href="#">이벤트/마케팅 수신 동의 (선택)</a><p>
        </div>
    </form>
</div>


<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>