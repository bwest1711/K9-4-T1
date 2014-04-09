$(document).ready(function () {
    $('nav ul li a').click(function() {
    
    }).hover(function() {
        $(this).addClass('nav-hover');
    }, function() {
        $(this).removeClass('nav-hover');
    });
});