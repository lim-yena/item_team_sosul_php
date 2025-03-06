
<!-- 모달창 -->
<div class="modal-overlay_sy position-fixed start-0 top-0 h-100 bg-white w-100 d-none" id="modal_sy">
    <!-- 검색창 -->
    
   
    <div class="modal-content_sy">
            <div></div>
            <h3>검색</h3>
            <button class="close-btn" id="closeModal">&times;</button>
    </div>
    <div class="tab-tab_sy">
        <div class="d-flex flex-column syinput">
            <div class="syinput">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M15.4667 9.5625C15.4667 12.858 12.8077 15.525 9.53333 15.525C6.25896 15.525 3.6 12.858 3.6 9.5625C3.6 6.26698 6.25896 3.6 9.53333 3.6C12.8077 3.6 15.4667 6.26698 15.4667 9.5625Z" stroke="#3F422F" stroke-width="1.2"/>
                    <line y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 13.2667 14.25)" stroke="#3F422F" stroke-width="1.2"/>
                </svg>
            <input type="text" class="rounded-input_sy" placeholder="어디로 떠나볼까요?">
        </div>

        </div>
         <!-- 탭 메뉴 -->
        <div class="tabs_sy">
            <button class="tab-btn active" data-tab="tab1"> 어디로 갈까요?
                <!-- 비활성화된 아이콘 -->
                <svg class="icon-unselected_sy" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <g id="top">
                        <path id="Vector" d="M9.11768 0.941162L4.99239 5.05881" stroke="#3F422F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path id="Vector_2" d="M4.99243 5.05881L0.882425 0.941162" stroke="#3F422F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </g>
                </svg>
                <!-- 활성화된 아이콘 -->
                <svg class="icon-selected_sy" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none" style="display: none;">
                    <g id="top">
                        <path id="Vector" d="M9.11768 0.941162L4.99239 5.05881" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path id="Vector_2" d="M4.99243 5.05881L0.882425 0.941162" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </g>
                </svg>
            </button>

            <button class="tab-btn" data-tab="tab2"> 언제 갈까요?
                <!-- 비활성화된 아이콘 -->
                <svg class="icon-unselected_sy" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none">
                        <g id="top">
                        <path id="Vector" d="M9.11768 0.941162L4.99239 5.05881" stroke="#3F422F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path id="Vector_2" d="M4.99243 5.05881L0.882425 0.941162" stroke="#3F422F" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </g>
                </svg>
                <!-- 활성화된 아이콘 -->
                <svg class="icon-selected_sy" xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" fill="none" style="display: none;">
                    <g id="top">
                        <path id="Vector" d="M9.11768 0.941162L4.99239 5.05881" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                        <path id="Vector_2" d="M4.99243 5.05881L0.882425 0.941162" stroke="white" stroke-width="1.2" stroke-miterlimit="10" stroke-linecap="round"/>
                    </g>
                </svg>
            </button>
        </div>


    </div>
    <!-- 탭 내용 -->
    <div class="tab-content_sy d-block" id="tab1">
            <div class="syinput">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M15.4667 9.5625C15.4667 12.858 12.8077 15.525 9.53333 15.525C6.25896 15.525 3.6 12.858 3.6 9.5625C3.6 6.26698 6.25896 3.6 9.53333 3.6C12.8077 3.6 15.4667 6.26698 15.4667 9.5625Z" stroke="#3F422F" stroke-width="1.2"/>
                    <line y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 13.2667 14.25)" stroke="#3F422F" stroke-width="1.2"/>
                </svg>
                <input type="text" class="rounded-input_sy" placeholder="지역을 검색해보세요">
             </div>
        <div class="tab-container_sy">
            <div class="tabs_sy2all">
            <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab1_sy">
                <span>전체</span>
                </label>
            </div>
            <div class="tabs_sy2">
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab1_sy">
                <span>제주</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab2_sy">
                <span>강원</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab3_sy">
                <span>경상</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab4_sy">
                <span>서울</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab5_sy">
                <span>전라</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab6_sy">
                <span>경기</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab7_sy">
                <span>충청</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab8_sy">
                <span>부산</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab9_sy">
                <span>인천</span>
                </label>
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab10_sy">
                    <span>광주</span>
                </div>
        </div>
    </div>

    <div class="tab-content_sy" id="tab2" >
        <input type="date">
        <div class= "sy_date d-none">
            <div class="calendar_sy">
                <input type="date">
            </div>
            
        </div>
    </div>

    <div class="bottom_sy">
        <button class="reset_sy" data-des="초기화버튼">
        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect x="0.5" y="0.5" width="39" height="39" rx="4.5" stroke="#DDDDDD"/>
        <path d="M25.3713 13.647L25.6179 16.7449" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
        <path d="M25.618 16.7451L22.5308 16.4878" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
        <path d="M26.6149 19.5644C26.9044 21.5368 26.2934 23.6057 24.7712 25.1278C22.2199 27.6791 18.0929 27.6791 15.5524 25.1278C13.0118 22.5766 13.0118 18.4496 15.5524 15.8983C18.0929 13.3471 22.2307 13.3471 24.7712 15.8983L25.2643 16.3914" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
        </svg>
        </button>
        <button class="search-btn_sy">검색하기</button>
    </div>
</div>