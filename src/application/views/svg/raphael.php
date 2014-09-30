<!DOCTYPE html>
<html>
  <head>
    <title>SVG With Raphael</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/lib/squel.min.js"></script>
    <script type="text/javascript" src="/static/lib/raphael-min.js"></script>
    
  </head>
  <body>
    <!-- <svg width="700" height="400"> 
      <rect width="700" height="400" fill="red" />
      <circle cx="350" cy="150" r="100" fill="orange" />
    </svg> -->


    <div id="canvas">
    </div>
    <script>
    $().ready(function(){
      var x = 700;
      var y = 400;
      var canvas = document.getElementById('canvas');
      var paper = Raphael(canvas, x, y);

      var rect = paper.rect(0,0,700,300).attr('fill', 'red');
      var circle = paper.circle(350, 150, 100).attr('fill','orange').attr('stroke', 'black');
      var circle2 = paper.circle(350, 150, 50).attr('fill','blue').attr('stroke', 'black');

      start = function() {
          this.ox = parseInt(this.attr("cx"));
          this.oy = parseInt(this.attr("cy"));
          console.log("Start move, ox=" + this.ox + ", oy=" + this.oy);
      }

      move = function(dx, dy) {
          // this.ox = 350
          // this.oy = 150
          this.attr({"cx": this.ox + dx, "cy": this.oy + dy});
      }

      stop = function() {
          this.ox = parseInt(this.attr("cx"));
          this.oy = parseInt(this.attr("cy"));
          console.log("Stop move, ox=" + this.ox + ", oy=" + this.oy);
      }
     
      circle.drag(move, start, stop);
      circle2.drag(move, start, stop);
    });
    </script>
 


  </body>
</html>
