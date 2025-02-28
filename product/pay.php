<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");

?>

<div class="product_pay">
    <div class="maxW overflow-hidden">
        <div class="product_pay_left">
            <!-- 결제하기 예약자정보 -->
            <?php include_once("./pay/top.php"); ?>
            <!--// 결제하기 예약자정보 -->

            <!-- 결제하기 결제수단 -->
            <?php include_once("./pay/means.php"); ?>
            <!-- //결제하기 결제수단 -->

            <!-- 결제하기 환불 규정-->
            <?php include_once("./pay/refund.php"); ?>
            <!-- //결제하기 배치도 -->
            
            <!-- 결제하기 전체동의-->
            <?php include_once("./pay/agree.php"); ?>
            <!--// 결제하기 전체동의 -->
        </div>
        <div class="product_pay_right">
            <div class="sticky_box">
                <!-- 오른쪽 슬라이드 -->
                <?php include_once("./pay/check.php"); ?>
                <!--// 오른쪽 슬라이드 -->
            </div>
        </div>
    </div>
</div>



<a href="/product/list.php">목록</a>

<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>
