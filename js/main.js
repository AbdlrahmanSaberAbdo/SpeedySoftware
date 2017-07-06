$(function() {  
    $("html").niceScroll({
        cursorwidth:"8px",
        cursorcolor:"#f33c",
        cursorborder:'none',
        zindex:10
    });
}); 

$(document).ready(function(){  
   $("#header").sticky({topSpacing:0, zIndex:'50'});
    $('.stats-no').counterUp();
});