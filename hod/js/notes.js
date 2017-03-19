var editorNotes;

$("#notes_select_class").on('change',function(){
    getNotesSubject();
});

$("#notes_view_all").on('click',function(){
    getNotes();
});

function getNotesSubject(){
    $.ajax({
        type:"POST", 
        url:"notesDAO.php",
        data:{'getNotesSubject':'true'},
        datatype : 'json',
        success:function(result){

           var items = JSON.parse(result).data;
           var html =""

           html += '<option value="">Select Subject</option>';

           for(var item in items){
               html += '<option value="'+items[item].name+'">'+items[item].name+'</option>';
           }

           $("#notes_select_subject").html(html);
        },
        error: function(){
           var html = '<option value="">No subject in this class</option>';
           $("#notes_select_subject").html(html);
        } 
    });
}

function getNotes(){
    
    
    $('#notes_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        ajax: "notesDAO.php",
        order: [[ 3, 'desc' ]],
        "columns":[
                {
                    title: "ID",
                    data: 'id' 
                },
                {
                    title: "File Name",
                    'data' : 'file_name'
                },
                {
                    title: "Class",
                    'data' : 'subject'
                },
                {
                    title: "Subject",
                    'data' : 'class'
                },
                {
                    title: "Updated On",
                    'data' : 'updated_on'
                },
                {
                    title: "Action",
                    "mData": "path",
                    "bSortable": false,
                    "mRender": function(data) {
                        return '<a class="btn btn-dark btn-sm" href=' + $("input#BASE_URL").val() +data + ' target="_blank"> ' + 'View' + '</a>';
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

