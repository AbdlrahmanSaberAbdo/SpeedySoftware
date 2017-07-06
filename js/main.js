$(function() {  
    $("html").niceScroll({
        cursorwidth:"8px",
        cursorcolor:"#FF5B5B",
        cursorborder:'none',
        zindex:10
    });
}); 

$(document).ready(function(){  
   $("#header").sticky({topSpacing:0, zIndex:'50'});
    $('.stats-no').counterUp();
});