jsPlumb.ready(function() {
	
	var instance = jsPlumb.getInstance({

		Connector : "Bezier",
		Anchors : ["Right","Left"],
		Endpoint : ["Dot", {radius:2}],
		Endpoints : [ null, null ],
		EndpointStyle : { fillStyle : "#456" },
		EndpointStyles : [ null, null ],
		EndpointHoverStyle : null,
		PaintStyle : { lineWidth : 2, strokeStyle : "#453" },
		// HoverPaintStyle : {strokeStyle:"#1e8151", lineWidth:2 },
		ConnectionOverlays : [
			[ "Arrow", {
				location:1,
				id:"arrow",
                length:14,
                foldback:0.8
			} ]
		],
		Container:"statemachine-demo"
	});

	var table = jsPlumb.getSelector(".statemachine-demo .table");
	var column = jsPlumb.getSelector(".statemachine-demo .table .column");

	instance.draggable(table);
	instance.draggable(column,{
		revert:true
	});

	instance.connect({ 
		source:"col1", 
		target:"col2",
		// anchors:[
	 //        [ "AutoDefault", { shape:"Rectangle" } ]
  //   	]
	});


	// var endpointOptions = { isSource:true };
	// var endpoint = jsPlumb.addEndpoint('elementId', endpointOptions);
	
	// var common = {
	// 	anchors:["Right", "Left"],
	// 	endpoints:["Dot","Blank"]
	// };
	// jsPlumb.connect({ source:"col1", target:"col2" }, common);

	


	// jsPlumb.connect({
	// 	source:"col1", 
	// 	target:"col2",
	// 	anchors:["Right", "Left" ],
	// 	endpoint:"Rectangle",
	// 	endpointStyle:{ fillStyle: "red" }
	// });

	// var endpointOption = {
	// 	isSource:true,
	// 	isTarget:true,
	// 	endpoint: ["Dot", {radius:30}],
	// 	dropOptions:{
	// 		"drop:hit":function(){
	// 			alert('drop!');
	// 		}
	// 	}
	// };

	// jsPlumb.connect({ 
	// 	source:column,
	// 	target:column,
	// 	connector: [ "Bezier", { curviness:100 } ],
	// 	paintStyle:{ lineWidth:1, strokeStyle:'yellow' }
	// });

	// jsPlumb.addEndpoint(column,);


});