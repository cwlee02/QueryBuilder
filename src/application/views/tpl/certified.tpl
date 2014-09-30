<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link rel="stylesheet" type="text/css" href="http://img.echosting.cafe24.com/css/suio.css" />
    <link rel="stylesheet" type="text/css" href="/static/css/generator.css" />
    <script type="text/javascript" src="http://img.echosting.cafe24.com/js/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="http://img.echosting.cafe24.com/js/suio.js"></script>
    <script type="text/javascript" src="/static/js/fakescroll.js" charset="utf-8"></script>
</head>
<body>
<div id="skipNavigation">
    <p>
        <a href="#snb">메뉴 바로가기</a>
        <a href="#content">본문 바로가기</a>
    </p>
</div>
<hr class="layout" />

<div id="wrap" class="login">
    <div id="header">
        <h1><a href="#none">CAFE24 이지쿼리 생성기</a></h1>
    </div>
    <hr class="layout" />

    <div id="container">
        <div class="headingArea">
            <div class="mTitle">
                <h1>쿼리 생성기</h1>
            </div>
        </div>
        {FORM_OPEN}
            {CSRF_INPUT}
            <div class="certifiedArea">
                <h2>LOG-IN</h2>
                <div class="mLogin">
                    <fieldset>
                        <legend>Login Form</legend>
                        <label for="labelDb">데이타베이스 서버</label>

                        <select id="labelDb" name="s_host" class="fSelect">
                            <option>-선택-</option>
                            <option>공용DB (gseo-auto-common.cafe24.com) </option>
                            <option value="lcw0910.cafe24.com">lcw0910.cafe24.com </option>
                            <option value="localhost">로컬DB (localhost)</option>
                            <option>기타</option>
                        </select>

                        <label for="labelName">DB Username</label>
                        <!-- {INPUT_USER} -->
                        <input type="text" id="labelName" name="s_usernmae" class="fText" value="" />
                        <label for="labelPwd">DB Password</label>
                        <!-- {INPUT_PWD} -->
                        <input type="password" id="labelPwd" name="s_password" class="fText" value="" />

                        <div class="btn">
                            <!-- {BTN_SUBMIT} -->
                            <input type="image" src="/static/img/generator/btn_login.gif" class="btnLogin" alt="로그인" />
                        </div>
                    </fieldset>
                </div>
            </div>
        {FORM_CLOSE}

    </div>
</div>



</body>
</html>