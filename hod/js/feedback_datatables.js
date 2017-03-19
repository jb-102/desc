var subject_array = "";


$("#feedback_select_class").on('change',function(){

        var class_id = $(this).val();
        if(class_id){
            $.ajax({
                type:'POST',
                url:'feedbackDAO.php',
                data:'class_id='+class_id,
                success:function(result){
                    $("#feedback_select_section").html(result);
                }
            }); 
        } else {
            alert("Select Class first");
        }
});

$("#feedback_select_section").on('change',function(){

        var section_id = $(this).val();
        if(section_id){
            getSubjects_feedback();
            getStudentsFeed(section_id);
        } else {
            alert("Select section first");
        }
});



function getSubjects_feedback(json) {

    $.ajax({
        type:"POST", 
        url:"feedbackDAO.php",
        datatype : 'json',
         success:function(result){
           
           subject_array = result;
           
        }
    });
        
}

function getStudentsFeed(section_id){
    
    $("#feedback_table").show();
    
    
    $("#feedback_table").DataTable({
        dom: "Bfrtip",
        destroy: true,
        "ajax":{
            url : 'feedbackDAO.php',
            method : 'POST',
            datatype : 'json',
            data: {
                'section_id': section_id
            }
        },
        responsive: "true",
        order: [[ 1, 'asc' ]],
        "columns":[
                {
                    title: "ID",
                    'data' : 'student_id'
                },
                {
                    title: "Roll No",
                    'data' : 'roll_no'
                },
                {
                    title: "Name",
                    'data' : 'name'
                },
                {
                    title: "Father's Name",
                    'data' : 'fathers_name'
                },
                {
                    title: "Address",
                    'data' : 'address'
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
                text: 'Send Message',
                name: 'feedback'        // do not change name
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
        
    });
    
}
