<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://img.echosting.cafe24.com/css/suio.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/generator.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/ui.jqgrid.css" /> <!-- select -->
    <script type="text/javascript" src="http://img.echosting.cafe24.com/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="http://img.echosting.cafe24.com/js/suio.js"></script>
    <!-- <script type="text/javascript" src="/static/js/jquery-ui.js"></script> -->  <!-- select -->
    <script type="text/javascript" src="/static/lib/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/static/js/fakescroll.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/jqGrid/grid.locale-en.js" charset="utf-8"></script> <!-- select -->
    <script type="text/javascript" src="/static/js/jqGrid/jquery.jqGrid.min.js" charset="utf-8"></script> <!-- select -->
    <script type="text/javascript" src="/static/js/eqb/eqb-{PAGE}.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/eqb/eqb-common.js" charset="utf-8"></script>
    
</head>
<body>
{CSRF_INPUT}

<div id="skipNavigation">
    <p>
        <a href="#snb">메뉴 바로가기</a>
        <a href="#content">본문 바로가기</a>
    </p>
</div>
<hr class="layout" />

<div id="wrap">
    <div id="header">
        <h1><a href="#none">CAFE24 이지쿼리 생성기</a></h1>
    </div>
    <hr class="layout" />

    <div id="container">
        <div id="sidebar">
            <div id="sideSelect">
                <p class="now">
                    <label>데이터베이스 선택</label>
                    <button class="toggle" type="button">데이터베이스 리스트 열기/닫기</button>
                </p>
                <!--
                    데이터베이스 리스트 펼침상태 : <div class="wrap" style="display:block;">
                -->
                <div class="wrap">
                    <div id="sideSelectfakeScroll" class="list">
                        <ul>
                        <!-- {@ DBS} -->
                            <li><a href="javascript:return false;">{DBS.value_}</a></li>
                        <!-- {/} -->
                        </ul>
                    </div>
                    <div class="footer">
                        <a href="#none" class="close"><span>닫기</span></a>
                    </div>
                </div>
                <div id="multiShopGuide" style="display:none;">
                    <p>
                        쇼핑몰관리자를<br />
                        <strong>각 언어별로 선택</strong>해<br />
                        관리할 수 있습니다.
                    </p>
                    <div class="footer">
                        <label class="gLabel"><input type="checkbox" class="fChk" /> 다시안보기</label>
                        <a href="#none" class="close">닫기</a>
                    </div>
                    <span class="edge"></span>
                </div>
            </div>

            <div class="tableList">
                <ul>
                    <!-- <li><label><input type="checkbox" class="fChk" /> 테이블1</label></li>
                    <li><label><input type="checkbox" class="fChk" /> 테이블2</label></li> -->
                </ul>
                <div class="btn">
                    <a href="#none" class="btnNormal"><span>초기화</span></a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(function(){
                // sidebar selectbox
                $('#sideSelect .close').click(function(e){
                    $('#sideSelect .wrap').hide();
                    e.preventDefault();
                });
                $('#sideSelect .toggle').click(function(e){
                    $('#sideSelect .wrap').toggle();
                    fakescroll.set('sideSelectfakeScroll', { tracksize:'-3' });
                    $('#sideSelectfakeScroll .scroll-bar').append('<span class="inner"></span>');
                    $('#sideSelectfakeScroll .scroll-arrow').append('<span class="inner"></span>');
                    e.preventDefault();
                });
                // Get Table List
                $('#sideSelect li').click(function(e){
                    $('#sideSelect .wrap').hide();
                    remove.erdAll();
                    var db = $(this).text();
                    var tbls = $.parseJSON(eqbAjax.listTable(db));
                    append.table(db,tbls);
                    e.preventDefault();
                });
            });
        </script>


        <hr class="layout" />

        <div id="content">
            <div class="headingArea">
                <div class="mTitle">
                    <h1>쿼리 생성기</h1>
                </div>
            </div>
            <div class="mTab typeNav">
                <ul>
                    <li id='tap_select'><a href="/eqb/select">SELECT (선택)</a></li>
                    <li id='tap_insert'><a href="/eqb/insert">INSERT (삽입)</a></li>
                    <li id='tap_replace'><a href="/eqb/replace">REPLACE (삽입)</a></li>
                    <li id='tap_update'><a href="/eqb/update">UPDATE (수정)</a></li>
                </ul>
            </div>
            <script type="text/javascript">
                $('#tap_{PAGE}').addClass('selected');
            </script>