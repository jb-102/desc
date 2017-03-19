var table;
var teacherTable;
var dstudentTable;
var dsectionTable;
var students_div;
var teachers_div;
var sections_div;
var carousel;


$(document).ready(function (){
    
    students_div = $("#dashboard_students_div");
    teachers_div = $("#dashboard_teachers_div");
    sections_div = $("#dashboard_sections_div");
    carousel = $("#dCarousel");
    
    $.ajax({
        type:'POST',
        url:'dashboardDAO.php',
        success:function(json){

            var items = JSON.parse(json).data;
            for(var item in items){
                $("#students_count").html(items[item].students);
                $("#teachers_count").html(items[item].teachers);
                $("#sections_count").html(items[item].sections);
            }
        }
    }); 

});

function update() {

    var val = $('#class').val();
    $el = $('#section');
    $el.empty();

    $.ajax({

        type:"POST", 
        url:"studentDAO.php",
        datatype : 'json',
        data: {
                class_name: val
        },
        success:function(result){

           var items = JSON.parse(result).data;
           // var test= new Array(); 
           
           for(var item in items){

               $el.append($("<option></option>").attr("value", items[item].section_name).text(items[item].section_name)); 
           }

        },
        error: function(){
            alert("Error occurend while fetching sections");
        } 

    });

}


$("div#dashboard_students").on('click', function() {
    carousel.hide();
    students_div.show();
    teachers_div.hide();
    sections_div.hide();
    setStudentTable();
});

$("div#dashboard_teachers").on('click', function() {
    carousel.hide();
    students_div.hide();
    teachers_div.show();
    sections_div.hide();
    setTeacherTable();
});

$("div#dashboard_sections").on('click', function() {
    carousel.hide();
    students_div.hide();
    teachers_div.hide();
    sections_div.show();
    setSectionsTable();
});

function setStudentTable(){
    
    dstudentTable = $("table#dstudents_table").DataTable({
        dom: "Bfrtip",
        destroy: true,
        ajax: "studentDAO.php",
        order: [[ 0, 'asc' ]],
        rowId: 'id',
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
                type: "select",
                depends: 'section', 
                options: [
                    {label:"Nursery", value:"Nursery"},
                    {label:"LKG", value:"LKG"},
                    {label:"UKG", value:"UKG"},
                    {label:"First", value:"First"},
                    {label:"Second", value:"Second"},
                    {label:"Third", value:"Third"},
                    {label:"Fourth", value:"Fourth"},
                    {label:"Fifth", value:"Fifth"},
                    {label:"Sixth", value:"Sixth"},
                    {label:"Seventh", value:"Seventh"},
                    {label:"Eighth", value:"Eighth"},
                    {label:"Ninth", value:"Ninth"},
                    {label:"Tenth", value:"Tenth"}
                ]
                
            }, 
            {
                title: "Section",
                data: "section",
                type:"select",
                options:[]
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
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
        
    });
    
}

function setTeacherTable(){

    teacherTable = $('table#dteachers_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        "ajax":'teacherDAO.php',
        order: [[ 0, 'asc' ]],
        "columns":[
                {
                    title: "ID",
                    data : 'teacher_id',
                    type: 'readonly'
                },
                {   title: "Name",
                    data : 'name',
                    type: 'text'
                },
                {
                    title: "Email",
                    data : 'email',
                    type: 'text'
                },
                {
                    title: "Phone",
                    data : 'phone',
                    type: 'text'
                },
                {
                    title: "Address",
                    data : 'address',
                    type: 'txtarea'
                },
                {
                    title: "Gender",
                    data : 'gender',
                    type: "select", 
                    options: [
                        { label: "Male", value: "Male" },
                        { label: "Female", value: "Female" }
                    ]
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
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
    });
}

function setSectionsTable(){
    
    dsectionTable = $('table#dsections_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        ajax: "sectionDAO.php",
        order: [[ 2, 'desc' ]],
        "columns":[
                {
                title: "ID",
                data: "section_id",
                type: "readonly"
            },
            {
                title: "Class",
                data: "class_name",
                type: "select",
                special: "noEdit",
                options: [
                    {label:"Nursery", value:"1"},
                    {label:"LKG", value:"2"},
                    {label:"UKG", value:"3"},
                    {label:"First", value:"4"},
                    {label:"Second", value:"5"},
                    {label:"Third", value:"6"},
                    {label:"Fourth", value:"7"},
                    {label:"Fifth", value:"8"},
                    {label:"Sixth", value:"9"},
                    {label:"Seventh", value:"10"},
                    {label:"Eighth", value:"11"},
                    {label:"Ninth", value:"12"},
                    {label:"Tenth", value:"13"}
                ]
            },
            {
                title: "Section Name",
                data: "section",
                special: "noEdit",
                type: "text"
            },
            {
                title: "Password",
                data: "password",
                type: "text",
            },
            {
                title: "Total Students",
                data: "total_students",
                type: "readonly"
            }
        ],
        select: {
            style:    'os',
            blurable: 'true '
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
                text: 'Change Password',
                name: 'edit'        // do not change name
            },
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
