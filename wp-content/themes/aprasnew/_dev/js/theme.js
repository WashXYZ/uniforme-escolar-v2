$(document).ready(function() {

    NavArrowControl();
    FixedMenuExec();
    
    $("#body-nav-flag").click(() => {

        $(window).scrollTop(0);

    });

    $(window).scroll(() => {

        FixedMenuExec();
        NavArrowControl();

    });

    $(window).resize(() => {

        FixedMenuExec();
        NavArrowControl();

    });
        
              
    setTimeout(() => {  
    $(".temp-alert").hide();
    }, 2000);

    $(".carousel-inner").swipe( {
        //Generic swipe handler for all directions
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
            $(this).parent().carousel('next'); 
        },
        swipeRight: function() {
            $(this).parent().carousel('prev'); 
        },
        //Default is 75px
        threshold:30
    });


});


function FixedMenuExec() {

    if($(window).width() > 768) {

    if($(window).scrollTop() >= ($("#wrapper").offset().top + 100)) {
        $("#top-background").addClass("fixed");
    } else {
        $("#top-background").removeClass("fixed");
    }
}
}

function NavArrowControl() {
    if($(window).scrollTop() > 0) {
        $("#body-nav-flag").addClass("show");
    } else {
        $("#body-nav-flag").removeClass("show");
    }
}
