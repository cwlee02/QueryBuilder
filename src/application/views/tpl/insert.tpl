

            <div class="section">
                <div class="mTitle">
                    <h2>쿼리 (Query Statement)</h2>
                </div>
                <div class="queryString">
                    <textarea rows="3" cols="20" readonly="readonly">Insert into table1 (회원아이디, 주문번호, 주문일자, 주문금액) Values ("%s","%s","%s","%s");</textarea>
                </div>
                <div class="mButton gCenter">
                    <a href="#none" class="btnGeneral"><span>복사</span></a>
                </div>
            </div>

            <div class="section">
                <div class="mTitle">
                    <h2>데이터 삽입을 위한 Insert 쿼리 만들기</h2>
                </div>
                <div class="mBoard gMedium">
                    <table border="1" summary="">
                    <caption>옵션 및 조건 설정</caption>
                    <tbody>
                        <tr>
                            <th scope="row">
                                테이블
                                <div class="mTooltip gLarge">
                                    <button type="button" class="icon eTip">도움말</button>
                                    <div class="tooltip">
                                        <div class="content">
                                            <strong class="titleEm">설명문구</strong>
                                            <p class="mList">단문형</p>
                                            <ul class="mList">
                                                <li>리스트형</li>
                                            </ul>
                                            <ol class="mList">
                                                <li>순서리스트형</li>
                                            </ol>
                                        </div>
                                        <button type="button" class="close eClose">닫기</button>
                                        <span class="edge"></span>
                                    </div>
                                </div>
                                <br />(INSERT INTO)
                            </th>
                            <td>table1.주문번호</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                입력할 컬럼
                                <div class="mTooltip gLarge">
                                    <button type="button" class="icon eTip">도움말</button>
                                    <div class="tooltip">
                                        <div class="content">
                                            <strong class="titleEm">설명문구</strong>
                                            <p class="mList">단문형</p>
                                            <ul class="mList">
                                                <li>리스트형</li>
                                            </ul>
                                            <ol class="mList">
                                                <li>순서리스트형</li>
                                            </ol>
                                        </div>
                                        <button type="button" class="close eClose">닫기</button>
                                        <span class="edge"></span>
                                    </div>
                                </div>
                                <br />(COLUMNS)
                            </th>
                            <td>
                                <ul class="mForm typeVer">
                                    <li>
                                        회원 아이디
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                    <li>
                                        주문번호
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                    <li>
                                        주문일자
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                    <li>
                                        주문금액
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>

            <div class="section">
                <div class="mTitle">
                    <h2>테이블과 필드 선택</h2>
                </div>
                <div class="mDbTableDrag">
                    <div class="listWrap">
                        <div class="tableList">
                            <div class="item">
                                <div class="header"><strong>Table1</strong></div>
                                <div class="content">
                                    <ul>
                                        <li class="all"><label><input type="checkbox" class="fChk" /> (ALL)</label></li>
                                        <li><label><input type="checkbox" class="fChk" /> 회원아이디(키)</label></li>
                                        <li class="selected"><label><input type="checkbox" class="fChk" /> 주문번호(키)</label></li>
                                        <li><label><input type="checkbox" class="fChk" /> 주문일자</label></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

