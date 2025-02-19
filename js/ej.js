// function updateVideoSource() {
//     const video = document.querySelector('.video-bg video'); // 특정 video 태그 선택
//     const source = video.querySelector('source'); 

//     // data 속성에서 영상 경로 가져오기
//     const desktopSrc = video.dataset.srcDesktop;
//     const mobileSrc = video.dataset.srcMobile;

//     // 화면 크기에 따라 소스 변경
//     source.src = window.innerWidth < 991 ? mobileSrc : desktopSrc;
//     video.load(); // 새로운 영상 로드
// }

// window.addEventListener('resize', updateVideoSource);
// window.addEventListener('load', updateVideoSource);

/*
window.addEventListener("DOMContentLoaded", () => {
    const topHeight = document.querySelector("#hd").offsetHeight; 
    const targetDom = document.querySelector(".ej_content");

    if (targetDom) {
        targetDom.style.paddingTop = `${topHeight}px`;
    }
});
*/

window.addEventListener("DOMContentLoaded", () => {
    // 픽스상단 높이만큼 아래 컨텐츠 상단여백 적용
    const updatePadding = () => {
        const topHeight = document.querySelector("#hd")?.offsetHeight || 0; 
        const targetDom = document.querySelector(".ej_content");

        if (targetDom) {
            targetDom.style.paddingTop = `${topHeight}px`;
        }
    };

    // 실행: DOM 로드 후 & 윈도우 리사이즈 시
    updatePadding();
    window.addEventListener("resize", updatePadding);

    // 📌 스크롤 방향 감지 후 body에 'down' 클래스 추가/제거
    let lastScrollY = window.scrollY; // 이전 스크롤 위치 저장

    const handleScroll = () => {
        const currentScrollY = window.scrollY;
        
        if (currentScrollY > lastScrollY) {
            // 아래로 스크롤 시 'down' 클래스 추가
            document.body.classList.add("down");
        } else {
            // 위로 스크롤 시 'down' 클래스 제거
            document.body.classList.remove("down");
        }

        lastScrollY = currentScrollY; // 현재 스크롤 값을 저장
    };

    window.addEventListener("scroll", handleScroll);
});


document.addEventListener("DOMContentLoaded", function () {
    const moSearch = document.querySelector('.mo-search');
    const header = document.querySelector('#hd');
    const headerHeight = header.offsetHeight; // 헤더의 높이
  
    window.addEventListener("scroll", function () {
      if (window.scrollY > headerHeight) {
        moSearch.classList.add("scrolled");
      } else {
        moSearch.classList.remove("scrolled");
      }
    });
  });
  




