var editorStudent;
var studentTable;

var notifyStudent;
        
$(document).ready(function(){
    
 });
 
// handle data
$('#st1').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st1').addClass('active');
    $('#sub_heading_student').text('Nursery');
    getSectionTabs(1, "Nursery");
});
$('#st2').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st2').addClass('active');
    $('#sub_heading_student').text('LKG');
    getSectionTabs(2, "LKG");
});
$('#st3').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st3').addClass('active');
    $('#sub_heading_student').text('UKG');
    getSectionTabs(3, "UKG");
});
$('#st4').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st4').addClass('active');
    $('#sub_heading_student').text('First');
    getSectionTabs(4, "First");
});
$('#st5').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st5').addClass('active');
    $('#sub_heading_student').text('Second');
    getSectionTabs(5, "Second");
});
$('#st6').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st6').addClass('active');
    $('#sub_heading_student').text('Third');
    getSectionTabs(6, "Third");
});
$('#st7').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st7').addClass('active');
    $('#sub_heading_student').text('Fourth');
    getSectionTabs(7, "Fourth");
});
$('#st8').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st8').addClass('active');
    $('#sub_heading_student').text('Fifth');
    getSectionTabs(8, "Fifth");
});
$('#st9').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st9').addClass('active');
    $('#sub_heading_student').text('Sixth');
    getSectionTabs(9, "Sixth");
}); 
$('#st10').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st10').addClass('active');
    $('#sub_heading_student').text('Seventh');
    getSectionTabs(10, "Seventh");
}); 
$('#st11').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st11').addClass('active');
    $('#sub_heading_student').text('Eighth');
    getSectionTabs(11, "Eighth");
}); 
$('#st12').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st12').addClass('active');
    $('#sub_heading_student').text('Ninth');
    getSectionTabs(12, "Ninth");
}); 
$('#st13').click(function() {
    $(".child_menu li").removeClass("active");
    $('#st13').addClass('active');
    $('#sub_heading_student').text('Tenth');
    getSectionTabs(13, "Tenth");
}); 

$('#section_tabs').on('click','.section_tab',function() {

    var id = $(this).data('id');
    var section_name = $(this).data('section_name');
    var class_name = $(this).data('class_name');
    // alert("class_name = "+class_name+" id = "+id+" section_name = "+section_name);
    getStudentTable(class_name, id, section_name);
     
})



function getSectionTabs(class_id, class_name){
    
    $.ajax({
        type:"POST", 
        url:"getSectionTabs.php",
        data: {
                class_id: class_id
        },
        success:function(result){
             
            var items = JSON.parse(result).data;
            var htmlTabs = "";
            var htmlContent = "";
            var active = "active";
            var aria_expanded = "true";
            // fix:  makes 'no data availabale in table' align left 
            var content_active = "tab-pane fade active in";
            
            for(var item in items){
               
               htmlTabs = htmlTabs+"<li role='presentation' class='"+active+"' ><a href='#section_"+items[item].id+"' id='tab_"+items[item].id+"' class='section_tab' data-id='"+items[item].id+"' data-class_name='"+class_name+"' data-section_name='"+items[item].section_name+"' role='tab' data-toggle='tab' aria-expanded='"+aria_expanded+"'> Section "+items[item].section_name+"</a></li>";
               
               active = "";
               aria_expanded = false;
                
               htmlContent = htmlContent+"<div role='tabpanel' class='"+content_active+"' id='section_"+items[item].id+"' aria-labelledby='tab_"+items[item].id+"' >"+  
                                    "<div class='x_content'>"+
                                        "<p class='text-muted font-13 m-b-30'>"+

                                        "</p>"+
                                        "<table id='student_table"+items[item].id+"' class='table table-striped table-bordered dt-responsive wrap' width='100%'>"+
                                          "<thead>"+
                                            "<tr>"+
                                              "<th>ID</th>"+
                                              "<th>Roll No.</th>"+
                                              "<th>Admission No.</th>"+
                                              "<th>Name</th>"+
                                              "<th>Class</th>"+
                                              "<th>Section</th>"+
                                              "<th>Father's Name</th>"+
                                              "<th>Mother's Name</th>"+
                                              "<th>Email</th>"+
                                              "<th>Phone</th>"+
                                              "<th>Address</th>"+
                                              "<th>Gender</th>"+
                                              "<th>DOB</th>"+
                                            "</tr>"+
                                          "</thead>"+

                                        "</table>"+

                                     "</div>"+
                                "</div>";     
                    
                    content_active = "tab-pane fade";
               
            }

            $("#section_tabs").html(htmlTabs);
            $("#section_content").html(htmlContent);
            
            for(var item in items){
                
                getStudentTable(class_name, items[item].id, items[item].section_name);
                break;
                
            }
            
        }
    });
}


function getStudentTable(class_name, section_id, section_name){

     //get section data
    studentTable = $("#student_table"+section_id).DataTable({
        dom: "Bfrtip",
        destroy: true,
        "ajax":{
            url : 'studentDAO.php',
            method : 'POST',
            datatype : 'json',
            data: {
                section_id: section_id
            }
        },
        order: [[ 1, 'asc' ]],
        "columns":[
                {
                title: "ID",
                data: "student_id",
                type: "readonly"
            },
            {
                title: "Roll No",
                data: "roll_no",
                type: "text"
            },
            {
                title: "Admission No",
                data: "adm_no",
                type: "text"
            },
            {
                title: "Name",
                data: "name",
                type: "text"
            }, 
            {
                title: "Class",
                data: "class",
                type:"noEdit",
                def: class_name
                
            }, 
            {
                title: "Section",
                data: "section",
                type:"noEdit",
                def: section_name
            }, 
            {
                title: "Father's Name",
                data: "fathers_name",
                type: "text"
            }, 
            {
                title: "Mother's Name",
                data: "mothers_name",
                type: "text"
            }, 
            {
                title: "Email",
                data: "email",
                type: "text"
            }, 
            {
                title: "Phone",
                data: "phone",
                type: "text"
            }, 
            {
                title: "Address",
                data: "address",
                type: "txtarea"
            }, 
            {
                title: "Gender",
                data: "gender",
                type: "select",
                options: [
                    { label: "Male", value: "Male" },
                    { label: "Female", value: "Female" }
                ]
            }, 
            {
                title: "DOB",
                data: "dob",
                type: 'date',
                class: 'date-picker'

            }
                
        ],
        select: {
            style:    'os',
            blurable: 'true'
        }, 
        altEditor: true,
        responsive: true,
        buttons: [
            {
                text: 'Add',
                name: 'add'        // do not change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Edit',
                name: 'edit'        // do not change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Delete',
                name: 'delete'        // do not change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Send Fee Status',
                name: 'feedback'        // do not change name
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
        
    });
}