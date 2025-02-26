window.addEventListener("DOMContentLoaded", function() {
    // 모바일 검색 팝업 출력
    const popupclosebtn = document.querySelector("#closeModal");
    const popupdom = document.querySelector("#modal");
    const m_searchbtn = document.querySelector(".mo-search-btn");

    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content_sy");

    function activateTab(button) {
        // 모든 버튼 초기화
        tabButtons.forEach(btn => {
            btn.classList.remove("active");
            btn.querySelector(".icon-unselected_sy").style.display = "block";
            btn.querySelector(".icon-selected_sy").style.display = "none";
            btn.querySelector(".icon-selected_sy").style.transform = "rotate(0deg)";
        });

        // 클릭한 버튼만 활성화
        button.classList.add("active");
        button.querySelector(".icon-unselected_sy").style.display = "none";
        button.querySelector(".icon-selected_sy").style.display = "block";
        button.querySelector(".icon-selected_sy").style.transform = "rotate(180deg)";
    }

    m_searchbtn.addEventListener("click", function() {
        popupdom.classList.remove("d-none");  

        // **모달이 열릴 때 첫 번째 탭 아이콘 강제 변경**
        activateTab(tabButtons[0]);
    });

    popupclosebtn.addEventListener("click", function() {
        popupdom.classList.add("d-none");  
    });

    // 탭 버튼 클릭 이벤트
    tabButtons.forEach(button => {
        button.addEventListener("click", function () {
            activateTab(this);
        });
    });
});
