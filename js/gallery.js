$(document).ready(function() {
    $('.grid-nav li a').on('click', function(event){
        event.preventDefault();
        $('.grid-container').fadeOut(500, function(){
            $('#' + gridID).fadeIn(500);
        });
        var gridID = $(this).attr("data-id");
        
        $('.grid-nav li a').removeClass("active");
        $(this).addClass("active");
    });
});
