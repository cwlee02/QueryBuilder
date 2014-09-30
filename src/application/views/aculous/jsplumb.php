<!doctype html>
<html>
    <head>
        <title>jsPlumb 1.6.4 demo - jQuery</title>
        <meta http-equiv="content-type" content="text/html;charset=utf-8" />
        <!-- <script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script> -->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>

        <link rel="stylesheet" href="/static/demo/test.css">
        <link rel="stylesheet" href="/static/lib/jsPlumb.packed/css/jsplumb.css">

    </head>

    <body>

        <div id="main">
           <!-- demo -->
            <div class="demo statemachine-demo" id="statemachine-demo">

                <div class="table" id="table">
                    table1
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div id="col1" class="column"></div>
                </div>

                <div class="table" id="phone1">
                    table2
                    <div id="col2" class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                    <div class="column"></div>
                </div>

                <div class="table" id="phone2">PHONE INTERVIEW 2<div class="column"></div></div>
                <div class="table" id="inperson">IN PERSON<div class="column"></div></div>
                <div class="table" id="rejected">REJECTED<div class="column"></div></div>
            </div>
            <!-- /demo -->
        </div>











    </body>

        <!-- JS -->
        <!-- support lib for bezier stuff -->
        <script src="/static/lib/jsPlumb.packed/lib/jsBezier-0.6.js"></script>
        <!-- geom functions -->
        <script src="/static/lib/jsPlumb.packed/lib/biltong-0.2.js"></script>
        <!-- jsplumb util -->
        <script src="/static/lib/jsPlumb.packed/src/util.js"></script>
        <script src="/static/lib/jsPlumb.packed/src/browser-util.js"></script>
        <!-- base DOM adapter -->
        <script src="/static/lib/jsPlumb.packed/src/dom-adapter.js"></script>
        <!-- main jsplumb engine -->
        <script src="/static/lib/jsPlumb.packed/src/jsPlumb.js"></script>
        <!-- endpoint -->
        <script src="/static/lib/jsPlumb.packed/src/endpoint.js"></script>
        <!-- connection -->
        <script src="/static/lib/jsPlumb.packed/src/connection.js"></script>
        <!-- anchors -->
        <script src="/static/lib/jsPlumb.packed/src/anchors.js"></script>
        <!-- connectors, endpoint and overlays  -->
        <script src="/static/lib/jsPlumb.packed/src/defaults.js"></script>
        <!-- bezier connectors -->
        <script src="/static/lib/jsPlumb.packed/src/connectors-bezier.js"></script>
        <!-- state machine connectors -->
        <script src="/static/lib/jsPlumb.packed/src/connectors-statemachine.js"></script>
        <!-- flowchart connectors -->
        <script src="/static/lib/jsPlumb.packed/src/connectors-flowchart.js"></script>
        <script src="/static/lib/jsPlumb.packed/src/connector-editors.js"></script>
        <!-- SVG renderer -->
        <script src="/static/lib/jsPlumb.packed/src/renderers-svg.js"></script>


        <!-- vml renderer -->
        <script src="/static/lib/jsPlumb.packed/src/renderers-vml.js"></script>

        <!-- jquery jsPlumb adapter -->
        <script src="/static/lib/jsPlumb.packed/src/jquery.jsPlumb.js"></script>
        <!-- /JS -->
        <script src="/static/demo/test.js"></script>

</html>