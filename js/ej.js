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

// 픽스상단 높이만큼 아래 컨텐츠 상단여백주기
const updatePadding = () => {
    const topHeight = document.querySelector("#hd")?.offsetHeight || 0; 
    const targetDom = document.querySelector(".ej_content");

    if (targetDom) {
        targetDom.style.paddingTop = `${topHeight}px`;
    }
};

// Run once on DOM load
window.addEventListener("DOMContentLoaded", updatePadding);

// Run on window resize to adjust dynamically
window.addEventListener("resize", updatePadding);


