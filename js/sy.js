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
           //팝업화면노출됨

         
    })
    popupclosebtn.addEventListener("click", function(){
        popupdom.classList.add("d-none");  
    })

  



    console.log("DOM이 로드되었습니다.");  // DOM이 로드되었을 때 로그를 찍음
    const resetBtn = document.querySelector(".bottom_sy .reset_sy"); // 리셋버튼
    const allcheckedbtn = document.querySelectorAll(".tabs_sy2 input[type='checkbox']");

    console.log(allcheckedbtn, allcheckedbtn.length, resetBtn)

    resetBtn.addEventListener("click", function () {
        allcheckedbtn.forEach((checkbox) =>{
            checkbox.checked = false;
        })
        
    });


  
    


    // 팝업내의 탭기능
    const tabButtons = document.querySelectorAll(".tab-btn");
    const tabContents = document.querySelectorAll(".tab-content_sy");

    tabButtons.forEach(button => {
        button.addEventListener("click", function () {
            const tabId = this.dataset.tab; // 클릭한 버튼의 data-tab 값을 가져옴
            //alert("#"+tabId);
    
            // 클릭한 버튼과 연결된 콘텐츠만 보이게 설정
           tabContents.forEach(content => content.classList.remove("d-block"));
           document.getElementById(tabId).classList.add("d-block");

         
          
           
               
            
         
            
           // // 활성화된 탭 버튼 스타일 변경
           tabButtons.forEach( btn => btn.classList.remove("active"));
           this.classList.add("active");
        });

    });
});
