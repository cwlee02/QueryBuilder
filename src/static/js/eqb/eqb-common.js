var eqbAjax = {};
eqbAjax.initParams = function(){
    params = {
        "simplexi_csrf_sess" : $("input[name=simplexi_csrf_sess]").val()
    }
}
eqbAjax.listTable = function(db){
    eqbAjax.initParams();
    params.database = db;
    var tbls = $.ajax({
        type:"POST",
        url:"/ajax/list_table",
        data:params,
        dataType:"JSON",
        async:false,
        success:function(data){
        },
        complete:function(data){
        },
        error:function(xhr, status, error){
        }
    });
    return tbls.response;
}
eqbAjax.listColumn = function(tbl){
    eqbAjax.initParams();
    params.table = tbl;
    var cols = $.ajax({
        type:"POST",
        url:"/ajax/list_column",
        data:params,
        dataType:"JSON",
        async:false,
        success : function(data) {
        },
        complete : function(data) {
        },
        error : function(xhr, status, error) {
        }
    });
    return cols.response;
}


