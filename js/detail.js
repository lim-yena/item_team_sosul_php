document.addEventListener("DOMContentLoaded", () => {

    //전체리뷰 이미지 확장
    document.querySelectorAll('.review_all_btm .photo_some').forEach(photo => {
        photo.addEventListener('click', (event) => {
            const parentBox = event.currentTarget.closest('.photoSome_box');  // 클릭한 .photo_some가 속한 .photoSome_box 찾기
            parentBox.classList.toggle('resize');  // .photoSome_box에 resize 클래스 토글
        });
    });

    //포토앨범 팝업
    document.querySelector('.review_popup .pop_close').addEventListener('click', function() {
        document.querySelector('.review_popup .pop_close').addEventListener('click', function() {
            let popup = document.querySelector('.review_popup');  // review_popup 요소 찾기
            popup.style.display = 'none';
        });
    });

    document.querySelectorAll('.review_photoBox .photo_some').forEach(function(photoSome) {
        photoSome.addEventListener('click', function() {
            var photoBox = document.querySelector('.review_popup');
            photoBox.style.display = 'block';
        });
    });
});