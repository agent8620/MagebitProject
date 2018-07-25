const slider = $('#slider');
const sigForm = $('#signupWrapper');
const logForm = $('#loginWrapper');
const shadow = $('#shadow');
$(function () {
    logForm.show();
    logForm.animate({opacity: 1,}, duration =250);
    $('#signup').click(function () {
        logForm.animate({opacity: 0,}, duration =250);
        shadow.animate({left: '19%',}, duration = 1000);
        slider.animate
        (
            {left: '2%',}, duration = 1000, function () {
                logForm.hide();
                sigForm.show();
                sigForm.animate({opacity: 1,}, duration =250);
            }
        );


    });
    $('#login').click(function () {
        sigForm.animate({opacity: 0,}, duration =250);
        shadow.animate({left: '49.2%',}, duration = 1000);
        slider.animate
        (
            {left: '32%',}, duration = 1000, function () {
                sigForm.hide();
                logForm.show();
                logForm.animate({opacity: 1,}, duration =250);
            }
        );
    });
    // $(function () {
    //     $.ajax( "signup.php" )
    //         .done(function() {
    //             alert( "success" );
    //         })
    //         .fail(function() {
    //             alert( "error" );
    //         })
    //         .always(function() {
    //             alert( "complete" );
    //         });
    // });

});