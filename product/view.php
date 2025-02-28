
<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>

<div class="product_view">
    <div class="">
        <!-- 상세 슬라이드 -->
        <div class="maxW overflow-hidden"><?php include_once("./view/visual.php"); ?></div>
        <div class="d-flex product_page_box container">
            <!--// 상세 슬라이드 -->
            <div class="product_page_left">
                <!-- 상세 상단타이틀& 탭메뉴 -->
                <?php include_once("./view/top.php"); ?>
                <!--// 상세 상단타이틀& 탭메뉴 -->

                <!-- 상세 시설소개 -->
                <?php include_once("./view/info.php"); ?>
                <!--// 상세 시설소개 -->

                <!-- 상세 운영정책 -->
                <?php include_once("./view/policy.php"); ?>
                <!--// 상세 운영정책 -->

                <!-- 상세 시설환경 -->
                <?php include_once("./view/setting.php"); ?>
                <!--// 상세 시설환경 -->

                <!-- 상세 배치도 -->
                <?php include_once("./view/layout.php"); ?>
                <!--// 상세 배치도 -->
                
                <!-- 상세 예약안내 -->
                <?php include_once("./view/reservation.php"); ?>
                <!--// 상세 예약안내 -->

                <!-- 상세 방문후기 -->
                <?php include_once("./view/review.php"); ?>
                <!--// 상세 방문후기 -->
            </div>
            <div class="product_page_right">
                <div class="sticky_box">
                    <!-- 오른쪽 슬라이드 -->
                    <?php include_once("./view/check.php"); ?>
                    <!--// 오른쪽 슬라이드 -->
                </div>
            </div>
        </div>
    </div>
</div>

<a href="/product/write.php">예약하기</a>
<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>