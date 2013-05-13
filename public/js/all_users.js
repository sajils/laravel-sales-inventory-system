$(function(){

    var usersTable = $("#users-table").dataTable({
        "bProcessing": true,
        "bServerSide": true,
        "bLengthChange": true,
        "sPaginationType": "full_numbers",
        'oLanguage': oLanguage,
        'sDom': sDom,
        "sAjaxSource": baseUrl + "/users",
        'bAutoWidth': false,
        "aaSorting": [[ 0, "desc" ]], // default sorting
        "aoColumnDefs": [ 
                { "bSortable": false, "aTargets": [ 0 ] },
                { "bVisible": false, "aTargets": [ 0 ] },
                { "sClass": "nowrap center", "aTargets": [ 0 ] }                
        ],
        "fnServerData": function ( sSource, aoData, fnCallback ) {   
            // aoData.push({ "name":"field","value" : $("#field").val()} );
            $.ajax( {
                dataType: 'json',
                type: "POST",
                url: sSource,
                data: aoData,
                success: function(response){

                }
            } );
        },
        "fnRowCallback": function( nRow, aData ) {
            return nRow;
        }
    });

});