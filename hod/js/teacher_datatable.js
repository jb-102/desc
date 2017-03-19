$(document).ready(function(){
    
 });
 
 
 $('#teacher').click(function() {
     get_teachers();
 });

 
 function get_teachers(){

    //get teacher data
    teacherTable = $('#teacher_table').DataTable({
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