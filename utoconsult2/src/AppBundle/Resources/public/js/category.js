
try{

$(document).ready(function(){
    $('#articleListTable').DataTable({
		language: {
			 "processing": "处理中...",
                         "lengthMenu": "每页现实 _MENU_ 篇文章",
                         "zeroRecords": "对不起,没有此类内容",
                         "info": "当前显示 _PAGE_/_PAGES_ 页",
                         "infoEmpty": "对不起,没有此类内容",
                         "paginate": {
                            "first":      "第一页",
                            "last":       "最后一页",
                            "next":       "下一页",
                            "previous":   "上一页"
                        }
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
                           var d = new Date(data.updatedAt.date.replace(/ /g,"T"));
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


