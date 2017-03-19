$(document).ready(function (){
    $("#dashboard_nav").addClass('active');
});

//dashboard
$('#dashboard').click(function() {
    
    $(".side-menu li").removeClass("active");
    $('#dashboard').addClass('active');
    
    if($("#teacher_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#teacher_div").slideUp();
    }
    else if($("#student_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#student_div").slideUp();

    }
    else if($("#classes_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#classes_div").slideUp();  
    }
    else if($("#timetable_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#timetable_div").slideUp();  
    }
    else if($("#worksheets_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#worksheets_div").slideUp();  
    }
    else if($("#academia_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#academia_div").slideUp();  
    }
    else if($("#feedback_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#feedback_div").slideUp();  
    }
    else if($("#exams_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
      $("#dashboard_div").slideDown();
    }
});

//teacher
$('#teacher').click(function() {
    
    $(".side-menu li").removeClass("active");
    $('#teacher').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#teacher_div").slideDown(); 
    }
    else if($("#student_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();  
      $("#student_div").slideUp();
    }
    else if($("#classes_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#classes_div").slideUp();  
    }
    else if($("#timetable_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#timetable_div").slideUp();  
    }
    else if($("#worksheets_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#worksheets_div").slideUp();  
    }
    else if($("#academia_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#academia_div").slideUp();  
    }
    else if($("#feedback_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#feedback_div").slideUp();  
    }
    else if($("#exams_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#dashboard_div").is(':hidden'))
    {
      $("#dashboard_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#teacher_div").is(':hidden'))
    {
      $("#teacher_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
        $("#teacher_div").slideDown();

    }
});

//student
$('#student').click(function() {
    
    if($("#dashboard_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#student_div").slideDown(); 
    }
    else if($("#teacher_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#student_div").slideDown();
    }
    else if($("#classes_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#classes_div").slideUp();  
    }
    else if($("#timetable_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#timetable_div").slideUp();  
    }
    else if($("#worksheets_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#worksheets_div").slideUp();  
    }
    else if($("#academia_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#academia_div").slideUp();  
    }
    else if($("#feedback_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#feedback_div").slideUp();  
    }
    else if($("#exams_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#student_div").is(':hidden'))
    {
      $("#student_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
        $("#student_div").slideDown();
    }
});

//classes
$('#classes').click(function() {
    
    if($("#dashboard_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#classes_div").slideDown(); 
    }
    else if($("#teacher_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#classes_div").slideDown();
    }
    else if($("#student_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#classes_div").slideDown();
    }
    else if($("#timetable_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#timetable_div").slideUp();  
    }
    else if($("#worksheets_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#worksheets_div").slideUp();  
    }
    else if($("#academia_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#academia_div").slideUp();  
    }
    else if($("#feedback_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#feedback_div").slideUp();  
    }
    else if($("#exams_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#classes_div").is(':hidden'))
    {
      $("#classes_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
        $("#classes_div").slideDown();
    }
});

//upload - upload-pdf
$('#timetable_upload').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#timetable_upload').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#timetable_div").slideDown(); 
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#student_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#worksheets_div").slideUp();  
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#academia_div").slideUp();
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#feedback_div").slideUp();  
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show();      
    }
    else if($("#exams_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#exams_div").slideUp();
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show(); 
    }
    else if($("#notes_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#notes_div").slideUp();  
      $("#view_timetable_div").hide();
      $("#upload_timetable_div").show(); 
    }
    else
    {
        $("#timetable_div").slideDown();
        $("#view_timetable_div").hide();
        $("#upload_timetable_div").show();
    }
});

//upload - view-all
$('#timetable_view_all').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#timetable_view_all').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#timetable_div").slideDown(); 
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#student_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#timetable_div").slideDown();
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#worksheets_div").slideUp();  
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#academia_div").slideUp();
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#feedback_div").slideUp(); 
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#exams_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#exams_div").slideUp();  
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else if($("#notes_div").is(':visible') && $("#timetable_div").is(':hidden'))
    {
      $("#timetable_div").slideDown();
      $("#notes_div").slideUp(); 
      $("#upload_timetable_div").hide();
      $("#view_timetable_div").show();
    }
    else
    {
        $("#timetable_div").slideDown();
        $("#upload_timetable_div").hide();
        $("#view_timetable_div").show();
    }
});

//worksheets - upload
$('#worksheets_upload').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#worksheets_upload').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#worksheets_div").slideDown(); 
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
      
    }
    else if($("#teacher_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#worksheets_div").slideDown();
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
      
    }
    else if($("#student_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#worksheets_div").slideDown();
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#classes_div").slideUp();
      $("#worksheets_div").slideDown();  
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();
      $("#worksheets_div").slideDown();  
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#academia_div").slideUp();
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#feedback_div").slideUp(); 
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#exams_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#exams_div").slideUp();  
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else if($("#notes_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#notes_div").slideUp();  
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
    else
    {
      $("#worksheets_div").slideDown();
      $("#view_worksheet_div").hide();
      $("#upload_worksheet_div").show();
    }
});

