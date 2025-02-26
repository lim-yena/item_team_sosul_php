window.addEventListener("DOMContentLoaded", function(){
  document.querySelector(".download_coupon").addEventListener("click", function() {
      alert("쿠폰이 다운로드되었습니다!");
    });

})
window.addEventListener("DOMContentLoaded", function(){
  var swiper = new Swiper('.h.swiper-container', {
      slidesPerView: 1, // 한 번에 보일 슬라이드 수
      spaceBetween: 10,  // 슬라이드 간 간격 (픽셀 단위)
      loop: true,        // 무한 반복
      pagination: {      // 페이지네이션
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {      // 네비게이션 화살표
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {        // 자동 재생
        delay: 3000,     // 3초마다 자동 전환
        disableOnInteraction: false,
      },
    });
})