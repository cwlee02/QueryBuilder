<!DOCTYPE html>
<html>
  <head>
    <title>SVG With ScriptAculous</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/lib/squel.min.js"></script>
    <script type="text/javascript" src="/static/lib/raphael-min.js"></script>
    <script type="text/javascript" src="/static/lib/prototype.js"></script>
    <script type="text/javascript" src="/static/lib/scriptac.packed/scriptaculous.js?load=effects,dragdrop" type="text/javascript"></script>

    
  </head>
  <body>

    <style type="text/css">
      div#droppable_container {
        height: 140px;
        width: 400px; }
      div#draggable_demo {
        width: 60px;
        height: 60px;
        cursor: move;
        background: #9fcfba;
        border: 1px solid #666;
        text-align: center;
        position: relative;
        top: 30px;
        line-height: 50px; }
      div#droppable_demo {
        width: 160px;
        height: 120px;
        background: #fff;
        border: 5px solid #ccc;
        text-align: center;
        position: relative;
        top: -60px;
        left: 140px;
        line-height: 100px; }
      div#droppable_demo.hover {
        border: 5px dashed #aaa;
        background:#efefef; }
    </style>

    <div class="demo" id="droppable_container">
      <div id="draggable_demo" class="draggable">
        <!-- <div id="column" class="draggable">Column</div> -->
        Drag me!
      </div>
      
      <div id="droppable_demo">
        Drop here!
      </div>
    </div>

    <script type="text/javascript">
      new Draggable('draggable_demo', { 
        revert: true 
      });
      
      Droppables.add('droppable_demo', { 
        accept: 'draggable',
        hoverclass: 'hover',
        onDrop: function() { $('droppable_demo').highlight(); }
      });

    </script>

  </body>
</html>
