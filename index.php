<?php 
define('_INDEX_', true); 
include_once("./config.php");
include_once("./layout/top.php");
?>

    <!-- eunjeong video -->
    <?php include_once("./main/video.php"); ?>
    <!--// eunjeong video -->

    <!-- eunjeong search -->
    <?php include_once("./main/search.php"); ?>
    <!--// eunjeong search -->

    <!-- eunjeong quick -->
    <?php include_once("./main/quick.php"); ?>
    <!--// eunjeong quick -->      

    <!-- jeaeun four -->
    <div class="main_con main_con_four p100">
        <div class="container">
            <div class="tit">
                <div class="point_txt organic d-lg-none">NOW HERE</div>
                <div class="main_tit panBlack">당신을 위한 추천,<br class="d-lg-none"> 지금 여기</div>
                <button class="all-btn point_txt gray3">전체보기</button>
            </div>
            <?php include_once("./main/slide_four.php"); ?>
            <button class="mo-all-btn point_txt gray3 d-lg-none">전체보기</button>
        </div>
    </div>            
    <!--// jeaeun four -->

    <!-- jeaeun three -->
    <div class="main_con main_con_three p100">
        <div class="container">
            <div class="tit">
                <div class="point_txt apricot d-lg-none">ONLY HERE</div>
                <div class="main_tit panBlack">소슬에서만 만나는,<br class="d-lg-none"> 오직 여기</div>
                <button class="all-btn point_txt gray3">전체보기</button>
            </div>
            <?php include_once("./main/slide_three.php"); ?>
        </div>
    </div>  
    <!--// jeaeun three -->

    <!-- yena banner -->
    <?php include_once("./main/banner_top.php"); ?>
    <!--// yena banner -->


    <!-- yena hotspot -->
    <div class="hotspot p100">
        <div class="container ">
            <div class="point_txt organic d-lg-none">BEST SPOT</div>
            <div class="main_tit">요즘 주목받는<br class="d-lg-none"> 베스트스팟</div>
            <?php include_once("./main/best_spot.php"); ?>
        </div>
    </div>
    <!--// yena hotspot -->
   
    <!-- yena magazin -->
    <?php include_once("./main/magazin.php"); ?>
    <!--// yena magazin -->

    <!-- yena youtube -->
    <div class="youtube p100">
        <div class="container">
            <div class="point_txt organic d-lg-none">YOUTUBE</div>
            <div class="main_tit">캠핑 라이프를<br class="d-lg-none"> 구독해보세요</div>
            <?php include_once("./main/youtube.php"); ?>
        </div>
    </div>
    <!--// yena youtube -->

    <!-- yena banner -->
    <?php include_once("./main/banner_btm.php"); ?>
    <!--// yena banner -->

    <!-- yena more -->
    <?php include_once("./main/more.php"); ?>
    <!-- //yena more -->

    <!-- ej notice -->
    <?php include_once("./main/notice.php"); ?>
    <!-- ej notice -->

    <?php include_once("./layout/bottom.php"); ?>