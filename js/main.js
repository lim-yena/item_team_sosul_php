

//지금여기_tab
document.addEventListener("DOMContentLoaded", function () {
    // initTabs();
});

document.addEventListener("DOMContentLoaded", () => {
    const tabs = document.querySelectorAll(".tab_wrap .tab_btn > li a");

    // 탭 클릭 시 활성화
    tabs.forEach(anchor => anchor.addEventListener("click", e => {
        e.preventDefault();
        activateTab(anchor.getAttribute("href"));
    }));

    // 첫 번째 탭 활성화
    activateTab(tabs[0].getAttribute('href'));

    // 탭 활성화 함수
    function activateTab(tabId) {
        document.querySelectorAll(".tab_wrap .tab_btn > li").forEach(li => li.classList.remove("active"));
        document.querySelectorAll(".tab_wrap .tab_list").forEach(tab => tab.style.display = "none");
        document.querySelector(tabId).style.display = "block";
        document.querySelector(`.tab_wrap .tab_btn > li a[href="${tabId}"]`).parentElement.classList.add("active");
    }
});


//지금여기_silde
document.addEventListener("DOMContentLoaded", function () {
    initSlider();
});
function initSlider() {
    document.querySelectorAll(".slider").forEach(function (slider, index) {
        let swiper = undefined;
        let slideNum = slider.querySelectorAll('.swiper-slide').length; // 슬라이드 총 개수
        let slideInx = 0; // 현재 슬라이드 index
        // 디바이스 체크
        let oldWChk = window.innerWidth > 991 ? 'pc' : 'mo';
        sliderAct();
        window.addEventListener("resize", function () {
            let newWChk = window.innerWidth > 991 ? 'pc' : 'mo';
            if (newWChk !== oldWChk) {
                oldWChk = newWChk;
                sliderAct();
            }
        });
        function sliderAct() {
            // 슬라이드 인덱스 클래스 추가
            slider.classList.add(`slider${index}`);
            // 슬라이드 초기화
            if (swiper !== undefined) {
                swiper.destroy();
                swiper = undefined;
            }
            // slidesPerView 옵션 설정
            let viewNum = oldWChk === 'pc' ? 4 : 2;
            // loop 옵션 체크
            let loopChk = slideNum > viewNum;
            swiper = new Swiper(`.slider${index} .inner`, {
                slidesPerView: 2,
                slidesPerGroup: 1,
                grid: {
                    rows: 2,
                    fill: 'row',
                },
                pagination: {
                    el: document.querySelector(`.slider${index} .same-pagination`),
                    clickable: true,
                },
                controller: {
                    control: null // 다른 슬라이더와 연동
                },
                freeMode: false,
                breakpoints: {
                    991: {
                        slidesPerView: 4,
                        slidesPerGroup: 1,
                        grid: {
                            rows: 1,
                            fill: 'row',
                        },
                    },
                },
                navigation: {
                    prevEl: document.querySelector(`.slider${index} .btn_prev`),
                    nextEl: document.querySelector(`.slider${index} .btn_next`),
                },
                on: {
                    activeIndexChange: function () {
                        if (getComputedStyle(document.querySelector(`.slider${index}`).parentElement).display !== 'none') {
                            slideInx = this.realIndex; // 현재 슬라이드 index 갱신
                        }
                    },
                },
            });
        }
    });
}



//오직여기_데스크탑
const hereswiper = new Swiper('.hereSwiper', {
    slidesPerView: 1,
    slidesPerGroup: 1,
    grid: {
        rows: 2,
        fill: 'row',
    },
    freeMode: false,
    navigation: {
        nextEl: '.here-button-next',
        prevEl: '.here-button-prev',
    },
    breakpoints: {
        991: {
            slidesPerView: 3,
            slidesPerGroup: 1,
            grid: {
                rows: 1,
                fill: 'row',
            },
        },
    },
});

//오직여기_모바일
const swiper1 = new Swiper('#swiper1', {
    slidesPerView: 1,
    spaceBetween: 10,
})
const swiper2 = new Swiper('#swiper2', {
    slidesPerView: 1, // 한 번에 하나의 슬라이드만 표시
    spaceBetween: 10, // 슬라이드 간 간격
    grid: {
        rows: 2, // 한 페이지에 2줄로 표시
        fill: 'row', // 기본 행 방향으로 채우기
    },
})
swiper1.controller.control = swiper2;
swiper2.controller.control = swiper1;


