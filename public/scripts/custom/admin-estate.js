$(document).ready( function () {
    if($('#table_id').length) {
        $('#table_id').DataTable({
            "paging":   false,
            "ordering": true,
            "info":     true,
            "searching": false
        });
    }

    $( "#button-form-estate" ).click(function() {
        alert( "before sending" );
        $( "#form-estate" ).submit();
    });
} );