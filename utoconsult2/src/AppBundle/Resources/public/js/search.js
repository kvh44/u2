
function searchPagerAjax(offset, limit, word, id)
{
    $('button.page-number').removeClass('active');
    $('#'+id).addClass('active');
        
    $.ajax({
        method: "GET",
        url: searchPagerAjaxUrl,
        cache: true,
        data: { offset: offset, limit: limit, word: word, only_total: 0, type: 'ajax', format: 'html'}
    })
    .done(function( data ) {
        $('#div-result-search').html(data);
    });
}
