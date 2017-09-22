
$(function(){  
   check_block_height();
});

function check_block_height(){
    var max_height = 300;
    $('div.row-3').each(function(index, obj) {
        $(this).find('.panel').each(function(index, obj) {
            max_height = ($(this).height() > max_height) ? $(this).height() : max_height ;
        });
        $(this).find('.panel').height(max_height+"px");
        max_height = 300;
    });
}