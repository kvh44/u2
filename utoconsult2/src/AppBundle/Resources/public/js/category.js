
try{

$(document).ready(function(){
    $('#articleListTable').DataTable({
		language: {
			 "processing": "处理中..."
		},
        serverSide: true,
        processing: true,
        ordering: false,
		searching: false,
        ajax: categoryListAjaxUrl,
        columns: [
            { data: function ( data, type, row ) {
                    var singleArticleUrl = articleUrl;
                    singleArticleUrl = singleArticleUrl.replace(10000, data.id);
                           return '<a href="'+singleArticleUrl+'">'+ data.title +'</a>';
                    }
            },
            { data: 'username' },
            { data: function ( data ) {
                       if(data.updatedAt){
						   var d = new Date(data.updatedAt.date);
                           return d.getFullYear()+'年'+d.getMonth()+'月'+d.getDate()+'日';
                       } else {
                           return '';
                       }
                    }
            }
        ],
        pageLength: 10,
        responsive: true
    });

});

}
catch(e)
{
	
}


