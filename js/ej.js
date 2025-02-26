
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

  document.addEventListener("DOMContentLoaded", function () {
    const openModalBtn = document.querySelector(".topwhere button"); // 지역 선택 버튼
    const modal = document.querySelector(".modal"); // 모달
    const closeModalBtn = document.querySelector(".modal .close"); // 닫기 버튼

    // ✅ 모달 열기
    openModalBtn.addEventListener("click", function () {
        modal.style.display = "flex";
    });

    // ✅ 모달 닫기
    closeModalBtn.addEventListener("click", function () {
        modal.style.display = "none";
    });

    // ✅ 모달 바깥 클릭 시 닫기
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const items = document.querySelectorAll(".location-nm li, .location-chk li");
    const resetButton = document.querySelector(".modal-btn-reset");

    if (items.length > 0) {
        items.forEach(item => {
            item.addEventListener("click", function () {
                this.classList.toggle("active");
                console.log(`${this.textContent} 선택됨, 현재 클래스: ${this.classList}`);
            });
        });
    } else {
        console.error("선택할 요소가 없습니다.");
    }

    if (resetButton) {
        resetButton.addEventListener("click", function () {
            items.forEach(item => {
                item.classList.remove("active");
            });
            console.log("모든 선택 초기화됨");
        });
    } else {
        console.error("리셋 버튼을 찾을 수 없습니다.");
    }
});


document.addEventListener("DOMContentLoaded", function () {
    const noticeContainer = document.querySelector(".mob_container");
    const notices = document.querySelectorAll(".mob_notice");

    if (!noticeContainer || notices.length === 0) {
        console.error("공지사항 컨테이너를 찾을 수 없습니다.");
        return;
    }

    let index = 0;

    function showNextNotice() {
        index++;
        if (index >= notices.length) {
            index = 0;
            noticeContainer.style.transition = "none"; // 애니메이션 제거 (순간 이동)
            noticeContainer.style.transform = `translateY(0px)`;
            setTimeout(() => {
                noticeContainer.style.transition = "transform 0.5s ease-in-out"; // 애니메이션 다시 적용
            }, 50);
        } else {
            noticeContainer.style.transform = `translateY(-${index * 30}px)`;
        }
    }

    setInterval(showNextNotice, 3000);
});