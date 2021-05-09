$(function(){
    $(".toggle").click(function() {
        if($(this).hasClass("Inactive"))
        {
            window.location.replace('inc/functions/user-active.php?id="$id."');
        } else {
            window.location.replace('inc/functions/user-active.php?id=."$id"');
        }
    });

});

$(document).ready(function(){

    Dropzone.options.dropzone = {
        autoProcessQueue: true,
        acceptedFiles:".png,.jpg,.gif,.jpeg",
        init: function(){
            var submitButton = document.querySelector('#submit-all');
            myDropzone = this;
            submitButton.addEventListener("click", function(){
                myDropzone.processQueue();
            });

        },
    };



});
