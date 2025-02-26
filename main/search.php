<div class="search-box d-flex  jcc d-none d-lg-flex ">
    <!-- 배경처리 -->
    
    <div class="search-container d-none d-lg-flex aic basic_txt white"> 
        <div class="topwhere basic_txt organic">어디갈까요? 
            <button class="openModal d-flex aic sub_txt">
            <svg xmlns="//www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                <path d="M19.4253 8.4061C19.4253 4.45249 16.0986 1.29641 12.1646 1.73486C9.18381 2.0637 6.77338 4.50541 6.40538 7.55943C6.19194 9.32835 6.65562 10.9763 7.55723 12.2803L11.9622 19.3447C12.4186 19.9985 13.3643 19.9985 13.8206 19.3447L18.2256 12.2803C18.9801 11.1842 19.429 9.84995 19.429 8.4061H19.4253Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M12.8889 11.1279C14.5087 11.1279 15.8218 9.77921 15.8218 8.11548C15.8218 6.45175 14.5087 5.10303 12.8889 5.10303C11.269 5.10303 9.95587 6.45175 9.95587 8.11548C9.95587 9.77921 11.269 11.1279 12.8889 11.1279Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M16.9072 14.6731H21.4447L24.3887 24.6945H1.38867L4.33267 14.6731H9.05411" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            지역을 선택하세요.
            </button>
        </div> 
    

        <div class="topwhen basic_txt organic">언제갈까요?
            <button class="d-flex aic sub_txt">
                <svg xmlns="//www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M23 3.86963H1V23.0001H23V3.86963Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 9.60864H23" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M7 1V5.78261" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 1V5.78261" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M16.7037 13.7759L11.7037 18.5585L8.59375 15.9025" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                날짜를 선택하세요.
            </button>
        </div>
        <div class="close-svg">
            <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" viewBox    ="0 0 22 22" fill="none" >
                <path d="M1 21L21 1M1 1L21 21" stroke="#3F422F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        <button class="search-btn d-flex jic aic basic_txt white">
            <span>검색</span>
        </button>
    </div> 
     <!-- 배경처리 --> 
</div>

<div class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 class="modal-text">어디로 갈까요?</h2>
            <button class= "modal-search-btn d-flex sub_txt gray2 white_bg">
                <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <path d="M15.4667 9.5625C15.4667 12.858 12.8077 15.525 9.53333 15.525C6.25896 15.525 3.6 12.858 3.6 9.5625C3.6 6.26698 6.25896 3.6 9.53333 3.6C12.8077 3.6 15.4667 6.26698 15.4667 9.5625Z" stroke="#3F422F" stroke-width="1.2"/>
                    <line y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 13.2667 14.25)" stroke="#3F422F" stroke-width="1.2"/>
                </svg>지역을 검색해보세요.
            </button>
        <div class="location-box d-flex">
            <ul class ="location-nm sub_txt">
                <li data-value="전체">전체</li>
                <li data-value="차박">차박</li>
                <li data-value="글램핑">글램핑</li>
                <li data-value="카라반">카라반</li>
                <li data-value="오토캠핑">오토캠핑</li>
                <li data-value="텐트캠핑">텐트캠핑</li>
            </ul>

            <div class="divider"></div>
            
            <ul class ="location-chk sub_txt">
                <li data-value="전체">전체</li>
                <li data-value="서울">서울</li>
                <li data-value="대구">대구</li>
                <li data-value="광주">광주</li>
                <li data-value="경기">경기</li>
                <li data-value="경북">경북</li>
                <li data-value="경남">경남</li>
                <li data-value="인천">인천</li>
                <li data-value="울산">울산</li>
                <li data-value="세종">세종</li>
                <li data-value="충북">충북</li>
                <li data-value="충남">충남</li>
                <li data-value="전북">전북</li>
                <li data-value="전남">전남</li>
                <li data-value="대전">대전</li>
                <li data-value="강원">강원</li>
                <li data-value="부산">부산</li>
                <li data-value="제주">제주</li>
            </ul>
        </div>
        <div class="modal-btn-set d-flex">
            <button class="modal-btn-reset white_bg">          
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                <path d="M24.6099 8L24.9591 12.3888" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M24.959 12.3889L20.5854 12.0244" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                <path d="M26.3713 16.3828C26.7813 19.1771 25.9157 22.108 23.7593 24.2644C20.145 27.8787 14.2984 27.8787 10.6993 24.2644C7.10023 20.6501 7.10023 14.8035 10.6993 11.1892C14.2984 7.57495 20.1602 7.57495 23.7593 11.1892L24.4579 11.8878" stroke="#3F422F" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                </svg>
            </button> 
            <button class="modal-btn-search panBlack_bg">          
                <span>검색하기</span>
            </button>
        </div>  
    </div>
</div>

<div class="mo-search container_full d-lg-none d-flex jcb aic white_bg">
    <button class="mo-search-btn container_full white_bg point_txt">
        <svg xmlns="//www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
            <path d="M15.4667 9.5625C15.4667 12.858 12.8077 15.525 9.53333 15.525C6.25896 15.525 3.6 12.858 3.6 9.5625C3.6 6.26698 6.25896 3.6 9.53333 3.6C12.8077 3.6 15.4667 6.26698 15.4667 9.5625Z" stroke="#3F422F" stroke-width="1.2"/>
            <line y1="-0.6" x2="5.29153" y2="-0.6" transform="matrix(0.70553 0.70868 -0.70553 0.70868 13.2667 14.25)" stroke="#3F422F" stroke-width="1.2"/>
        </svg>
        어디로 떠나볼까요?
        </button>
</div> 

