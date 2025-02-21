// $(document).ready(function() {
//     // 검색창 클릭 시 모달 펼치기
//     $(".mo-search-btn").click(function() {
//         $("#openModal").slideDown();
//     });

//     // 닫기 버튼 클릭 시 모달 접기
//     $(".close-btn").click(function() {
//         $(".modal-overlay").slideUp();
//     });

//     // 탭 버튼 클릭 이벤트
//     $(".tab-btn_sy").click(function() {
//         let tabId = $(this).attr("data-tab");

//         // 모든 탭 버튼에서 active 제거 후 현재 버튼에 추가
//         $(".tab-btn_sy").removeClass("active");
//         $(this).addClass("active");

//         // 모든 탭 내용 숨기고, 선택한 탭 내용만 표시
//         $(".tab-content_sy").hide();
//         $("#" + tabId).show();
//     });
// });


window.addEventListener("DOMContentLoaded", function(){

    // 모바일 검색 팝업출력
    const popupclosebtn = document.querySelector("#closeModal");
    const popupdom = this.document.querySelector("#modal");
    const m_searchbtn = this.document.querySelector(".mo-search-btn");

    m_searchbtn.addEventListener("click", function(){
           popupdom.classList.remove("d-none");  
    })
    popupclosebtn.addEventListener("click", function(){
        popupdom.classList.add("d-none");  
    })

    // 팝업내의 탭기능
    const tabButtons = document.querySelectorAll(".tab-btn_sy");
    const tabContents = document.querySelectorAll(".tab-content_sy");

    tabButtons.forEach(button => {
        button.addEventListener("click", function () {
            let tabId = this.getAttribute("data-tab");

            // 모든 탭 버튼에서 active 제거 후 현재 버튼에 추가
            tabButtons.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");

            // 모든 탭 내용 숨기고, 선택한 탭 내용만 표시
            tabContents.forEach(content => content.style.display = "none");
            document.getElementById(tabId).style.display = "block";
        });
    });


 })

 // 리셋 버튼 기능
 document.addEventListener("DOMContentLoaded", function () {
    const resetBtn = document.querySelector(".reset_sy");
    if (resetBtn) {
        resetBtn.addEventListener("click", function () {
            document.querySelectorAll(".tabs_sy2 input[type='checkbox']").forEach(checkbox => {
                checkbox.checked = false;
            });
        });
    } else {
        console.error("❌ .reset_sy 버튼을 찾을 수 없습니다!");
    }
});
document.querySelectorAll(".tab-btn").forEach(button => {
    button.addEventListener("click", function () {
        let tabId = this.getAttribute("data-tab"); // 클릭한 버튼의 data-tab 값을 가져옴
        
        // 모든 탭 내용을 숨김
        document.querySelectorAll(".tab-content_sy").forEach(tab => {
            tab.style.display = "none";
        });

        // 클릭한 버튼과 연결된 콘텐츠만 보이게 설정
        document.getElementById(tabId).style.display = "block";
        
        // 활성화된 탭 버튼 스타일 변경
        document.querySelectorAll(".tab-btn").forEach(btn => btn.classList.remove("active"));
        this.classList.add("active");
    });
});