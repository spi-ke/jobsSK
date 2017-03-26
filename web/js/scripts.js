$(document).ready(function() {
    $('#table').DataTable( {
        "ajax": "/api",
        "columns": [
            { "data": "name" },
            { "data": "company" },
            { "data": "location" },
            { "data": "employmentType" },
            { "data": "link" },
            { "data": "date" }
        ]
    } );
} );