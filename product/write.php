
<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>


<div class="product_write">
    <div class="maxW overflow-hidden">
        <div class="product_write_left">
            <!-- 예약하기 상단 -->
            <?php include_once("./write/top.php"); ?>
            <!--// 예약하기 상단 -->

            <!-- 예약하기 이용안내 -->
            <?php include_once("./write/info.php"); ?>
            <!-- //예약하기 이용안내 -->

            <!-- 예약하기 배치도 -->
            <?php include_once("./write/layout.php"); ?>
            <!-- //예약하기 배치도 -->
            
            <!-- 예약하기 사이트선택 -->
            <?php include_once("./write/reservation.php"); ?>
            <!--// 예약하기 사이트선택 -->
        </div>
        <div class="product_write_right">
            <div class="sticky_box">
                <!-- 오른쪽 슬라이드 -->
                <?php include_once("./write/check.php"); ?>
                <!--// 오른쪽 슬라이드 -->
            </div>
        </div>
    </div>
</div>



<a href="/product/list.php">목록</a>

<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>
