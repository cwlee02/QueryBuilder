<!DOCTYPE html>
<html>
  <head>
    <title>SVG With ScriptAculous</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/lib/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="/static/lib/squel.min.js"></script>
    <!-- <script type="text/javascript" src="/static/lib/prototype.js"></script>
    <script type="text/javascript" src="/static/lib/scriptac.packed/scriptaculous.js?load=effects,dragdrop" type="text/javascript"></script> -->

    
  </head>
  <body>


<style type="text/css">
  div#droppable_container {
    height: 1000px;
    width: 1000px; 
    position: static;
  }

  div.draggable {
    width:150px;
    height: 30px;
    background: #fff;
    border: 5px solid #ccc;
    text-align: center;
    /*position: static;*/
    /*top: -60px;*/
    left: 15px;
    /*line-height: 100px;*/ }
  div.draggable.hover {
    border: 5px dashed #aaa;
    background:#efefef; 
    
    /*solid:#333;*/
  }
</style>



    draggable
    <div class="demo" id="droppable_container">
      <div id="table1" style="width:200px; height:600px; background:#7baaed; border:1px solid #333; posision:absolute; top:0px; left:50px;">
        Table1
        <div id="table1_column1" class="draggable">asdf</div>
      </div>

      <div id="table2" style="width:200px; height:600px; background:#7baaed; border:1px solid #333; posision:absolute; top:0px; left:300px;">
        Table2
        <div id="table2_column1" class="draggable">asdf</div>
      </div>      
    </div>

    <script type="text/javascript">

      $('#table1').draggable();
      $('#table1_column1').draggable({ revert:true });

      $('#table2').draggable();
      $('#table2_column1').draggable({ revert:true });

      $('#table2_column1').droppable({
        // activeClass:'hover',
        hoverClass:'hover',
        drop:function(event, ui){
          $(this)
            .effect('highlight');
        }
      });
      
      // new Draggable('table1', { scroll:window});
      // new Draggable('table1_column1', { revert:true});

      // new Draggable('table2', { scroll:window});
      // new Draggable('table2_column1', { revert:true});
  
      // Droppables.add('table2_column1', { 
      //   accept: 'draggable',
      //   hoverclass: 'hover',
      //   onDrop: function() { $('table2_column1').highlight(); }
      // });
      // Droppables.add('table1_column1', { 
      //   accept: 'draggable',
      //   hoverclass: 'hover',
      //   onDrop: function() { $('table1_column1').highlight(); }
      // });



    </script>

  </body>
</html>
