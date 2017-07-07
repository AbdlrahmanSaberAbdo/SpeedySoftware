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
});


/*====================Nav Mobile ============================*/
  // Mobile Navigation
  if( $('#nav-menu-container').length ) {
      var $mobile_nav = $('#nav-menu-container').clone().prop({ id: 'mobile-nav'});
      $mobile_nav.find('> ul').attr({ 'class' : '', 'id' : '' });
      $('body').append( $mobile_nav );
      $('body').prepend( '<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>' );
      $('body').append( '<div id="mobile-body-overly"></div>' );
      $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');
      
      $(document).on('click', '.menu-has-children i', function(e){
          $(this).next().toggleClass('menu-item-active');
          $(this).nextAll('ul').eq(0).slideToggle();
          $(this).toggleClass("fa-chevron-up fa-chevron-down");
      });
      
      $(document).on('click', '#mobile-nav-toggle', function(e){
          $('body').toggleClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').toggle();
      });
      
      $(document).click(function (e) {
          var container = $("#mobile-nav, #mobile-nav-toggle");
          if (!container.is(e.target) && container.has(e.target).length === 0) {
             if ( $('body').hasClass('mobile-nav-active') ) {
                  $('body').removeClass('mobile-nav-active');
                  $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                  $('#mobile-body-overly').fadeOut();
              }
          }
      });
  } else if ( $("#mobile-nav, #mobile-nav-toggle").length ) {
      $("#mobile-nav, #mobile-nav-toggle").hide();
  }
  
/*====================Nav Mobile ============================*/





    var userEerror =true,
    emailEerror =true,
    msgEerror =true; 

    $('.username').blur(function () {

        if ($(this).val().length < 4) {
            $(this).css('border', '1px solid #f00').parent().find('.alert1').fadeIn(300).end().find('.asterisk').fadeIn(100)
        } else {      
            $(this).css('border', '1px solid green').parent().find('.alert1').fadeOut(200).end().find('.asterisk').fadeOut(100);
            userEerror =false;
           
        }

    });

        $('.email').blur(function () {

        if ($(this).val() == "") {
            $(this).css('border', '1px solid #f00').parent().find('.alert2').fadeIn(300).end().find('.asterisk').fadeIn(100);
        } else {
            
            $(this).css('border', '1px solid green').parent().find('.alert2').fadeOut(200).end().find('.asterisk').fadeOut(100);
            emailEerror =false;     
        }

    });

        $('.message').blur(function () {

        if ($(this).val().length < 11) {
            $(this).css('border', '1px solid #f00').parent().find('.alert3').fadeIn(300).end().find('.asterisk').fadeIn(100);          
        } else {
            $(this).css('border', '1px solid green').parent().find('.alert3').fadeOut(200).end().find('.asterisk').fadeOut(100);
            msgEerror = false;         
        }

    });

        $('.contact_form').submit(function(e) {
        	if(userEerror === true || emailEerror === true || msgEerror === true) {
        		e.preventDefault();
        		$('.username, .email, .message').blur();
        }
    });
