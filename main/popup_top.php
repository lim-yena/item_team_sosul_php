

<!-- 모달창 -->
<div class="modal-overlay_sy position-fixed start-0 top-0 h-100 bg-white w-100 d-none" id="modal">
    <!-- 검색창 -->
    
   
    <div class="modal-content_sy">
            <div></div>
            <h3>검색</h3>
            <button class="close-btn" id="closeModal">&times;</button>
    </div>
    <div class='d-flex flex-column'>
        <div class="search-box" id="openModal">
            <input type="text" placeholder="어디로 떠나볼까요?" readonly>
        </div>
        <div class="syinput">
            <input type="text" placeholder="어디로 떠나볼까요?">
        </div>
    
        </div>
         <!-- 탭 메뉴 -->
        <div>
        </div>

        <div class="tabs_sy">
                <button class="tab-btn active" data-tab="tab1">어디로 갈까요?</button>
                <button class="tab-btn" data-tab="tab2">언제 갈까요?</button>
        </div>
        <!-- 탭 내용 -->
        <div class="tab-content_sy" id="tab1">
        </div>

        <div class="tab-content_sy" id="tab2" style="display: none;">
            <input type="date">
        </div>

        <!-- 지역 검색 -->
        <div class="syinput">
            <input type="text" placeholder="지역을 검색해보세요">
        </div>
        <div class="tab-container_sy">
            <div class="tabs_sy2">
                <label class="tab-checkbox-label">
                <input type="checkbox" class="tab-checkbox" data-tab="tab1_sy">
                <span>강원</span>
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
                </label>
            </div>
        </div>


         <div class=bottom_sy>
            <button class="reset_sy">
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

        <!-- 날짜 선택 -->
        <div class=sy_date>
            <div class="calendar_sy">
                <input type="date">
            </div>
            <div class=bottom_sy_2>
                <button class="reset_sy"></button>
                <button class="search-btn_sy">검색하기</button>
            </div>
        </div>

    </div>
</div>

