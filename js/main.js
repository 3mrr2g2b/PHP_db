$(document).ready (function(){
    
    $('.toggle').click (function(){
        $('.ul').slideToggle(0.3);
        $('.toggle').toggleClass('active');
    });
});