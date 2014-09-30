<!DOCTYPE html>
<html>
  <head>
    <title>SVG With ScriptAculous</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/static/lib/squel.min.js"></script>
    <script type="text/javascript" src="/static/lib/go.js"></script>
    <script type="text/javascript" src="/static/lib/go-debug.js"></script>

    
  </head>
  <body>
    <div id="myDiagramDiv" style="width:700px; height:700px; background-color: #DAE4E4;"></div>

    <script>
var $ = go.GraphObject.make;
var myDiagram =
  $(go.Diagram, "myDiagramDiv",
    {
      initialContentAlignment: go.Spot.Center, // Center Diagram contents
      "undoManager.isEnabled": true // enable Ctrl-Z to undo and Ctrl-Y to redo
    });

// the template we defined earlier
myDiagram.nodeTemplate =
  $(go.Node, "Horizontal",
    { background: "#44CCFF" },
    $(go.Picture,
      { margin: 10, width: 50, height: 50, background: "red" },
      new go.Binding("source")),
    $(go.TextBlock, "Default Text",
      { margin: 12, stroke: "white", font: "bold 16px sans-serif" },
      new go.Binding("text", "name"))
  );

var model = $(go.TreeModel);
model.nodeDataArray =
[ // the "key" and "parent" property names are required,
  // but you can add whatever data properties you need for your app
  { key: "1",              name: "Don Meow",   source: "cat1.png" },
  { key: "2", parent: "1", name: "Demeter",    source: "cat2.png" },
  { key: "3", parent: "1", name: "Copricat",   source: "cat3.png" },
  { key: "4", parent: "3", name: "Jellylorum", source: "cat4.png" },
  { key: "5", parent: "3", name: "Alonzo",     source: "cat5.png" },
  { key: "6", parent: "2", name: "Munkustrap", source: "cat6.png" }
];
myDiagram.model = model;
    </script>












  </body>
</html>
