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


//$("#upload_pdf").click(function() {
//    
//    var class_id = $("#select_class").val();
//    var section_id = $("#select_section").val();
//    var upload_path = $("#file").val();
//    
//    if(class_id){
//            $.ajax({
//                type:'POST',
//                url:'upload_timetable.php',
//                data: { 'class' : class_id, 'section' : section_id, 'file' : upload_path  }, 
//                success:function(result){
//                    $("#select_section").html(result);
//                }
//            }); 
//        } else {
//            alert("Select Class first");
//        }
//    
//});


$("#view_all").click(function() {
    getTimeTable();
});

function getTimeTable(){
    
    $('#view_timetable').DataTable({
        
        destroy: true,
        "ajax":{
            url : 'upload_timetable.php',
            method : 'POST',
            datatype : 'json'
        },
        order: [[ 2, 'desc' ]],
        "columns":[
                {'data' : 'class'},
                {'data' : 'section'},
                {'data' : 'updated_at'},
                {
                    "mData": "action",
                    "bSortable": false,
                    "mRender": function(data) {
                        return '<a class="btn btn-dark btn-sm" href=' + data + '>' + 'View' + '</a>';
                    }
                }
        ],select: {
            style:    'os',
            selector: 'td:first-child'
        }
        
    });
    
}