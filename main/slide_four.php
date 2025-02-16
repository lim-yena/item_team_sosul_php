<div class="con_tab">
    <a class="tab">1번탭탭</a>
    <a class="tab">2번탭탭</a>
    <a class="tab">3번탭탭</a>
</div>
<div class="con_tabBox">
    <div class="swiper nowSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="con_box">
                    <div class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></div>
                    <div class="con_txt">
                        <div class="location point_txt gray3">지역</div>
                        <div class="camping basic_txt">캠핑장 이름</div>
                        <div class="won sub_txt gray3">80,000원</div>
                        <div class="price">
                            <span class="percent list_tit organic">20%</span>
                            <span class="won2 list_tit panBlack">64,000원 ~</span>  
                        </div>
                        <div class="review d-flex">
                            <span class="star sub_txt gray3">★</span>
                            <span class="jum sub_txt gray3">4.8</span>
                            <span class="number sub_txt gray3">(124)</span>
                        </div>
                        <button class="check_btn sub_txt gray3">
                            예약하기
                        </button>
                    </div>
                </div>  
            </div>
            <div class="swiper-slide">
                <div class="con_box">
                    <div class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image2.jpg" alt="캠핑장" class="con_img" /></div>
                    <div class="con_txt">
                        <div class="location point_txt gray3">지역</div>
                        <div class="camping basic_txt">캠핑장 이름</div>
                        <div class="won sub_txt gray3">80,000원</div>
                        <div class="price">
                            <span class="percent list_tit organic">20%</span>
                            <span class="won2 list_tit panBlack">64,000원 ~</span>  
                        </div>
                        <div class="review d-flex">
                            <span class="star sub_txt gray3">★</span>
                            <span class="jum sub_txt gray3">4.8</span>
                            <span class="number sub_txt gray3">(124)</span>
                        </div>
                        <button class="check_btn sub_txt gray3">
                            예약하기
                        </button>
                    </div>
                </div>  
            </div>
            <div class="swiper-slide">
                <div class="con_box">
                    <div class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image3.jpg" alt="캠핑장" class="con_img" /></div>
                    <div class="con_txt">
                        <div class="location point_txt gray3">지역</div>
                        <div class="camping basic_txt">캠핑장 이름</div>
                        <div class="won sub_txt gray3">80,000원</div>
                        <div class="price">
                            <span class="percent list_tit organic">20%</span>
                            <span class="won2 list_tit panBlack">64,000원 ~</span>  
                        </div>
                        <div class="review d-flex">
                            <span class="star sub_txt gray3">★</span>
                            <span class="jum sub_txt gray3">4.8</span>
                            <span class="number sub_txt gray3">(124)</span>
                        </div>
                        <button class="check_btn sub_txt gray3">
                            예약하기
                        </button>
                    </div>
                </div>  
            </div>
            <div class="swiper-slide">
                <div class="con_box">
                    <div class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image4.jpg" alt="캠핑장" class="con_img" /></div>
                    <div class="con_txt">
                        <div class="location point_txt gray3">지역</div>
                        <div class="camping basic_txt">캠핑장 이름</div>
                        <div class="won sub_txt gray3">80,000원</div>
                        <div class="price">
                            <span class="percent list_tit organic">20%</span>
                            <span class="won2 list_tit panBlack">64,000원 ~</span>  
                        </div>
                        <div class="review d-flex">
                            <span class="star sub_txt gray3">★</span>
                            <span class="jum sub_txt gray3">4.8</span>
                            <span class="number sub_txt gray3">(124)</span>
                        </div>
                        <button class="check_btn sub_txt gray3">
                            예약하기
                        </button>
                    </div>
                </div>  
            </div>
            <div class="swiper-slide">
                <div class="con_box">
                    <div class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image5.jpg" alt="캠핑장" class="con_img" /></div>
                    <div class="con_txt">
                        <div class="location point_txt gray3">지역</div>
                        <div class="camping basic_txt">캠핑장 이름</div>
                        <div class="won sub_txt gray3">80,000원</div>
                        <div class="price">
                            <span class="percent list_tit organic">20%</span>
                            <span class="won2 list_tit panBlack">64,000원 ~</span>  
                        </div>
                        <div class="review d-flex">
                            <span class="star sub_txt gray3">★</span>
                            <span class="jum sub_txt gray3">4.8</span>
                            <span class="number sub_txt gray3">(124)</span>
                        </div>
                        <button class="check_btn sub_txt gray3">
                            예약하기
                        </button>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <div class="mobile"><div class="swiper-pagination same-pagination"></div></div>
    <div class="now-button-prev same-button-prev"></div> 
    <div class="now-button-next same-button-next"></div>
</div>
<div class="con_tabBox">
    111
</div>
<div class="con_tabBox">
    222
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
        const tabs = document.querySelectorAll(".con_tab .tab");
        const contents = document.querySelectorAll(".con_tabBox");

        // 첫 번째 콘텐츠만 보이게 설정
        contents[0].style.display = "block";

        tabs.forEach((tab, index) => {
            tab.addEventListener("click", () => {
                contents.forEach((content, i) => content.style.display = i === index ? "block" : "none");
            });
        });
    });
</script>