//worksheets - view all
$('#worksheets_view_all').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#worksheets_view_all').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#worksheets_div").slideDown(); 
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#worksheets_div").slideDown();
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
      
    }
    else if($("#student_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#worksheets_div").slideDown();
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#classes_div").slideUp();
      $("#worksheets_div").slideDown();  
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();
      $("#worksheets_div").slideDown();  
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#academia_div").slideUp();
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#feedback_div").slideUp();  
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#exams_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#exams_div").slideUp();  
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else if($("#notes_div").is(':visible') && $("#worksheets_div").is(':hidden'))
    {
      $("#worksheets_div").slideDown();
      $("#notes_div").slideUp(); 
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
    else
    {
      $("#worksheets_div").slideDown();
      $("#upload_worksheet_div").hide();
      $("#view_worksheet_div").show();
    }
});

//academia
$('#academia').click(function() {
    
    $(".side-menu li").removeClass("active");
    $('#academia').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#academia_div").slideDown(); 
    }
    else if($("#teacher_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#academia_div").slideDown();
    }
    else if($("#student_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#academia_div").slideDown();
    }
    else if($("#classes_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#academia_div").slideDown();
    }
    else if($("#timetable_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#academia_div").slideDown();
    }
    else if($("#worksheets_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp(); 
      $("#academia_div").slideDown();
    }
    else if($("#feedback_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#academia_div").slideDown();
      $("#feedback_div").slideUp();  
    }
    else if($("#exams_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#academia_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#academia_div").is(':hidden'))
    {
      $("#academia_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
        $("#academia_div").slideDown();
    }
});

//feedback
$('#feedback').click(function() {
    
    $(".side-menu li").removeClass("active");
    $('#feedback').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#feedback_div").slideDown(); 
    }
    else if($("#teacher_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#feedback_div").slideDown();
    }
    else if($("#student_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#feedback_div").slideDown();
    }
    else if($("#classes_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#feedback_div").slideDown();
    }
    else if($("#timetable_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#feedback_div").slideDown();
    }
    else if($("#worksheets_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp();  
      $("#feedback_div").slideDown();
    }
    else if($("#academia_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#academia_div").slideUp();    
      $("#feedback_div").slideDown();
    }
    else if($("#exams_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#feedback_div").slideDown();
      $("#exams_div").slideUp();  
    }
    else if($("#notes_div").is(':visible') && $("#feedback_div").is(':hidden'))
    {
      $("#feedback_div").slideDown();
      $("#notes_div").slideUp();  
    }
    else
    {
        $("#feedback_div").slideDown();
    }
});

//exams - upload
$('#exams_upload').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#exams_upload').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#exams_div").slideDown(); 
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#student_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp();  
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#academia_div").slideUp();    
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#feedback_div").slideUp();
      $("#exams_div").slideDown();
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else if($("#notes_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#exams_div").slideDown();
      $("#notes_div").slideUp(); 
      $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
    else
    {
        $("#exams_div").slideDown();
        $("#view_all_exam_div").hide();
      $("#upload_exams_div").show();
    }
});

// exams view all
$('#exams_view_all').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#exams_view_all').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#exams_div").slideDown(); 
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#student_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp();  
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#academia_div").slideUp();    
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#feedback_div").slideUp();
      $("#exams_div").slideDown();
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else if($("#notes_div").is(':visible') && $("#exams_div").is(':hidden'))
    {
      $("#exams_div").slideDown();
      $("#notes_div").slideUp();  
      $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
    else
    {
        $("#exams_div").slideDown();
        $("#upload_exams_div").hide();
      $("#view_all_exam_div").show();
    }
});

//notes - upload
$('#notes_upload').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#notes_upload').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#notes_div").slideDown(); 
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#teacher_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#student_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp();  
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#academia_div").slideUp();    
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#feedback_div").slideUp();
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else if($("#exams_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#exams_div").slideUp();   
      $("#notes_div").slideDown();
      $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
    else
    {
        $("#notes_div").slideDown();
       $("#view_notes_div").hide();
      $("#upload_notes_div").show();
    }
});

//notes - view all
$('#notes_view_all').click(function() {
    
    $(".child_menu li").removeClass("active");
    $('#notes_view_all').addClass('active');
    
    if($("#dashboard_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#dashboard_div").slideUp();  
      $("#notes_div").slideDown(); 
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
      
    }
    else if($("#teacher_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#teacher_div").slideUp();  
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#student_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#student_div").slideUp();  
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#classes_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#classes_div").slideUp();  
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#timetable_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#timetable_div").slideUp();  
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#worksheets_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#worksheets_div").slideUp();  
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#academia_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#academia_div").slideUp();    
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#feedback_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#feedback_div").slideUp();
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else if($("#exams_div").is(':visible') && $("#notes_div").is(':hidden'))
    {
      $("#exams_div").slideUp();   
      $("#notes_div").slideDown();
      $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
    else
    {
        $("#notes_div").slideDown();
       $("#upload_notes_div").hide();
      $("#view_notes_div").show();
    }
});