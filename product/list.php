
<?php 
include_once("../config.php");
include_once(ROOT_DIR."/layout/top.php");
// include_once(ROOT_DIR."/layout/lnb.php");
?>

<div class="product_list">
    <div class="container">
        <div class="sub_filter">
            <div class="sub_filter_in d-flex">
                <a href="" class="icon_box">
                    <svg width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="search">
                            <path id="Ellipse 1" d="M12.4667 6.5625C12.4667 9.85802 9.80771 12.525 6.53333 12.525C3.25896 12.525 0.6 9.85802 0.6 6.5625C0.6 3.26698 3.25896 0.6 6.53333 0.6C9.80771 0.6 12.4667 3.26698 12.4667 6.5625Z" stroke="#332E2A" stroke-width="1.2"/>
                            <line id="Line 75" y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 10.2666 11.25)" stroke="#332E2A" stroke-width="1.2"/>
                        </g>
                    </svg>
                    <span>장소</span>
                </a>
                <a href="" class="icon_box">
                <svg width="24" height="24" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M28 7.83997H6V27.04H28V7.83997Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6 13.6H28" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 4.95996V9.75996" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M22 4.95996V9.75996" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.11 17.7823L16.11 22.5823L13 19.9167" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>일정</span>
                </a>
                <a href="" class="icon_box">
                    <svg width="26" height="26" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.8739 22.4333V28.6102" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M23.4783 16.3592C23.113 16.2306 22.7217 16.1534 22.3174 16.1534H12.3783C10.513 16.1534 9 17.6461 9 19.4863V28.7131H25.6957V19.4863C25.6957 18.0579 24.7696 16.8354 23.4783 16.3592Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.9261 22.4333V28.6102" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M21.2608 9.86059C21.2608 11.9968 19.513 13.7212 17.3478 13.7212C15.1956 13.7212 13.4348 11.9968 13.4348 9.86059C13.4348 7.7244 15.1826 6 17.3478 6C19.5 6 21.2608 7.7244 21.2608 9.86059Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>인원</span>
                </a>
                <a class="search_icon">
                    <svg width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="search">
                            <path id="Ellipse 1" d="M12.4667 6.5625C12.4667 9.85802 9.80771 12.525 6.53333 12.525C3.25896 12.525 0.6 9.85802 0.6 6.5625C0.6 3.26698 3.25896 0.6 6.53333 0.6C9.80771 0.6 12.4667 3.26698 12.4667 6.5625Z" stroke="#fff" stroke-width="1.2"/>
                            <line id="Line 75" y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 10.2666 11.25)" stroke="#fff" stroke-width="1.2"/>
                        </g>
                    </svg>
                </a>
            </div>
        </div>
        <ul class="h_main_quickmenu">
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_animal.svg" alt="반려동물 바로가기"><span>반려동물</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M37.5668 20.6668C37.5668 18.2977 36.9971 16.2064 36.1333 14.7446C35.255 13.2582 34.1994 12.6002 33.2502 12.6002C32.3009 12.6002 31.2453 13.2582 30.367 14.7446C29.5032 16.2064 28.9335 18.2977 28.9335 20.6668C28.9335 23.036 29.5032 25.1272 30.367 26.589C31.2453 28.0754 32.3009 28.7335 33.2502 28.7335C34.1994 28.7335 35.255 28.0754 36.1333 26.589C36.9971 25.1272 37.5668 23.036 37.5668 20.6668Z" stroke="#777" stroke-width="2.2"></path>
                        <path d="M22.3959 48.2464C23.1303 50.2746 25.2206 51.6665 27.4945 51.6665C30.1638 51.6665 32.4801 49.6781 32.8332 47.2257C33.1721 49.6781 35.5025 51.6665 38.1718 51.6665C40.4457 51.6665 42.536 50.2746 43.2704 48.2464C44.711 44.2828 41.9852 40.5976 38.9063 38.1452C37.9459 37.3763 33.61 33.9297 32.8897 33.3729C32.8755 33.3597 32.8473 33.3332 32.8332 33.3332C32.8332 33.3332 32.7908 33.3597 32.7767 33.3729C32.0564 33.943 27.7205 37.3896 26.7601 38.1452C23.6812 40.5976 20.9553 44.2828 22.3959 48.2464Z" stroke="#777" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M50.6121 28.4341C51.349 26.8186 51.5694 25.2083 51.382 23.9369C51.1927 22.6525 50.6248 21.8634 49.9261 21.5447C49.2275 21.226 48.2593 21.3144 47.1652 22.0134C46.0822 22.7053 45.0107 23.9273 44.2738 25.5428C43.5369 27.1582 43.3165 28.7685 43.5039 30.0399C43.6932 31.3243 44.2611 32.1134 44.9597 32.4321C45.6584 32.7508 46.6266 32.6624 47.7206 31.9634C48.8036 31.2715 49.8752 30.0495 50.6121 28.4341Z" stroke="#777" stroke-width="2.2"></path>
                        <path d="M22.2789 25.4009C23.0158 27.0164 23.2362 28.6266 23.0488 29.8981C22.8595 31.1824 22.2915 31.9716 21.5929 32.2903C20.8942 32.6089 19.926 32.5205 18.832 31.8216C17.749 31.1296 16.6774 29.9077 15.9405 28.2922C15.2036 26.6767 14.9832 25.0665 15.1706 23.795C15.3599 22.5107 15.9278 21.7215 16.6265 21.4028C17.3251 21.0841 18.2934 21.1726 19.3874 21.8715C20.4704 22.5634 21.542 23.7854 22.2789 25.4009Z" stroke="#777" stroke-width="2.2"></path>
                        <circle cx="33" cy="32.5" r="23.9" stroke="#777" stroke-width="2.2"></circle>
                    </svg>
                    <span>반려동물</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_caravan.svg" alt="카라반 바로가기"><span>카라반</span></a> -->
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                    <ellipse cx="45.5" cy="48.4999" rx="5" ry="5.33341" stroke="#777" stroke-width="2.3"></ellipse>
                    <ellipse cx="20.5" cy="48.4999" rx="5" ry="5.33341" stroke="#777" stroke-width="2.3"></ellipse>
                    <path d="M8 21.8333V35.0255C8 41.3776 8 44.5537 9.83058 46.527C11.0478 47.8391 12.7582 48.2788 15.5 48.4261M34.0676 11.1665C36.3509 11.9662 38.141 13.896 38.8829 16.3573C39.25 17.5752 39.25 19.08 39.25 22.0897C39.25 24.0961 39.25 25.0993 39.4947 25.9112C39.9893 27.5521 41.1827 28.8386 42.7049 29.3718C43.4581 29.6356 44.3887 29.6356 46.25 29.6356H58V35.0255C58 41.3776 58 44.5537 56.1694 46.527C54.9522 47.8391 53.2418 48.2788 50.5 48.4261M25.5 48.5003H40.5" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M16 16.833H31M16 25.458H26" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M39.25 16.499H43.8031C47.4414 16.499 49.2606 16.499 50.7411 17.4423C52.2215 18.3855 53.084 20.094 54.8089 23.5111L58 29.8325" stroke="#777" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                    <span>카라반</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_beach.svg" alt="해수욕장 바로가기"><span>해수욕장 근처</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M8 42.9608C8 42.9608 12.4883 41.0264 20.5 41.0264C33 41.0264 43 48.7632 58 48.7632" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 56.5H58" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M34.4851 10.6661C27.3709 12.7707 22.7468 20.0138 23.0107 27.8095C23.0656 29.4286 23.093 30.2382 23.7637 30.5962C24.4343 30.9542 25.1305 30.4468 26.5227 29.4319L29.6266 27.1693C30.0928 26.8294 30.6462 26.6657 31.2038 26.7027L38.4943 27.1858L44.5893 22.7428C45.0554 22.403 45.6088 22.2393 46.1664 22.2762L49.9698 22.5283C51.6017 22.6364 52.4177 22.6905 52.8228 22.0424C53.2279 21.3943 52.8985 20.6936 52.2398 19.2922C48.9639 12.3225 41.6382 8.54996 34.4851 10.6661Z" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M39.25 26.8421L44.25 46.1842M33.7143 10.0789L33 7.5" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>해수욕장 근처</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_mountain.svg" alt="마운틴 뷰 바로가기"><span>마운틴 뷰</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M37.3821 12.3C37.388 12.3 37.394 12.3 37.4 12.3C39.3882 12.3 41 13.9118 41 15.9C41 17.8882 39.3882 19.5 37.4 19.5H29C26.7909 19.5 25 17.7091 25 15.5C25 13.4203 26.5872 11.7113 28.6163 11.5182M37.3821 12.3C37.3939 12.1683 37.4 12.0349 37.4 11.9C37.4 9.46995 35.4301 7.5 33 7.5C30.6986 7.5 28.8099 9.2669 28.6163 11.5182M37.3821 12.3C37.3003 13.2076 36.9429 14.0357 36.3943 14.7M28.6163 11.5182C28.7426 11.5061 28.8706 11.5 29 11.5C29.9007 11.5 30.7318 11.7977 31.4004 12.3" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M28.2 21.8999H29.8" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                        <path d="M32.2 21.8999H33.8" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                        <path d="M36.2 21.8999H37.8" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                        <path d="M27.6666 22.8999L14.3333 52.8999M38.3333 22.8999L51.6666 52.8999" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M26 28.8999C27.6589 31.9241 30.3997 33.8999 33.5 33.8999C36.6003 33.8999 39.3411 31.9241 41 28.8999" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                    </svg>
                    <span>마운틴 뷰</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_monthcoupon.svg" alt="이달의 쿠폰 바로가기"><span>이달의 쿠폰</span></a> -->
                <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                    <path d="M33.6526 35.7649C29.24 35.5417 25.9907 31.7942 26.395 27.3944C26.7994 22.9947 30.7044 19.6089 35.117 19.8321C39.5296 20.0552 42.779 23.8028 42.3746 28.2025C41.9702 32.6023 38.0653 35.9881 33.6526 35.7649Z" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <circle cx="4" cy="4" r="2.9" transform="matrix(1 0 0 -1 44.5 18.1924)" stroke="#3F422F" stroke-width="2.2"></circle>
                    <path d="M37.8077 30.5912C36.962 30.9355 35.9609 31.1067 34.9086 31.0428C32.1733 30.8766 30.1278 29.1844 30.34 27.263C30.5521 25.3417 32.9416 23.9189 35.6769 24.0851C36.4365 24.1312 37.1429 24.2951 37.7626 24.5488" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M10.5 44.1133H16.3949C17.119 44.1133 17.8331 44.2267 18.4807 44.4446L23.5071 46.1359C24.1548 46.3538 24.8689 46.4672 25.5929 46.4672H28.1594C30.6416 46.4672 32.6539 47.8214 32.6539 49.4918C32.6539 49.5593 32.5874 49.6186 32.4909 49.6372L26.2363 50.8398C25.1143 51.0555 23.9129 50.9804 22.8692 50.6292L17.496 48.8212M32.6539 48.3928L43.9592 45.9773C45.9634 45.5431 48.1298 46.058 49.3852 47.2669C50.293 48.1411 49.9234 49.3928 48.6009 49.9235L30.101 57.3465C28.9243 57.8186 27.5362 57.9338 26.2419 57.6667L10.5 54.4183" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M35.3332 8.83646C36.4539 7.71578 37.9962 7.12108 39.5791 7.19922L49.6656 7.69709C52.5481 7.83937 54.853 10.1442 54.9953 13.0267L55.4932 23.1133C55.5713 24.6962 54.9766 26.2384 53.8559 27.3591L40.2148 41.0003C37.292 43.9231 32.5532 43.9231 29.6304 41.0003L21.6921 33.062C18.7693 30.1392 18.7693 25.4004 21.6921 22.4776L35.3332 8.83646Z" stroke="#3F422F" stroke-width="2.2"></path>
                </svg>
                    <span>이달의 쿠폰</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_child.svg" alt="아이와 함께 바로가기"><span>아이와 함께</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <circle cx="21" cy="32.5" r="15" stroke="#777" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <path d="M24 23.1069C24 23.1069 22.3274 23.8571 21.1525 23.2848C19.7197 22.5868 18.2986 19.6693 21.1371 17.5" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.0135 28H15M27 28H26.9865" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15 37C16.3682 38.8217 18.5465 40 21 40C23.4535 40 25.6318 38.8217 27 37" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M58.3333 30.25C58.3333 30.25 60 34 60 38.875C60 40.6317 59.7836 42.2424 59.5067 43.5841C59.1587 45.2705 58.9847 46.1138 58.0584 46.8069C57.132 47.5 56.0279 47.5 53.8198 47.5H46.1802C43.9721 47.5 42.868 47.5 41.9416 46.8069C41.0153 46.1138 40.8413 45.2705 40.4933 43.5841C40.2164 42.2424 40 40.6317 40 38.875C40 34 41.6667 30.25 41.6667 30.25" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M45.71 25.4603L45.436 24.395H45.436L45.71 25.4603ZM44.5834 25.75L44.8574 26.8153H44.8574L44.5834 25.75ZM41.6667 30.25H40.5667C40.5667 30.8575 41.0592 31.35 41.6667 31.35V30.25ZM58.3334 30.25V31.35C58.9409 31.35 59.4334 30.8575 59.4334 30.25H58.3334ZM55.4167 25.75L55.6907 24.6847H55.6907L55.4167 25.75ZM54.2902 25.4603L54.0162 26.5257L54.2902 25.4603ZM53.0127 21.7856L52.0399 21.2722V21.2722L53.0127 21.7856ZM46.9875 21.7856L46.0146 22.299L46.9875 21.7856ZM47.7667 20.5C47.7667 19.5568 48.6548 18.6 50.0001 18.6V16.4C47.6635 16.4 45.5667 18.1295 45.5667 20.5H47.7667ZM50.0001 18.6C51.3454 18.6 52.2334 19.5568 52.2334 20.5H54.4334C54.4334 18.1295 52.3367 16.4 50.0001 16.4V18.6ZM45.436 24.395L44.3095 24.6847L44.8574 26.8153L45.9839 26.5257L45.436 24.395ZM40.5667 29.23V30.25H42.7667V29.23H40.5667ZM41.6667 31.35H58.3334V29.15H41.6667V31.35ZM59.4334 30.25V29.23H57.2334V30.25H59.4334ZM55.6907 24.6847L54.5641 24.395L54.0162 26.5257L55.1428 26.8153L55.6907 24.6847ZM52.2334 20.5C52.2334 20.7735 52.1657 21.0338 52.0399 21.2722L53.9855 22.299C54.271 21.758 54.4334 21.1467 54.4334 20.5H52.2334ZM47.9603 21.2722C47.8345 21.0338 47.7667 20.7735 47.7667 20.5H45.5667C45.5667 21.1467 45.7291 21.758 46.0146 22.299L47.9603 21.2722ZM48.6001 23.3245C48.6001 22.4705 48.2014 21.729 47.9603 21.2722L46.0146 22.299C46.2896 22.8201 46.4001 23.0957 46.4001 23.3245H48.6001ZM59.4334 29.23C59.4334 27.0433 57.8333 25.2356 55.6907 24.6847L55.1428 26.8153C56.453 27.1522 57.2334 28.1849 57.2334 29.23H59.4334ZM53.6001 23.3245C53.6001 23.0957 53.7105 22.8201 53.9855 22.299L52.0399 21.2722C51.7988 21.729 51.4001 22.4705 51.4001 23.3245H53.6001ZM44.3095 24.6847C42.1668 25.2356 40.5667 27.0433 40.5667 29.23H42.7667C42.7667 28.1849 43.5472 27.1522 44.8574 26.8153L44.3095 24.6847ZM54.5641 24.395C53.9208 24.2295 53.6001 23.7454 53.6001 23.3245H51.4001C51.4001 24.887 52.5404 26.1462 54.0162 26.5257L54.5641 24.395ZM45.9839 26.5257C47.4597 26.1462 48.6001 24.887 48.6001 23.3245H46.4001C46.4001 23.7454 46.0794 24.2295 45.436 24.395L45.9839 26.5257Z" fill="#777"></path>
                        <path d="M55 35.5H59.1667M55 41.5H59.1667" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>아이와 함께</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_new.svg" alt="신규오픈바로가기"><span>신규오픈</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M52.4286 56.4998L13.5714 56.4998C12.5086 56.4998 11.9772 56.4998 11.5412 56.3863C10.358 56.078 9.43386 55.1795 9.11683 54.0292C9 53.6053 9 53.0887 9 52.0554C9 49.9888 9 48.9555 9.23365 48.1077C9.86771 45.8071 11.716 44.0101 14.0824 43.3937C14.9544 43.1665 16.0172 43.1665 18.1429 43.1665H47.8571C49.9828 43.1665 51.0456 43.1665 51.9176 43.3937C54.284 44.0101 56.1323 45.8071 56.7663 48.1077C57 48.9555 57 49.9888 57 52.0554C57 53.0887 57 53.6053 56.8832 54.0292C56.5661 55.1795 55.642 56.078 54.4588 56.3863C54.0228 56.4998 53.4914 56.4998 52.4286 56.4998Z" stroke="#777" stroke-width="2.2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M40.4854 43.3417C40.582 43.9415 41.1466 44.3493 41.7464 44.2527C42.3462 44.156 42.754 43.5914 42.6573 42.9916L40.4854 43.3417ZM23.3425 42.9916C23.2459 43.5914 23.6537 44.156 24.2535 44.2527C24.8533 44.3493 25.4178 43.9415 25.5145 43.3417L23.3425 42.9916ZM39.9729 33.2485L38.8816 33.3866C38.8832 33.3989 38.885 33.4112 38.8869 33.4235L39.9729 33.2485ZM43.6577 26.1517L42.8902 25.3638L43.6577 26.1517ZM26.0269 33.2484L27.1129 33.4235C27.1149 33.4112 27.1167 33.3989 27.1182 33.3866L26.0269 33.2484ZM22.3421 26.1517L23.1097 25.3638H23.1097L22.3421 26.1517ZM20.3856 19.3333C20.3856 14.1854 25.7773 9.6 32.9999 9.6V7.4C25.0741 7.4 18.1856 12.5151 18.1856 19.3333H20.3856ZM32.9999 9.6C40.2225 9.6 45.6142 14.1854 45.6142 19.3333H47.8142C47.8142 12.5151 40.9257 7.4 32.9999 7.4V9.6ZM42.6573 42.9916L41.0589 33.0734L38.8869 33.4235L40.4854 43.3417L42.6573 42.9916ZM45.6142 19.3333C45.6142 21.5751 44.6238 23.675 42.8902 25.3638L44.4253 26.9397C46.5143 24.9047 47.8142 22.2593 47.8142 19.3333H45.6142ZM25.5145 43.3417L27.1129 33.4235L24.941 33.0734L23.3425 42.9916L25.5145 43.3417ZM23.1097 25.3638C21.3761 23.675 20.3856 21.5751 20.3856 19.3333H18.1856C18.1856 22.2593 19.4856 24.9047 21.5746 26.9397L23.1097 25.3638ZM27.1182 33.3866C27.3248 31.755 26.8231 30.247 26.0464 28.9264C25.2733 27.6119 24.1879 26.4142 23.1097 25.3638L21.5746 26.9397C22.6004 27.939 23.5236 28.9767 24.15 30.0417C24.7728 31.1006 25.0615 32.1161 24.9357 33.1103L27.1182 33.3866ZM41.0642 33.1103C40.9384 32.1161 41.227 31.1006 41.8498 30.0417C42.4762 28.9767 43.3995 27.939 44.4253 26.9397L42.8902 25.3638C41.8119 26.4142 40.7266 27.6119 39.9535 28.9264C39.1768 30.247 38.6751 31.755 38.8816 33.3866L41.0642 33.1103Z" fill="#777"></path>
                        <path d="M39.8571 35.1665H26.1428" stroke="#777" stroke-width="2.2" stroke-linecap="round"></path>
                        <path d="M34.123 15.3665L35.2668 17.4957C35.4228 17.7921 35.8388 18.0764 36.1897 18.1309L38.263 18.4515C39.5889 18.6571 39.9008 19.5524 38.9454 20.4355L37.3336 21.9356C37.0606 22.1897 36.9112 22.6796 36.9956 23.0305L37.4571 24.8875C37.8211 26.3574 36.9826 26.926 35.5853 26.1578L33.642 25.0871C33.2911 24.8935 32.7126 24.8935 32.3552 25.0871L30.4119 26.1578C29.021 26.926 28.1761 26.3513 28.5401 24.8875L29.0015 23.0305C29.086 22.6796 28.9365 22.1897 28.6636 21.9356L27.0517 20.4355C26.1028 19.5524 26.4083 18.6571 27.7342 18.4515L29.8074 18.1309C30.1519 18.0764 30.5679 17.7921 30.7238 17.4957L31.8677 15.3665C32.4916 14.2112 33.5055 14.2112 34.123 15.3665Z" stroke="#777" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>신규오픈</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_only.svg" alt="오직여기바로가기"><span>오직여기</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M40.4695 21.7207C39.0561 24.2227 36.4845 25.896 33.5464 25.896C29.0856 25.896 25.4695 22.0388 25.4695 17.2806C25.4695 14.1467 27.0382 11.4036 29.3838 9.896" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                        <path d="M37.9695 12.5625H37.9919" stroke="#3F422F" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M32.9148 49.312L35.0822 44.5427C35.3484 43.957 35.7166 43.4272 36.1575 42.9954L39.5797 39.6442C40.0206 39.2124 40.3887 38.6826 40.6549 38.0968L41.5986 36.0204C42.5112 34.0122 44.5114 32.957 46.066 33.6635C46.1289 33.6921 46.1596 33.771 46.1414 33.8569L44.961 39.4257C44.7493 40.4247 44.2376 41.3649 43.527 42.0608L39.8687 45.6433M45.0432 33.1987L46.9518 23.0305C47.2845 21.2254 48.5603 19.6904 50.1471 19.1861C51.2944 18.8214 52.3235 19.6499 52.3311 20.9443L52.4378 39.0512C52.4446 40.2028 52.0414 41.3746 51.317 42.3088L42.5057 53.6707" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M33.0854 49.312L30.918 44.5427C30.6518 43.957 30.2837 43.4272 29.8427 42.9954L26.4206 39.6442C25.9797 39.2124 25.6115 38.6826 25.3453 38.0968L24.4017 36.0204C23.489 34.0122 21.4889 32.957 19.9342 33.6635C19.8714 33.6921 19.8406 33.771 19.8588 33.8569L21.0392 39.4257C21.251 40.4247 21.7626 41.3649 22.4732 42.0608L26.1315 45.6433M20.957 33.1987L19.0485 23.0305C18.7158 21.2254 17.44 19.6904 15.8532 19.1861C14.7059 18.8214 13.6768 19.6499 13.6691 20.9443L13.5624 39.0512C13.5556 40.2028 13.9588 41.3746 14.6832 42.3088L23.4945 53.6707" stroke="#3F422F" stroke-width="2.3" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>오직여기</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_night.svg" alt="야경바로가기"><span>야경</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M47.6631 11.3682L49.3303 14.7301C49.5577 15.1981 50.1639 15.647 50.6754 15.7329L53.6972 16.2391C55.6296 16.5639 56.0843 17.9774 54.6918 19.3718L52.3426 21.7405C51.9448 22.1416 51.7269 22.9152 51.85 23.4692L52.5226 26.4013C53.0531 28.7222 51.8311 29.62 49.7945 28.407L46.9622 26.7165C46.4506 26.4109 45.6076 26.4109 45.0866 26.7165L42.2543 28.407C40.2271 29.62 38.9957 28.7126 39.5261 26.4013L40.1987 23.4692C40.3218 22.9152 40.104 22.1416 39.7061 21.7405L37.3569 19.3718C35.9739 17.9774 36.4191 16.5639 38.3515 16.2391L41.3733 15.7329C41.8753 15.647 42.4816 15.1981 42.7089 14.7301L44.3761 11.3682C45.2855 9.54394 46.7632 9.54394 47.6631 11.3682Z" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M10.5 32.0379C10.5 44.7195 20.7805 55 33.4621 55C43.897 55 52.7062 48.0395 55.5 38.5081C52.1347 40.953 47.9936 42.3951 43.5157 42.3951C32.2431 42.3951 23.1049 33.2569 23.1049 21.9843C23.1049 17.5064 24.547 13.3653 26.9919 10C17.4605 12.7938 10.5 21.603 10.5 32.0379Z" stroke="#3F422F" stroke-width="2.2" stroke-linejoin="round"></path>
                    </svg>
                    <span>야경</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_pool.svg" alt="수영장바로가기"><span>수영장</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M58 54.4999H55.5C51.8716 54.4999 48.6949 52.1141 48 48.9443C47.3051 52.1141 44.1284 54.4999 40.5 54.4999C36.8716 54.4999 33.6949 52.1141 33 48.9443C32.3051 52.1141 29.1284 54.4999 25.5 54.4999C21.8716 54.4999 18.6949 52.1141 18 48.9443C17.3051 52.1141 14.1284 54.4999 10.5 54.4999H8" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M49 10.5L48.2936 10.7271C44.7735 11.8585 43.0134 12.4243 42.0067 13.7711C41 15.118 41 16.907 41 20.485L41 46.5" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M29 10.5L28.2936 10.7271C24.7735 11.8585 23.0134 12.4243 22.0067 13.7711C21 15.118 21 16.907 21 20.485L21 46.5" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21 20.5H41M21 31H41M21 41.5H41" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    <span>수영장</span>
                </a>
            </li>
            <li>
                <!-- <a href=""><img src="//item-team-sosul.vercel.app/img/icon/quickicon_ocean.svg" alt="바다근처바로가기"><span>바다근처</span></a> -->
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="66" height="65" viewBox="0 0 66 65" fill="none">
                        <path d="M25.413 10.8945L26.2616 11.5805L26.2616 11.5805L25.413 10.8945ZM17.5669 19.0647L16.8487 18.2427C16.4747 18.5723 16.3623 19.108 16.574 19.5521L17.5669 19.0647ZM29.0667 26.2079C29.6693 26.27 30.2158 25.83 30.2874 25.225C30.359 24.6201 29.9285 24.0793 29.3258 24.0171L29.0667 26.2079ZM26.9446 9.47829L27.2381 10.5347L27.2381 10.5347L26.9446 9.47829ZM18.182 18.269C17.6763 17.9409 16.9944 18.0899 16.6589 18.602C16.3235 19.114 16.4615 19.7951 16.9672 20.1232L18.182 18.269ZM29.7449 21.6518C30.3507 21.6065 30.813 21.0782 30.7774 20.4718C30.7419 19.8653 30.2219 19.4103 29.6161 19.4555L29.7449 21.6518ZM24.5644 10.2085C23.0821 12.0374 20.4064 15.1083 16.8487 18.2427L18.2851 19.8867C21.9634 16.6458 24.7258 13.4756 26.2616 11.5805L24.5644 10.2085ZM16.574 19.5521C17.5081 21.5115 18.7426 23.028 20.7671 24.1265C22.7408 25.1973 25.3895 25.8285 29.0667 26.2079L29.3258 24.0171C25.7433 23.6475 23.4345 23.0528 21.8369 22.186C20.2902 21.3468 19.34 20.2139 18.5598 18.5773L16.574 19.5521ZM26.2616 11.5805C26.6204 11.1378 26.8316 10.88 27.0094 10.7055C27.1644 10.5535 27.2212 10.5396 27.2381 10.5347L26.6512 8.4219C26.1645 8.56474 25.7982 8.83619 25.4846 9.14389C25.1939 9.42915 24.891 9.80554 24.5644 10.2085L26.2616 11.5805ZM29.8346 10.3671C30.445 9.44184 30.4448 9.44172 30.4446 9.4416C30.4445 9.44156 30.4443 9.44144 30.4442 9.44134C30.4439 9.44116 30.4436 9.44096 30.4433 9.44074C30.4426 9.4403 30.4418 9.43978 30.4409 9.4392C30.4391 9.43802 30.4368 9.43656 30.4341 9.43482C30.4287 9.43134 30.4216 9.42675 30.4127 9.42112C30.395 9.40987 30.3705 9.39446 30.3399 9.37559C30.2787 9.33789 30.1925 9.28604 30.0865 9.22558C29.8762 9.1056 29.5802 8.94717 29.242 8.79777C28.9082 8.65027 28.5061 8.49935 28.0879 8.40956C27.6854 8.32313 27.1665 8.27063 26.6512 8.4219L27.2381 10.5347C27.2374 10.5349 27.2651 10.5271 27.3319 10.5285C27.398 10.5298 27.4857 10.5398 27.5952 10.5633C27.8178 10.6111 28.0723 10.7018 28.329 10.8152C28.5814 10.9267 28.8099 11.0486 28.9765 11.1437C29.059 11.1907 29.1244 11.2301 29.1676 11.2568C29.1892 11.2701 29.2051 11.2801 29.2148 11.2863C29.2197 11.2893 29.2229 11.2914 29.2245 11.2925C29.2253 11.293 29.2257 11.2932 29.2257 11.2932C29.2257 11.2932 29.2256 11.2931 29.2253 11.293C29.2252 11.2929 29.2251 11.2928 29.2249 11.2927C29.2248 11.2926 29.2247 11.2925 29.2246 11.2925C29.2245 11.2924 29.2243 11.2923 29.8346 10.3671ZM16.9672 20.1232C17.9135 20.7373 19.1203 21.1169 20.3445 21.3598C21.583 21.6056 22.9186 21.7263 24.1764 21.7775C26.6922 21.8801 28.9906 21.7081 29.7449 21.6518L29.6161 19.4555C28.8736 19.511 26.6818 19.6742 24.3003 19.577C23.1094 19.5285 21.8946 19.4156 20.804 19.1992C19.6992 18.98 18.7984 18.669 18.182 18.269L16.9672 20.1232Z" fill="#777"></path>
                        <path d="M39.0571 26.6377L9.12256 28.8726C16.7194 30.2437 25.7473 31.0234 31.7715 30.5736C36.2617 30.2384 39.1056 27.4648 39.0571 26.6377Z" stroke="#3F422F" stroke-width="2.2" stroke-linejoin="round"></path>
                        <path d="M28.9696 8.16933C32.5444 13.5558 30.345 24.2847 28.58 27.4199" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M8 39.8291C9.71309 42.9825 11.9276 42.9825 13.6825 39.8291C19.3246 29.4719 24.6989 47.2788 28.6825 39.9459C34.7576 28.9578 39.127 48.015 43.6825 39.8291C49.623 28.9241 53.3238 46.9822 58 41.0021" stroke="#3F422F" stroke-width="2.1" stroke-linecap="round"></path>
                        <path d="M8 49.8291C9.71309 52.9825 11.9276 52.9825 13.6825 49.8291C19.3246 39.4719 24.6989 57.2788 28.6825 49.9459C34.7576 38.9578 39.127 58.015 43.6825 49.8291C49.623 38.9241 53.3238 56.9822 58 51.0021" stroke="#3F422F" stroke-width="2.2" stroke-linecap="round"></path>
                    </svg>
                    <span>바다근처</span>
                </a>
            </li>
        </ul>
        <div class="filter_box">
            <a href="" class="d-flex filter_icon filter_btn">
                <span>필터</span>
            </a>
            <a href="" class="filter_btn">추천순</a>
            <a href="" class="filter_btn">최신순</a>
            <a href="" class="filter_btn">가까운순</a>
            <a href="" class="d-flex reset_icon filter_btn">
            </a>
            <div class="filter_option">
                <div class="filter_option_top">
                    필터
                    <a class="reset">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="39" height="39" rx="4.5" stroke="#DDDDDD"/>
                            <path d="M25.3713 13.647L25.6179 16.7449" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path d="M25.618 16.7451L22.5308 16.4878" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                            <path d="M26.6149 19.5644C26.9044 21.5368 26.2934 23.6057 24.7712 25.1278C22.2199 27.6791 18.0929 27.6791 15.5524 25.1278C13.0118 22.5766 13.0118 18.4496 15.5524 15.8983C18.0929 13.3471 22.2307 13.3471 24.7712 15.8983L25.2643 16.3914" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                        </svg>
                    </a>
                </div>
                <div class="filter_option_btm">
                    <div class="filter_area">
                        <div class="filter_stit">가격범위</div>
                        <div class="middle">
                            <div class="multi-range-slider">
                                <!-- 진짜 슬라이더 -->
                                <input type="range" id="input-left" min="0" max="100" value="25" />
                                <input type="range" id="input-right" min="0" max="100" value="75" />

                                <!-- 커스텀 슬라이더 -->
                                <div class="slider">
                                <div class="track"></div>
                                <div class="range"></div>
                                <div class="thumb left"></div>
                                <div class="thumb right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex filter_area">
                        <div class="filter_input">
                            <div class="filter_stit">최대가격</div>
                            <div class="same_box d-flex">
                                <input type="text" placeholder="0">
                                <span>원</span>
                            </div>
                        </div>
                        <div class="filter_input">
                            <div class="filter_stit">최대가격</div>
                            <div class="same_box d-flex">
                                <input type="text" placeholder="0">
                                <span>원</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex filter_area">
                        <div class="filter_stit">편의시설</div>
                        <div class="d-flex check">
                            <div>
                                <label for="store1">아침식사</label>
                                <input type="checkbox" name="store" id="store1">
                            </div>
                            <div>
                                <label for="store2">저녁식사</label>
                                <input type="checkbox" name="store" id="store2">
                            </div>
                            <div>
                                <label for="store3">수영장</label>
                                <input type="checkbox" name="store" id="store3">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex sub_con_box">
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
            <div class="con_box">
                <a href="/product/view.php" class="con_img_box"><img src="//item-team-sosul.vercel.app/img/image/image1.jpg" alt="캠핑장" class="con_img" /></a>
                <button class="btn_like"></button>
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
        <div class="paging d-flex">
            <div class="prev">
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="59" height="59" rx="9.5" fill="white" stroke="#DDDDDD"/>
                        <path d="M38 40L28 29.9814" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M28 29.9814L38 19.9999" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M30 40L20 29.9814" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M20 29.9814L30 19.9999" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                </a>
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="59" height="59" rx="9.5" fill="white" stroke="#DDDDDD"/>
                        <path d="M34 40L24 29.9814" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M24 29.9814L34 19.9999" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
            <div class="number d-flex">
                <a href="" class="num active">1</a>
                <a href="" class="num">2</a>
                <a href="" class="num">3</a>
                <a href="" class="num">4</a>
                <a href="" class="num">5</a>
            </div>
            <div class="next">
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="59" height="59" rx="9.5" fill="white" stroke="#DDDDDD"/>
                        <path d="M26 20L36 30.0186" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M36 30.0186L26 40.0001" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                </a>
                <a href="">
                    <svg width="40" height="40" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="0.5" width="59" height="59" rx="9.5" fill="white" stroke="#DDDDDD"/>
                        <path d="M22 20L32 30.0186" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M32 30.0186L22 40.0001" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M30 20L40 30.0186" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path d="M40 30.0186L30 40.0001" stroke="#3F422F" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>


<?php include_once(ROOT_DIR."/layout/bottom.php"); ?>