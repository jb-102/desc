var editorSection;
var sectionTable;


$(document).ready(function(){

});



// handle data
$('#1').click(function() {
    $(".child_menu li").removeClass("active");
    $('#1').addClass('active');
    $('#sub_heading_classes').text('Nursery');
    get_section_data(1, "Nursery");
});
$('#2').click(function() {
    $(".child_menu li").removeClass("active");
    $('#2').addClass('active');
    $('#sub_heading_classes').text('LKG');
    get_section_data(2, "LKG");
});
$('#3').click(function() {
    $(".child_menu li").removeClass("active");
    $('#3').addClass('active');
    $('#sub_heading_classes').text('UKG');
    get_section_data(3, "UKG");
});
$('#4').click(function() {
    $(".child_menu li").removeClass("active");
    $('#4').addClass('active');
    $('#sub_heading_classes').text('First');
    get_section_data(4, "First");
});
$('#5').click(function() {
    $(".child_menu li").removeClass("active");
    $('#5').addClass('active');
    $('#sub_heading_classes').text('Second');
    get_section_data(5, "Second");
});
$('#6').click(function() {
    $(".child_menu li").removeClass("active");
    $('#6').addClass('active');
    $('#sub_heading_classes').text('Third');
    get_section_data(6, "Third");
});
$('#7').click(function() {
    $(".child_menu li").removeClass("active");
    $('#7').addClass('active');
    $('#sub_heading_classes').text('Fourth');
    get_section_data(7, "Fourth");
});
$('#8').click(function() {
    $(".child_menu li").removeClass("active");
    $('#8').addClass('active');
    $('#sub_heading_classes').text('Fifth');
    get_section_data(8, "Fifth");
});
$('#9').click(function() {
    $(".child_menu li").removeClass("active");
    $('#9').addClass('active');
    $('#sub_heading_classes').text('Sixth');
    get_section_data(9, "Sixth");
});
$('#10').click(function() {
    $(".child_menu li").removeClass("active");
    $('#10').addClass('active');
    $('#sub_heading_classes').text('Seventh');
    get_section_data(10, "Seventh");
});
$('#11').click(function() {
    $(".child_menu li").removeClass("active");
    $('#11').addClass('active');
    $('#sub_heading_classes').text('Eighth');
    get_section_data(11, "Eighth");
});
$('#12').click(function() {
    $(".child_menu li").removeClass("active");
    $('#12').addClass('active');
    $('#sub_heading_classes').text('Ninth');
    get_section_data(12, "Ninth");
});
$('#13').click(function() {
    $(".child_menu li").removeClass("active");
    $('#13').addClass('active');
    $('#sub_heading_classes').text('Tenth');
    get_section_data(13, "Tenth");
});


// get data
function get_section_data(id, name){
        
    
    //get section data
    sectionTable = $('#section_table').DataTable({
        dom: "Bfrtip",
        destroy: true,
        "ajax":{
            url : 'sectionDAO.php',
            method : 'POST',
            datatype : 'json',
            data: {
                id: id
            }
        },
        order: [[ 0, 'asc' ]],
        "columns":[
                {
                    title: "Section Name",
                    data: "section",
                    type: "text"
                },
                {
                    title: "Password",
                    data: "password",
                    type: "text"
                },
                {
                    title: "Total Students",
                    data: "total_students",
                    type: "readonly"
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
            }
        ],
        "language": {
            "emptyTable": "No records found"
        }
    });

}
