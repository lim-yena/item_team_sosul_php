<div class="borderbt_sy">
    <h2 class="sitefont_sy">사이트 선택</h2>
    <div class="site_sy">
        <div class="c1_sy siteC_sy">C1</div>
        <div class="c2_sy siteC_sy">C2</div>
        <div class="c3_sy siteC_sy">C3</div>
        <div class="c4_sy siteC_sy">C4</div>
        <div class="c5_sy siteC_sy">C5</div>
        <div class="c6_sy siteC_sy">C6</div>
        <div class="c7_sy siteC_sy">C7</div>
        <div class="c8_sy siteC_sy">C8</div>
    </div>
</div>

<div class="borderbt_sy">
    <div class="syre_container">
        <div class="checkinout_sy">
            <div class="rescheck_sy3">
                <span class="gn_sy2 checkin_jw">대인</span>
                <select id="adultSelect" class="selsy">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <span class="gn_sy3 checkin_jw">명</span>
                <span class="gn_sy2 checkout_jw">소인</span>
                <select id="childSelect" class="selsy">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <span class="gn_sy3 checkout_jw">명</span>
            </div>

            <div class="clock_sy">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20" fill="none" class="iconmg_sy">
                    <path d="M3.84473 14.1549V18.8785" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.9539 9.50999C11.6747 9.41158 11.3754 9.35254 11.0662 9.35254H3.4657C2.03936 9.35254 0.882324 10.4941 0.882324 11.9013V18.9571H13.6496V11.9013C13.6496 10.809 12.9414 9.8741 11.9539 9.50999Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.767 14.1549V18.8785" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.2583 4.54047C10.2583 6.17403 8.92176 7.49269 7.26601 7.49269C5.62023 7.49269 4.27368 6.17403 4.27368 4.54047C4.27368 2.90691 5.61025 1.58826 7.26601 1.58826C8.91179 1.58826 10.2583 2.90691 10.2583 4.54047Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>가능인원&nbsp;&nbsp;:&nbsp;최대 &nbsp;&nbsp;4명</span>
            </div>
        </div>
    </div>

    <div class="syre_container">
        <div class="checkinout_sy">
            <div class="rescheck_sy3">
                <span class="gn_sy2 checkout_jw">차량</span>
                <select id="childSelect" class="selsy">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                <span class="gn_sy3 checkout_jw">대</span>
            </div>
            <div class="clock_sy">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 15 20" fill="none" class="iconmg_sy">
                    <path d="M3.84473 14.1549V18.8785" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M11.9539 9.50999C11.6747 9.41158 11.3754 9.35254 11.0662 9.35254H3.4657C2.03936 9.35254 0.882324 10.4941 0.882324 11.9013V18.9571H13.6496V11.9013C13.6496 10.809 12.9414 9.8741 11.9539 9.50999Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.767 14.1549V18.8785" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M10.2583 4.54047C10.2583 6.17403 8.92176 7.49269 7.26601 7.49269C5.62023 7.49269 4.27368 6.17403 4.27368 4.54047C4.27368 2.90691 5.61025 1.58826 7.26601 1.58826C8.91179 1.58826 10.2583 2.90691 10.2583 4.54047Z" stroke="#3F422F" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>기준차량&nbsp;&nbsp;:&nbsp;최대 &nbsp;&nbsp;2대</span>
            </div>
        </div>
    </div>
</div>

<div class="add_bottom_sy">
    <h2 class="sitefont_sy add_sy">추가선택</h2>
    <div class="addsy_container">
        <div class="addsy_text">
            <span class="addsy_font">장작</span>
        </div>
        <div class="addsy_bt">
            <button class="btnminu_sy" id="adultMinus_sy">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="3" viewBox="0 0 12 3" fill="none" class="iconmg_sy">
                    <path d="M1 1.5L11 1.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
            <span id="adultCount_sy">0</span>
            <button class="btnplus_sy" id="adultPlus_sy">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none" class="iconmg_sy">
                    <path d="M6 1.5L6 11.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M1 6.5L11 6.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
    <div class="addsy_container">
        <div class="addsy_text">
            <span class="addsy_font">난로</span>
        </div>
        <div class="addsy_bt">
            <button class="btnminu_sy" id="adultMinus_sy1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="3" viewBox="0 0 12 3" fill="none" class="iconmg_sy">
                    <path d="M1 1.5L11 1.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
            <span id="adultCount_sy1">0</span>
            <button class="btnplus_sy" id="adultPlus_sy1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none" class="iconmg_sy">
                    <path d="M6 1.5L6 11.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M1 6.5L11 6.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="addsy_container">
        <div class="addsy_text">
            <span class="addsy_font">숯불</span>
        </div>
        <div class="addsy_bt">
            <button class="btnminu_sy" id="adultMinus_sy2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="3" viewBox="0 0 12 3" fill="none" class="iconmg_sy">
                    <path d="M1 1.5L11 1.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
            <span id="adultCount_sy2">0</span>
            <button class="btnplus_sy" id="adultPlus_sy2">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none" class="iconmg_sy">
                    <path d="M6 1.5L6 11.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                    <path d="M1 6.5L11 6.5" stroke="#777777" stroke-width="1.5" stroke-linecap="round"/>
                </svg>
            </button>
        </div>
    </div>
</div>