//공지사항
const noticeSwiper = new Swiper(".notice_swiper", {
    direction: "vertical", // 위로 스크롤
    loop: true, // 무한 반복
    autoplay: {
        delay: 5000, // 2초마다 자동 스크롤
        disableOnInteraction: false, // 사용자 조작 후에도 계속 자동 스크롤
    },
    speed: 500, // 부드러운 이동 효과 (0.5초)
});
    document.getElementById("btm_icon").addEventListener("click", function () {
    noticeSwiper.slideNext(); // 다음 슬라이드로 이동
});


//인기스팟
const swiperCon = new Swiper(".conSwiper1", {
    slidesPerView: "auto",
    centeredSlides: true, 
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },
    freeMode: false,
    autoHeight : true,
    loop: true,
    loopAdditionalSlides: 1,
    navigation: {
        nextEl: ".hotspot-button-next",
        prevEl: ".hotspot-button-prev",
    },
});


//소슬 sns
const swiperYoutuber = new Swiper(".youtuber", {
    slidesPerView: "auto",
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    freeMode: false,
    autoHeight : true,
    loop: true,
    loopAdditionalSlides: 1,
    navigation: {
        nextEl: ".youtube-button-next",
        prevEl: ".youtube-button-prev",
    },
    observer: true,	// 추가
    observeParents: true,	// 추가
});


//갤러리
const swiperTopNum = document.querySelectorAll('.gallery-top .swiper-slide');
const swiperSubNum = document.querySelectorAll('.gallery-thumbs .swiper-slide');
const swiperTxtNum = document.querySelectorAll('.gallery-txt .swiper-slide');


const galleryTop = new Swiper('.gallery-top', {
    spaceBetween: 0,	//슬라이드 간격
    loop: true,	//슬라이드 반복
    loopedSlides: swiperTopNum.length,	//loop 시 파라미터 duplicate 개수 - 정적으로 숫자 4 표현 가능
});

 const galleryTxt = new Swiper('.gallery-txt', {
    spaceBetween:0,
    loop: true,
    loopedSlides: swiperTxtNum.length,
});

const galleryThumbs = new Swiper('.gallery-thumbs', {
    spaceBetween: 0,	//슬라이드 간격
    touchRatio: 0.2,
    navigation: {	//네비게이션 사용자 설정
       nextEl: '.magazin-button-next',	//다음 버튼 클래스 설정
       prevEl: '.magazin-button-prev',	//이전 버튼 클래스 설정
    },
    autoplay: {
       delay: 8000,
       disableOnInteraction: false,
    },
    slidesPerView: 'auto',	//한번에 보여지는 슬라이드 개수(auto 가능)
    touchRatio: 0.2,	//드래그 비율 설정(기본값: 1, 기본값을 0으로 설정할 경우 드래그 불가능)
    slideToClickedSlide: true,	//슬라이드가 여러개 나열되어 있을 경우, 클릭 시 해당 슬라이드 위치로 이동
    loop: true,	//슬라이드 반복
    loopedSlides: swiperSubNum.length, //loop 시 파라미터 duplicate 개수 - 정적으로 숫자 4 표현 가능
});

const nextButton = document.querySelector('.magazin-button-next');
const prevButton = document.querySelector('.magazin-button-prev');

nextButton.addEventListener('click', () => {
    galleryTop.slideNext();
    galleryThumbs.slideNext();
    galleryTxt.slideNext();
});

prevButton.addEventListener('click', () => {
    galleryTop.slidePrev();
    galleryThumbs.slidePrev();
    galleryTxt.slidePrev();
});

const synchronizeSwipers = (swiperInstance) => {
    swiperInstance.on('slideChangeTransitionStart', () => {
        const currentIndex = swiperInstance.realIndex;
        [galleryTop, galleryThumbs, galleryTxt].forEach(swiper => {
            if (swiper !== swiperInstance) {

                swiper.slideToLoop(currentIndex);
            }
        });
    });
};

synchronizeSwipers(galleryTop);
synchronizeSwipers(galleryThumbs);
synchronizeSwipers(galleryTxt);