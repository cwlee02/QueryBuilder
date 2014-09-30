<!DOCTYPE html>
<html>
  <head>
    <title>SVG With ScriptAculous</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/lib/squel.min.js"></script>
    <script type="text/javascript" src="/static/lib/prototype.js"></script>
    <script type="text/javascript" src="/static/lib/scriptac.packed/scriptaculous.js?load=effects,dragdrop" type="text/javascript"></script>

    
  </head>
  <body>

    Sortable
<style>
  #content #testlist { 
      list-style-type:none;
      margin:0;
      padding:0;
   }
   #content #testlist li {
     width:200px;
     font:13px Verdana;
     margin:0;
     margin-left:20px;
     padding-left:20px;
     padding:4px;
     cursor:move;
   }
  div.dropmarker {
      height:6px;
      width:200px;
      background: url(/images/dropmarker.png) left top;
      margin-top:-3px;
      margin-left:-5px;
      z-index:1000;
      overflow: hidden;
   }
</style>

<ol id="testlist">
  <li id="image_1">Lorem ipsum dolor</li>
  <li id="image_2">sit amet</li>
  <li id="image_3">consectetur adipisicing</li>
  <li id="image_4">elit</li>
  <li id="image_5">sed do eiusmod</li>
  <li id="image_7">ut labore et dolore</li>
  <li id="image_6">tempor incididunt</li>
  <li id="image_8">magna aliqua</li>
</ol>

<script type="text/javascript" language="javascript">
  Sortable.create('testlist',{ghosting:true,constraint:false})
  // alert(Sortable.serialize('testlist'));
</script>


  </body>
</html>
