(function($){
  $(function(){

    $('.button-collapse').sideNav();
    $('.parallax').parallax();


    $(document).ready(function(){
      $('.carousel').carousel({
            dist:10,
            shift:5,
            padding:20,

      });

    });

  }); // end of document ready
})(jQuery); // end of jQuery name space
