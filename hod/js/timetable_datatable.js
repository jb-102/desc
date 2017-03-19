var editorTimetable;

$(document).ready({

    
});

$("#select_class").on('change',function(){
        var class_id = $(this).val();
        if(class_id){
            $.ajax({
                type:'POST',
                url:'upload_timetable.php',
                data:'class_id='+class_id,
                success:function(result){
                    $("#select_section").html(result);
                }
            }); 
        } else {
            alert("Select Class first");
        }
});

$("#upload_pdf").click(function() {

});


$("#timetable_view_all").click(function() {
    getTimeTable();
});

function getTimeTable(){
    
    
    $('#timetable_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        ajax: "upload_timetable.php",
        order: [[ 3, 'desc' ]],
        "columns":[
                {
                    title: "ID",
                    data: 'id' 
                },
                {
                    title: "Class",
                    'data' : 'class'
                },
                {
                    title: "Section",
                    'data' : 'section'
                },
                {
                    title: "Updated On",
                    'data' : 'updated_at'
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