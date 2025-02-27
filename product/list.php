
<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");
// include_once(ROOT_DIR."/layout/lnb.php");
?>

<div class="product_list">
    <div class="container">
        <div class="d-flex">
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <div class="con_txt">
                    <div class="location point_txt gray3">지역</div>
                    <a href="/product/view.php" class="camping basic_txt">캠핑장 이름</a>
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
                    <button class="check_btn sub_txt gray3" onclick="location.href='/product/view.php'">
                        예약하기
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>