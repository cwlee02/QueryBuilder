

            <div class="section">
                <div class="mTitle">
                    <h2>쿼리 (Query Statement)</h2>
                </div>
                <div class="queryString">
                    <textarea rows="3" cols="20" readonly="readonly">Update `table1` set 결제 상태 = '%s' where 회원아이디 = '%d'</textarea>
                </div>
                <div class="mButton gCenter">
                    <a href="#none" class="btnGeneral"><span>복사</span></a>
                </div>
            </div>

            <div class="section">
                <div class="mTitle">
                    <h2>데이터 수정을 위한 UPDATE 쿼리 만들기</h2>
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
                                <br />(UPDATE)
                            </th>
                            <td>table1.주문번호</td>
                        </tr>
                        <tr>
                            <th scope="row">
                                수정할 컬럼
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
                                <br />(SET)
                            </th>
                            <td>
                                결제 상태
                                <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                테이블들 관계
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
                                <br />(Join)
                            </th>
                            <td>
                                <ul class="mDbSortList">
                                    <li>
                                        <strong>Table1.</strong> 
                                        주문번호
                                        <select class="fSelect">
                                            <option selected="selected">LEFT JOIN (조건에 만족하는 ROW만 리턴)</option>
                                            <option>FULL JOIN (두테이블의 합집합으로 조건과 안맞으면 NULL을 리턴)</option>
                                        </select>
                                        <strong>Table2.</strong> 
                                        주문번호
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">
                                조건 
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
                                <br />(WHERE)
                            </th>
                            <td>
                                <select class="fSelect">
                                    <option>주문일자</option>
                                </select>
                                <select class="fSelect">
                                      <option selected="selected">=</option>
                                      <option>!=</option>
                                      <option>&lt;</option>
                                      <option>&gt;</option>
                                      <option>&lt;=</option>
                                      <option>&gt;=</option>
                                      <option>!=</option>
                                      <option>like</option>
                                      <option>like%%</option>
                                      <option>regexp</option>
                                      <option>in</option>
                                      <option>is null</option>
                                      <option>not regexp</option>
                                      <option>not like</option>
                                      <option>not in</option>
                                      <option>is not null</option>
                                      <option>sql</option>
                                </select>
                                <select class="fSelect">
                                    <option>입력</option>
                                    <option>오늘 날짜 (년-월-일)</option>
                                    <option>이번달 (년-월)</option>
                                    <option>올해 (년)</option>
                                    <option>며칠 전 날짜</option>
                                </select>
                                <input type="text" class="fText" style="width:200px;" placeholder="date_format(now(),'Y-m-d')" />
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">옵션</th>
                            <td>
                                <label><input type="checkbox" class="fChk" /> LIMIT </label>
                                <input type="text" class="fText right" style="width:40px;" value="" placeholder="입력" />
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
                    <div class="ctrl">
                        <a href="#none">조건(Where)</a>
                    </div>
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
                        <p class="desc">드래그 앤 드롭으로 분류 이동이 가능합니다.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
