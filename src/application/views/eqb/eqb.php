<!DOCTYPE html>
<html>
	<head>
		<title>easy query builder</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<script type="text/javascript" src="/static/lib/jquery/jquery-1.11.1.min.js"></script>
	</head>
	<body>
		<?=$CSRF?>
		<div id="databases" class="databases">
			<?=$DBS?>
		</div>
		<div id="tables" class="tables">
			<div>db1</div>
			<div>db2</div>
			<div>db3</div>
		</div>

		<script>

			function list_tables(db){
				
				var params = {
                            "simplexi_csrf_sess" : $("input[name=simplexi_csrf_sess]").val(),
                            "database" : db
                            }
				$.ajax({
				   type:"POST",
				   url:"/ajax/list_db",
				   data:params,
				   dataType:"JSON", 
				   async:"TRUE",
				   success : function(data) {
				   		alert(data);
				   },
				   complete : function(data) {
				   		alert('complete');
				   },
				   error : function(xhr, status, error) {
				         consol.log(error);
				   }
				});
			}

			$('#databases').change(function(){
				var db = $('#databases option:selected').val();
				if (db !== "0") {
					list_tables(db);
				};
				
			});

		</script>
	</body>
</html>
