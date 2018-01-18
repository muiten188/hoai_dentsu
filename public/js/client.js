$(document).ready(function() {
    // init client data table
	$('#clientTable').DataTable({
		responsive: true,
		language: {
			"decimal":        "",
			"emptyTable":     "テーブルにデータがありません",
			"info":           "_TOTAL_ 件中 _START_ から _END_ まで表示",
			"infoEmpty":      " 0 件中 0 から 0 まで表示",
			"infoFiltered":   "(全 _MAX_ 件より抽出)",
			"infoPostFix":    "",
			"thousands":      ",",
			"lengthMenu":     "_MENU_ 件表示",
			"loadingRecords": "読み込み中...",
			"processing":     "処理中...",
			"search":         "検索:",
			"zeroRecords":    "一致するレコードがありません",
			"paginate": {
				"first":      "先頭",
				"last":       "最終",
				"next":       "次",
				"previous":   "前"
			},
			"aria": {
				"sortAscending":  ": 列を昇順に並べ替えるにはアクティブにする",
				"sortDescending": ": 列を降順に並べ替えるにはアクティブにする"
			}
		}
	});
	
	// hiden search default of data table
	$("#clientTable_filter").hide();

    var clientTable = $('#clientTable').DataTable();

    clientTable.on( 'order.dt search.dt', function () {
			clientTable.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
				cell.innerHTML = i+1;
			});
		}).draw();

    $('#client_search').keyup(function(){
        clientTable.search($(this).val()).draw() ;
    });

});