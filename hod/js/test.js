$(document).ready( function(){
        var progressbox = $("#progressbox"); // we created objects
        var progressbar = $("#progressbar");
        var progress = $("#progress");
        var completed = "0%"; // initial progress

        // these are function name which will execute after some particular event
        var options = {
                beforeSubmit : beforeSubmit,
                uploadProgress : OnProgress,
                success : afterSuccess,
                resetForm : true // after completion form will reset 

        };

        $("#uploadform").submit(function(){
                $(this).ajaxSubmit(options); // executes file uploading function
                return false;
        });

        // show progress
        function OnProgress(event, position, total, percentComplete){
                progressbar.width(percentComplete+"%");
                progress.html(percentComplete+"%");
        }

        function afterSuccess(){
                $("#output").html("Completed!!");
        }

        // use to validate data
        function beforeSubmit(){
            if(!$("#uploadfile").val()){
                $("#output").html("Please select any file");
                return false;
            }

            progressbar.width(completed);
            progress.html(completed);
        }

});