$(function() {  
    $("html").niceScroll({
        cursorwidth:"8px",
        cursorcolor:"#DC143C",
        cursorborder:'none',
        zindex:10
    });
}); 

$(document).ready(function(){  
   $("#header").sticky({topSpacing:0, zIndex:'50'});
});