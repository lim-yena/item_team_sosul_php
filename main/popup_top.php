

<!-- 모달창 -->
<div class="modal-overlay_sy position-fixed start-0 top-0 h-100 bg-white w-100 d-none" id="modal">
    <!-- 검색창 -->
    
   
    <div class="modal-content_sy">
            <h3>검색</h3>
            <button class="close-btn" id="closeModal">&times;</button>
    </div>
    <div class='d-flex flex-column'>
        <div class="search-box" id="openModal">
            <input type="text" placeholder="어디로 떠나볼까요?" readonly>
        </div>
         <!-- 탭 메뉴 -->
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

        <!-- 날짜 선택 -->
        <div class="calendar_sy">
            <input type="date">
        </div>

        <button class="search-btn_sy">검색하기</button>



    </div>
</div>

