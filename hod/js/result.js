var editorResult;

$("#results-tab").click(function() {
    getResult();
});

function getResult(){
    
    
    $('#result_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        ajax: "resultDAO.php",
        order: [[ 3, 'desc' ]],
        "columns":[
                {
                    title: "ID",
                    data: 'id' 
                },
                {
                    title: "File Name",
                    'data' : 'name'
                },
                {
                    title: "Class",
                    'data' : 'class'
                },
                {
                    title: "Updated On",
                    'data' : 'updated_on'
                },
                {
                    title: "Action",
                    "mData": "action",
                    "bSortable": false,
                    "mRender": function(data) {
                        return '<a class="btn btn-dark btn-sm" href='+ $("input#BASE_URL").val() + data + ' target="_blank"> ' + 'View' + '</a>';
                    }
                }
        ],select: {
            style:    'os',
            blurable: true,
        },
        altEditor: true,
        responsive: true,
        buttons: [ 
            {
                extend: 'selected', // Bind to Selected row
                text: 'Delete',
                name: 'delete'        // do not change name
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
        
    });
    
}