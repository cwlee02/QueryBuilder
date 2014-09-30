<?php /* Template_ 2.2.7 2014/09/19 06:37:53 D:\Project\querybuilder\src\application\views\account\login.tpl 000001134 */ ?>
<!DOCTYPE html>
<html>
  <head>
    <title>인증화면</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  </head>
  <body>
    
    <div id="base" class="">

      <?php echo $TPL_VAR["FORM_OPEN"]?>

        <div id="u21">
          <select name="s_host_nm" id="s_host_nm">
            <option value="127.0.0.1">localhost</option>
            <option value="lcw0910.cafe24.com">lcw0910.cafe24.com</option>
          </select>
          
        </div>
        <div id="u22" class="ax_text_field">
          ID <?php echo $TPL_VAR["INPUT_USERNAME"]?>

        </div>

        <div id="u23" class="ax_text_field">
          PW <?php echo $TPL_VAR["INPUT_PWD"]?>

        </div>

        <div id="u24"> 
            <button type="submit">  Login </button>
            <input type="button" value="logout" onclick="location.href='/account/logout'">
        </div>
      <?php echo $TPL_VAR["FORM_CLOSE"]?>



    </div>


  </body>
</html>