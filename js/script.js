// Login / Register
$(document).ready(function() {
    $('#login-btn').click(function(e) {
        $("#login-form").delay(400).fadeIn(400);
        $("#register-form").fadeOut(400);
        $('#register-btn').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
    $('#register-btn').click(function(e) {
        $("#register-form").delay(400).fadeIn(400);
        $("#login-form").fadeOut(400);
        $('#login-btn').removeClass('active');
        $(this).addClass('active');
        e.preventDefault();
    });
});