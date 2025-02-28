<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>

<!-- 작업해주세요. -->
<script>
        function validateForm(event) {
            // 전화번호 합치기
            const phone1 = document.getElementById("phone1").value;
            const phone2 = document.getElementById("phone2").value;
            const phone3 = document.getElementById("phone3").value;
            document.getElementById("phone").value = phone1 + "-" + phone2 + "-" + phone3;

            // 비밀번호 확인 검증
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm_password").value;
            if (password !== confirmPassword) {
                alert("비밀번호가 일치하지 않습니다.");
                event.preventDefault();
            }
        }
</script>
<!-- 상단 -->
<h2 class="Join main_tit">회원정보입력</h2>
<h2 class="basic_txt">가입을 위해 정보를 입력해 주세요.</h2>

<!-- 회원가입 -->
<fieldset>
<form action="/join" method="POST">
    <div class="join">
        <div class="input-group basic_txt">
            <label for="username">아이디*</label>
            <input type="text" id="username" name="username" required placeholder="아이디를 입력하세요.">
            <button type="button" onclick="alert('사용가능 한 아이디 입니다.')">인증하기</button>
        </div>
        <div class="input-group basic_txt">
            <label for="password">비밀번호*</label>
            <input type="password" id="password" name="password" required placeholder="비밀번호를 입력하세요."
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}"
                title="비밀번호는 8~32자이며, 대문자, 소문자, 숫자를 포함해야 합니다.">
        </div>
        <div class="input-group basic_txt">
            <label for="confirm_password">비밀번호 재입력*</label>
            <input type="confirm_password" id="confirm_password" name="confirm_password" 
            required minlength="8" maxlength="32" required placeholder="비밀번호를 재입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="username">이름*</label>
            <input type="username" id="username" name="username" required placeholder="이름을 입력하세요.">
        </div>
        <div class="input-group basic_txt">
            <label for="useremail">이메일*</label>
            <input type="useremail" id="useremail" name="useremail" required placeholder="abc@sosul.com">
            <button type="button" onclick="alert('사용가능 한 이메일 입니다.')">인증하기</button>
        </div>
        <div>
            <label for="birth">생년월일*</label>
            <input type="day" id="birth1" maxlength="4" pattern="\d{3,4}" required placeholder="년도">
            <span>-</span>
            <input type="day" id="birth2" maxlength="2" pattern="\d{1,2}" required placeholder="월">
            <span>-</span>
            <input type="day" id="birth3" maxlength="2" pattern="\d{2}" required placeholder="일">
            <input type="hidden" id="birth" name="birth">
        </div>
        <div>
            <label for="phone_number">휴대폰 번호*</label>
            <input type="tel" id="phone_number1" maxlength="3" pattern="\d{2,3}" required placeholder="000">
            <span>-</span>
            <input type="tel" id="phone_number2" maxlength="4" pattern="\d{3,4}" required placeholder="0000">
            <span>-</span>
            <input type="tel" id="phone_number3" maxlength="4" pattern="\d{4}" required placeholder="0000">
            <input type="hidden" id="phone_number" name="phone_number">
        </div>
        <div>
        <button type="submit" class="s-btn">남성</button>
        <button type="submit" class="s-btn">여성</button>
        </div>

<!-- 선호지역 -->
    <div class="local basic_txt">
        <div>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                서울
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                인천
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                부산
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                대구
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                울산
            </label>
        </div>
        <div>    
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                대전
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                광주
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                세종
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                강원
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                경기
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                충북
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                충남
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                경북
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                경남
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                전북
            </label>
        </div>
        <div>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                전남
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                제주
            </label>
        </div>
    </div>

<!-- 동의 창 -->
        <div class="sub basic_txt">
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                약관 모두 동의
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                만 14세 이상입니다.
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                소슬 약관 동의
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                개인정보 수집 및 이용에 대한 안내
            </label>
            <label>
                <input type="checkbox" name="privacy_agreement" required>
                이벤트/마케팅 수신 동의 (선택)
            </label>
        </div>

    </div>

        <button type="submit">회원가입</button>
        </fieldset>
</form>


<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>