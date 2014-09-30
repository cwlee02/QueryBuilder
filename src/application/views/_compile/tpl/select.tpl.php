<?php /* Template_ 2.2.7 2014/09/28 01:34:03 C:\Project\querybuilder\src\application\views\tpl\select.tpl 000030798 */ ?>
<div class="section">
                <div class="mTitle">
                    <h2>쿼리 (Query Statement)</h2>
                </div>
                <div class="queryString">
                    <textarea rows="3" cols="20" readonly="readonly">SELECT ? From 테이블1</textarea>
                </div>
                <div class="mButton gCenter">
                    <a href="#none" class="btnGeneral"><span>실행</span></a>
                    <a href="#none" class="btnGeneral"><span>복사</span></a>
                </div>
            </div>



            <div class="section">
                <div class="mTitle">
                    <h2>옵션 및 조건 설정</h2>
                </div>
                <div class="mBoard gMedium">
                    <table border="1" summary="">
                    <caption>옵션 및 조건 설정</caption>
                    <tbody>
                        <tr id="optLimit">
                            <th scope="row">옵션</th>
                            <td>
                                <ul class="mForm typeVer">
                                    <li>
                                        <label><input type="checkbox" class="fChk" /> LIMIT </label>
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
                                        <span>
                                            <input type="text" class="fText right" style="width:40px;" value="" placeholder="입력" />, 
                                            <input type="text" class="fText right" style="width:40px;" value="" placeholder="입력" />
                                        </span>
                                    </li>
                                    <li>
                                        <label><input type="checkbox" class="fChk" /> 중복된 데이타 제거된 결과 (DISTINCT )</label>
                                    </li>
                                </ul>
                            </td>
                        </tr>

                        <tr id="optJoin">
                            <th scope="row">
                                테이블 및 관계
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
                                            <option selected="selected">INNER JOIN (교집합)</option>
                                            <option>LEFT JOIN (조건에 만족하는 ROW만 리턴)</option>
                                            <option>RIGHT JOIN</option>
                                            <option>OUTER JOIN (합집합, 값이 없는 부분은 NULL로 표시)</option>
                                        </select>
                                        <strong>Table2.</strong> 
                                        주문번호
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr id="optFunc">
                            <th scope="row">
                                함수
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
                            </th>
                            <td>
                                <ul class="mDbSortList">
                                    <li>
                                        <strong>회원아이디</strong> 
                                        <select class="fSelect">
                                            <option>갯수</option>
                                            <option>합계</option>
                                            <option>평균</option>
                                            <option>앞뒤 스페이스&nbsp; 제거</option>
                                            <option>처음부터 입력한 글자수까지 보여주기</option>
                                            <option>입력한 글자수를 끝에서 시작해서 찾기</option>
                                            <option>입력한 특수문자로 구분해서 몇번째 데이타</option>
                                            <option>해당일이 포함된 월 가져오기</option>
                                            <option>해당일이 포함된 주 가져오기 </option>
                                            <option>해당일 전주의 월요일 날짜 가져오기(월부터 시작)</option>
                                            <option>해당일 전주의 일요일 날짜 가져오기(월부터 시작)</option>
                                            <option>해당일 전주의 월요일 날짜 가져오기(일부터 시작)</option>
                                            <option>해당일 전주의 일요일 날짜 가져오기(일부터 시작)</option>
                                        </select>
                                        <input type="text" class="fText right" style="width:40px;" value="" /> 자
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr id="optAlias">
                            <th scope="row">
                                별명
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
                                <br />(ALIAS)
                            </th>
                            <td>
                                <ul id="sortable" class="mDbSortList">
                                    <li class="ui-state-default">
                                        <strong>회원아이디</strong> 
                                        <input type="text" class="fText" style="width:150px;" value="" placeholder="member_id" /> 
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                    <li class="ui-state-default">
                                        <strong>주문번호</strong> 
                                        <input type="text" class="fText" style="width:150px;" value="" placeholder="order_no" /> 
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr id="optWhere">
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
                        <tr id="optGroup">
                            <th scope="row">
                                그룹화
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
                                <br />
                                (GROUP BY Conditions)
                            </th>
                            <td>
                                <ul class="mDbSortList">
                                    <li>
                                        <strong>회원아이디</strong> 
                                        $member_id
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr id="optHaving">
                            <th scope="row">
                                그룹화 
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
                                <br />(HAVING)
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
                        <tr id="optOrder">
                            <th scope="row">
                                정렬 
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
                                <br />(ORDER BY Conditions)
                            </th>
                            <td>
                                <ul id="sortable2" class="mDbSortList">
                                    <li class="ui-state-default">
                                        <strong>회원아이디</strong> 
                                        <label><input type="checkbox" class="fChk" /> $member_id</label>
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                    <li class="ui-state-default">
                                        <strong>주문번호</strong> 
                                        <label><input type="checkbox" class="fChk" /> $order_number</label>
                                        <a href="#none" class="btnNormal"><span><em class="icoDel"></em>삭제</span></a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
            </div>
            <script type="text/javascript">
                $('#optLimit').hide();
                $('#optJoin').hide();
                $('#optFunc').hide();
                $('#optAlias').hide();
                $('#optWhere').hide();
                $('#optGroup').hide();
                $('#optHaving').hide();
                $('#optOrder').hide();
            </script>

            <div class="section">
                <div class="mTitle">
                    <h2>테이블과 필드 선택</h2>
                </div>
                <div class="mDbTableDrag">
                    <div class="ctrl">
                        <a href="#none">별명(Alias)</a>
                        <a href="#none">함수 </a>
                        <a href="#none">조건(Where)</a>
                        <a href="#none">그룹화(Group by)</a>
                        <a href="#none">정렬(Order)</a>
                        <a href="#none">그룹화 조건(Having)</a>
                    </div>
                    <div class="listWrap">
                        <div class="tableList" id="tableErd">

                        </div>
                        <p class="desc">드래그 앤 드롭으로 분류 이동이 가능합니다.</p>
                    </div>
                </div>
            </div>


            <div class="section queryResult">
                <div class="mTitle">
                    <h2>쿼리 결과</h2>
                </div>
                <table id="queryResultGrid"></table>
                <div id="pager"></div>
                <script type="text/javascript">
                    var queryResult = [
                        {id:'1', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스1'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'},
                        {id:'2', '회원아이디':'hahahahohoho', '주문번호':'12345511111-99999999', '주문일자':'2014-09-21', '상품코드':'DKFEKASDFGHHASDFASDF', '상품가격':'18,000,000원', '상품상세':'도트 스카프 다이어리 타입 케이스2'}
                    ];

                    $('#queryResultGrid').jqGrid({ //set your grid id
                    data: queryResult, //insert data from the data object we created above
                    datatype: 'local',
                    width: $('.queryResult').width(), //specify width; optional
                    colModel:[
                        {
                            name:'id', 
                            index:'id', 
                            key: true, 
                            width:50, 
                            align:'center'
                        },
                        {
                            name:'회원아이디', 
                            index:'user_id', 
                            width:100, 
                            align:'left'
                        },
                        {
                            name:'주문번호', 
                            index:'order_num', 
                            width:150, 
                            align:'center'
                        },
                        {
                            name:'주문일자', 
                            index:'order_date', 
                            width:140, 
                            align:'center'
                        },
                        {
                            name:'상품코드', 
                            index:'product_code', 
                            width:150, 
                            align:'left'
                        },
                        {
                            name:'상품가격', 
                            index:'price', 
                            width:150, 
                            align:'right'
                        },
                        {
                            name:'상품상세', 
                            index:'detail', 
                            width:300, 
                            align:'left'
                        }
                    ], //define column models
                    pager: '#pager', //set your pager div id
                    sortname: 'id', //the column according to which data is to be sorted; optional
                    viewrecords: true, //if true, displays the total number of records, etc. as: 'View X to Y out of Z” optional
                    sortorder: 'asc', //sort order; optional
                    caption:null, //title of grid
                    height:'auto'
                    });

                    // resize grid width 
                    $(window).resize(function(){
                        gridId = 'queryResultGrid';
                        gridParentWidth = $('.queryResult').width();
                        $('#' + gridId).jqGrid('setGridWidth',gridParentWidth);
                    })
                </script>
            </div>
            <div class="mButton gCenter">
                <a href="#none" class="btnSubmit"><span>CSV 다운로드</span></a>
                <a href="#none" class="btnEm"><span>자동화 스크립트 만들기</span></a>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    // 드래그 테이블 샘플
    $(function() {
        // $( "#sortable" ).sortable();
        // $( "#sortable" ).disableSelection();
        // $( "#sortable2" ).sortable();
        // $( "#sortable2" ).disableSelection();
    });
</script>