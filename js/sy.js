window.addEventListener("DOMContentLoaded", function() {
    // 모바일 검색 팝업 출력
    const popupclosebtn = document.querySelector("#closeModal");
    const popupdom = document.querySelector("#modal");
    const m_searchbtn = document.querySelector(".mo-search-btn");

    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content_sy");
    const resetBtn = document.querySelector(".bottom_sy .reset_sy"); // 리셋 버튼
    const allcheckedbtn = document.querySelectorAll(".tabs_sy2 input[type='checkbox'], .tabs_sy2all input[type='checkbox']");

    function activateTab(button) {
        // 모든 탭 버튼 초기화
        tabButtons.forEach(btn => {
            btn.classList.remove("active");
            btn.querySelector(".icon-unselected_sy").style.display = "block";
            btn.querySelector(".icon-selected_sy").style.display = "none";
            btn.querySelector(".icon-selected_sy").style.transform = "rotate(0deg)";
        });

        // 클릭한 탭만 활성화
        button.classList.add("active");
        button.querySelector(".icon-unselected_sy").style.display = "none";
        button.querySelector(".icon-selected_sy").style.display = "block";
        button.querySelector(".icon-selected_sy").style.transform = "rotate(180deg)";
    }

    m_searchbtn.addEventListener("click", function() {
        popupdom.classList.remove("d-none");  

        // **모달이 열릴 때 첫 번째 탭 자동 활성화**
        activateTab(tabButtons[0]);
        document.getElementById(tabButtons[0].dataset.tab).classList.add("d-block");
    });

    popupclosebtn.addEventListener("click", function() {
        popupdom.classList.add("d-none");  
    });

    // 탭 버튼 클릭 이벤트
    tabButtons.forEach(button => {
        button.addEventListener("click", function () {
            // 모든 탭 콘텐츠 숨기기
            tabContents.forEach(content => content.classList.remove("d-block"));

            // 선택한 탭 콘텐츠 보이기
            document.getElementById(this.dataset.tab).classList.add("d-block");

            // 탭 버튼 활성화 처리
            activateTab(this);
        });
    });

    // 리셋 버튼 클릭 시 체크박스 초기화
    resetBtn.addEventListener("click", function () {
        allcheckedbtn.forEach(checkbox => {
            checkbox.checked = false;
        });
    });
});
