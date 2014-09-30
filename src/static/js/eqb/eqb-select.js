/*
    Object Append
     - table
     - erd
 */
var append = {};
/*
    params :
        (String) database name
        (Array) Table List
    description : 선택한 DB의 테이블 목록을 가져온다.
 */
append.table = function(db, tbls){
    $('.now > label').text(db);
    $('.tableList > ul').empty();
    $.map(tbls, function(n){
        $('.tableList > ul').append('<li><label><input type="checkbox" name="tblList" value="' + n + '" class="fChk" /> ' + n + '</label></li>');
    });

    // Table Select Event
    $('input[name=tblList]').change(function(e){
        var tbl = $(this).val();
        if ($(this).is(':checked') == true) {
            var cols = $.parseJSON(eqbAjax.listColumn(tbl));
            append.erdTable(tbl, cols);
        } else {

            var idd = $(this).parent().parent().parent().parent().parent().attr('id');
            console.log(idd);
            remove.erd(tbl);
        }
        e.preventDefault();

    });
};




append.erdTable = function(tbl, cols){
    var index;
    index = 0;
    if ($('.item')[0]) {
        index = $('.item').length;
    }

    var s_table = '<div class="item" id="tableDiv_' + index + '"><div class="header"><strong>' + tbl + '</strong></div><div class="content"><ul> <li class="all"><label><input type="checkbox" class="fChk" /> (ALL)</label></li></ul></div></div>';
    $('#tableErd').append(s_table);

    $.map(cols, function(col){
        $('div#tableDiv_' + index + ' ul').append('<li class="item-field' + ' tableDiv_' + index + '"><label><input type="checkbox" class="fChk" /> ' + col + '</label></li>');
    });

    // Draggable
    $('.item').draggable({
        opacity:'0.7'
    });
    $('.item-field').draggable({
        scope:'one',
        opacity:'0.7',
        revert:true
    });

    // Droppable
    $('.item label').droppable({
        scope:'one',
        accept:'.item-field',
        hoverClass:'eSelected',
        drop:function(event, ui){
//            $(this)
//                .effect('highlight');
        }
    });

};




/*
 Object Remove
 - erd
 */
var remove = {};
remove.erd = function(tbl){
    $('div[data-group="' + tbl + '"]').remove();
};
remove.erdAll = function(){
    $('#tableErd').empty();
};


