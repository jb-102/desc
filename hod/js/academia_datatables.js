var mSubject = "";

$(document).ready(function() {
    getSections("Grasping Ability");
});

$("#grasping-tab").click(function (){
    $('#academia_select_class').val('').trigger('chosen:updated');
    $('#academia_select_section').val('').trigger('chosen:updated');
    $('#academia_table').parents('div.dataTables_wrapper').first().hide();
    getSections("Grasping Ability");
});

$("#reading-tab").click(function (){
    $('#academia_select_class').val('').trigger('chosen:updated');
    $('#academia_select_section').val('').trigger('chosen:updated');
    $('#academia_table').parents('div.dataTables_wrapper').first().hide();
    getSections("Reading Skills");
});

$("#writing-tab").click(function (){
    $('#academia_select_class').val('').trigger('chosen:updated');
    $('#academia_select_section').val('').trigger('chosen:updated');
    $('#academia_table').parents('div.dataTables_wrapper').first().hide();
    getSections("Writing Skills");
});

$("#pd-tab").click(function (){
    $('#academia_select_class').val('').trigger('chosen:updated');
    $('#academia_select_section').val('').trigger('chosen:updated');
    $('#academia_table').parents('div.dataTables_wrapper').first().hide();
    getSections("Personality Development");
});

function getSections(subject){

    mSubject = subject;

    $("#academia_select_class").on('change',function(){

            var class_id = $(this).val();
            if(class_id){
                $.ajax({
                    type:'POST',
                    url:'academiaDAO.php',
                    data:'class_id='+class_id,
                    success:function(result){
                        $("#academia_select_section").html(result);
                    }
                }); 
            } else {
                alert("Select Class first");
            }
    });

    $("#academia_select_section").on('change',function(){

            var section_id = $(this).val();
            if(section_id){
                 getStudentsAcad(section_id, subject);
            } else {
                alert("Select section first");
            }
    });

}

function getStudentsAcad(section_id, subject){
    
    $("#academia_table").show();    
    
    $("#academia_table").DataTable({
        dom: "Bfrtip",
        destroy: true,
        "ajax":{
            url : 'academiaDAO.php',
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

