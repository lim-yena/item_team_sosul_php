window.addEventListener("DOMContentLoaded", function() {
    // 모바일 검색 팝업 출력
    const popupclosebtn = document.querySelector("#closeModal");
    const popupdom = document.querySelector("#modal");
    const m_searchbtn = document.querySelector(".mo-search-btn");

    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content_sy");
    const resetBtn = document.querySelector(".bottom_sy .reset_sy"); // 리셋 버튼
    const allcheckedbtn = document.querySelectorAll(".tabs_sy2 input[type='checkbox'], .tabs_sy2all input[type='checkbox']");

    // 탭 활성화 함수
    function activateTab(button) {
        // 모든 탭 버튼 초기화
        tabButtons.forEach(btn => {
            btn.classList.remove("active");
            btn.querySelector(".icon-unselected_sy").style.display = "block";  // 기본 아이콘
            btn.querySelector(".icon-selected_sy").style.display = "none";   // 선택된 아이콘 숨기기
            btn.querySelector(".icon-selected_sy").style.transform = "rotate(0deg)"; // 아이콘 회전 초기화
        });

        // 클릭한 탭만 활성화
        button.classList.add("active");
        button.querySelector(".icon-unselected_sy").style.display = "none";  // 기본 아이콘 숨기기
        button.querySelector(".icon-selected_sy").style.display = "block";   // 선택된 아이콘 표시
        button.querySelector(".icon-selected_sy").style.transform = "rotate(180deg)"; // 아이콘 회전
    }

    // m_searchbtn 클릭 시 팝업 활성화
    // m_searchbtn.addEventListener("click", function() {
    //     popupdom.classList.remove("d-none");  

    //     // **모달이 열릴 때 첫 번째 탭 자동 활성화**
    //     activateTab(tabButtons[0]);
    //     document.getElementById(tabButtons[0].dataset.tab).classList.add("d-block");
    // });

    // 팝업 닫기 버튼
    // popupclosebtn.addEventListener("click", function() {
    //     popupdom.classList.add("d-none");  
    // });

    // 탭 버튼 클릭 이벤트
    // tabButtons.forEach(button => {
    //     button.addEventListener("click", function () {
    //         // 모든 탭 콘텐츠 숨기기
    //         tabContents.forEach(content => content.classList.remove("d-block"));

    //         // 선택한 탭 콘텐츠 보이기
    //         document.getElementById(this.dataset.tab).classList.add("d-block");

    //         // 탭 버튼 활성화 처리
    //         activateTab(this);
    //     });
    // });

    // 리셋 버튼 클릭 시 체크박스 초기화
    // resetBtn.addEventListener("click", function () {
    //     allcheckedbtn.forEach(checkbox => {
    //         checkbox.checked = false;
    //     });
    // });

    // 선택된 버튼 상태를 처리할 함수
    const selectButtons = document.querySelectorAll(".salebt2_sy");
    console.log("선택하기버튼 개수",selectButtons.length)

    // 이벤트 핸들러를 변수로 선언
    function handleClick(event) {
        
        const button = event.target;
        console.log("클릭된 버튼의 텍스트:", button.textContent);

        const isSelected = button.classList.contains("selted_sy");

        if (isSelected) {
            button.textContent = "선택하기"; // 버튼 텍스트 변경
            button.classList.remove("selted_sy"); // '선택됨' 클래스 제거
            console.log("클래스 removed: selted_sy");
        } else {
            button.textContent = "선택됨"; // 버튼 텍스트 변경
            button.classList.add("selted_sy"); // '선택됨' 클래스 추가
            console.log("클래스 added: selted_sy");
        }
    }

    // `click` 이벤트 리스너 추가
    selectButtons.forEach(button => {
        button.addEventListener("click", handleClick);  // 중복 호출 방지
    });


    // 첫 번째 카운트 관련 변수
    const minusButton = document.getElementById("adultMinus_sy");
    const plusButton = document.getElementById("adultPlus_sy");
    const countDisplay = document.getElementById("adultCount_sy");

    // 두 번째 카운트 관련 변수
    const minusButton1 = document.getElementById("adultMinus_sy1");
    const plusButton1 = document.getElementById("adultPlus_sy1");
    const countDisplay1 = document.getElementById("adultCount_sy1");

    // 세 번째 카운트 관련 변수
    const minusButton2 = document.getElementById("adultMinus_sy2");
    const plusButton2 = document.getElementById("adultPlus_sy2");
    const countDisplay2 = document.getElementById("adultCount_sy2");

    // 초기 숫자 설정
    let count = 0;
    let count1 = 0;
    let count2 = 0;

    // 첫 번째 카운트 감소 버튼 클릭 시
    minusButton.addEventListener("click", function() {
        if (count > 0) {
            count--;  // 숫자 감소
            countDisplay.textContent = count;  // 화면에 숫자 업데이트
        }
    });

    // 첫 번째 카운트 증가 버튼 클릭 시
    plusButton.addEventListener("click", function() {
        count++;  // 숫자 증가
        countDisplay.textContent = count;  // 화면에 숫자 업데이트
    });

    // 두 번째 카운트 감소 버튼 클릭 시
    minusButton1.addEventListener("click", function() {
        if (count1 > 0) {
            count1--;  // 숫자 감소
            countDisplay1.textContent = count1;  // 화면에 숫자 업데이트
        }
    });

    // 두 번째 카운트 증가 버튼 클릭 시
    plusButton1.addEventListener("click", function() {
        count1++;  // 숫자 증가
        countDisplay1.textContent = count1;  // 화면에 숫자 업데이트
    });

    // 세 번째 카운트 감소 버튼 클릭 시
    minusButton2.addEventListener("click", function() {
        if (count2 > 0) {
            count2--;  // 숫자 감소
            countDisplay2.textContent = count2;  // 화면에 숫자 업데이트
        }
    });

    // 세 번째 카운트 증가 버튼 클릭 시
    plusButton2.addEventListener("click", function() {
        count2++;  // 숫자 증가
        countDisplay2.textContent = count2;  // 화면에 숫자 업데이트
    });
});
