document.addEventListener("DOMContentLoaded", () => {

    //전체리뷰 이미지 확장
    document.querySelectorAll('.review_all_btm .photo_some').forEach(photo => {
        photo.addEventListener('click', (event) => {
            const parentBox = event.currentTarget.closest('.photoSome_box');  // 클릭한 .photo_some가 속한 .photoSome_box 찾기
            parentBox.classList.toggle('resize');  // .photoSome_box에 resize 클래스 토글
        });
    });

    //포토앨범 팝업 닫기
    const closeButtons = document.querySelectorAll('.review_popup .pop_close');
    
    closeButtons.forEach(closeButton => {
        closeButton.addEventListener('click', function() {
            const popList = document.querySelector('.pop_list');
            const popView = document.querySelector('.pop_view');

            if (popList) popList.classList.remove('change');
            if (popView) popView.classList.remove('change');

            let popup = document.querySelector('.review_popup');
            popup.style.display = 'none';
        });
    });


    //포토앨범 팝업 열기기
    document.querySelectorAll('.review_photoBox .photo_some').forEach(function(photoSome) {
        photoSome.addEventListener('click', function() {
            var photoBox = document.querySelector('.review_popup');
            photoBox.style.display = 'block';
        });
    });

    // 포토앨범 상세
    const photoSomeList = document.querySelectorAll('.pop_list .photo_some');

    photoSomeList.forEach(photoSome => {
        photoSome.addEventListener('click', function() {

            const popList = document.querySelector('.pop_list');
            const popView = document.querySelector('.pop_view');

            popList.classList.add('change');
            popView.classList.add('change');
        });
    });

    // 뒤로 가기 버튼 클릭 시 'change' 클래스 제거
    const backMove = document.querySelector('.backMove');

    if (backMove) {
        backMove.addEventListener('click', function() {
            const popList = document.querySelector('.pop_list');
            const popView = document.querySelector('.pop_view');
    
            popList.classList.remove('change');
            popView.classList.remove('change');
        });
    }

    //포토리뷰 슬라이드
    const popreviewswiper = new Swiper('.popreviewswiper', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        freeMode: false,
        allowTouchMove: false,
        navigation: {
            nextEl: '.photo-button-next',
            prevEl: '.photo-button-prev',
        },
        breakpoints: {
            991: {
                allowTouchMove: true,
            }
        }
    });

    //리뷰삭제
    document.querySelectorAll(".review_all_btns .delete").forEach((btn) => {
        btn.addEventListener("click", function () {
          const reviewItem = this.closest(".review_all_in");
          if (reviewItem) {
            reviewItem.remove();
          }
        });
    });

    //페이징
    const numLinks = document.querySelectorAll(".number .num");

    numLinks.forEach((link) => {
        link.addEventListener("click", function (event) {
        event.preventDefault();

        numLinks.forEach((num) => num.classList.remove("active"));

        this.classList.add("active");
        });
    });

    // like
    const btnLikes = document.querySelectorAll('.btn_like');

    btnLikes.forEach(function(btn) {
        btn.addEventListener('click', function() {
            btn.classList.toggle('on');
        });
    });

    //필터
    const inputLeft = document.getElementById("input-left");
    const inputRight = document.getElementById("input-right");

    const thumbLeft = document.querySelector(".slider > .thumb.left");
    const thumbRight = document.querySelector(".slider > .thumb.right");
    const range = document.querySelector(".slider > .range");

    const setLeftValue = () => {
    const _this = inputLeft;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];
    
    // 교차되지 않게, 1을 빼준 건 완전히 겹치기보다는 어느 정도 간격을 남겨두기 위해.
    _this.value = Math.min(parseInt(_this.value), parseInt(inputRight.value) - 1);
    
    // input, thumb 같이 움직이도록
    const percent = ((_this.value - min) / (max - min)) * 100;
    thumbLeft.style.left = percent + "%";
    range.style.left = percent + "%";
    };

    const setRightValue = () => {
    const _this = inputRight;
    const [min, max] = [parseInt(_this.min), parseInt(_this.max)];
    
    // 교차되지 않게, 1을 더해준 건 완전히 겹치기보다는 어느 정도 간격을 남겨두기 위해.
    _this.value = Math.max(parseInt(_this.value), parseInt(inputLeft.value) + 1);
    
    // input, thumb 같이 움직이도록
    const percent = ((_this.value - min) / (max - min)) * 100;
    thumbRight.style.right = 100 - percent + "%";
    range.style.right = 100 - percent + "%";
    };

    inputLeft.addEventListener("input", setLeftValue);
    inputRight.addEventListener("input", setRightValue);
});