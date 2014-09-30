<!DOCTYPE html>
<html>
  <head>
    <title>인증화면</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <body>
    
    <div id="base" class="">

      {FORM_OPEN}
        <div id="u21">
          <select name="s_host_nm" id="s_host_nm">
            <option value="127.0.0.1">localhost</option>
            <option value="lcw0910.cafe24.com">lcw0910.cafe24.com</option>
          </select>
          
        </div>
        <div id="u22" class="ax_text_field">
          ID {INPUT_USERNAME}
        </div>

        <div id="u23" class="ax_text_field">
          PW {INPUT_PWD}
        </div>

        <div id="u24"> 
            <button type="submit">  Login </button>
            <input type="button" value="logout" onclick="location.href='/account/logout'">
        </div>
      {FORM_CLOSE}


    </div>


  </body>
</html>
