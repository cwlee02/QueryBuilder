<!DOCTYPE html>
<html>
<head>
  <title>인증화면</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="/static/lib/squel.min.js"></script>
</head>
  <body>
    <script>
      
        squel.select()
          .distinct()
          .field()
          .fields()
          .from()
          .join()
          .left_join()
          .right_join()
          .outer_join()
          .where()
          .order()
          .group()
          .limit()
          .offset()
          .top()
          .updateOptions()
          .registerValueHandler()
          .isNestable()
          .clone()
          .toString()
          .toParam()
          

    </script>



    <textarea name="inputQry" id="inputQry" cols="100" rows="10">

    </textarea>
    <div>Table1
      <div>
        <input type="checkbox" id="Col1" value="table1.column1" name="column" class="column">Column1
      </div>
      <div>
        <input type="checkbox" id="Col2" value="table1.column2" name="column" class="column">Column2
      </div>
      <div>
        <input type="checkbox" id="Col3" value="table1.column3" name="column" class="column">Column3
      </div>
    </div>

    <div>Table2
      <div>
        <input type="checkbox" id="Col1" value="table2.column1" name="column" class="column">Column1
      </div>
      <div>
        <input type="checkbox" id="Col2" value="table2.column2" name="column" class="column">Column2
      </div>
      <div>
        <input type="checkbox" id="Col3" value="table2.column3" name="column" class="column">Column3
      </div>
    </div>
    

    <script>
      


      function test(oTable){
        if (typeof(oTable) != "undefined") {

          var aTable = $(oTable).toArray();
          if (aTable.length > 0) {
            var sQry = squel.select();
            for (var i = 0; i <= aTable.length-1; i++) {
              sQry.from(aTable[i]);
            };
          } else {
            var sQry = "";
          };
          $("#inputQry").val(sQry);
        } else {
          alert("This Parameter is undefined");
        };
        
      }

      // $("#inputQry").val(sQry);
      // console.log(oTmp.toString());

      // Click Event - Add Table
      $(".column").click(function(){
        var oTable = $("input:checkbox:checked.column").map(function(){
          return this.value
        });
        test(oTable);
      });

    </script>



  </body>
</html>
