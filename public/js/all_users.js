$(function(){

    var user = {
        id: 0,
        username: 1,
        email: 2,
        status: 3,
        created: 4,
        modified: 5,
        actions: 6
    }

    var usersTable = $("#users-table").dataTable({
        "bProcessing": true,
        "bServerSide": true,
        "bLengthChange": true,
        "sPaginationType": "full_numbers",
        'oLanguage': oLanguage,
        'sDom': sDom,
        "sAjaxSource": baseUrl + "/users",
        'bAutoWidth': false,
        "aaSorting": [[ user.id, "desc" ]], // default sorting
        "aoColumnDefs": [
                { "bSortable": false, "aTargets": [ user.actions ] },
                { "sWidth": '100px', "aTargets": [ user.actions ] },
                // { "bVisible": false, "aTargets": [ 0 ] },
                { "sClass": "nowrap center", "aTargets": [ user.actions ] }
        ],
        "fnServerData": function ( sSource, aoData, fnCallback ) {
            // aoData.push({ "name":"field","value" : $("#field").val()} );
            $.ajax( {
                dataType: 'json',
                type: "POST",
                url: sSource,
                data: aoData,
                success: function(response){
                    fnCallback(response);
                }
            } );
        },
        "fnRowCallback": function( nRow, aData ) {
            return nRow;
        }
    });

});