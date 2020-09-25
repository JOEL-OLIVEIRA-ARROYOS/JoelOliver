$(window).load(function(){
    $('.preloader').fadeOut("slow"); 
});

$(function(){

    $('.navbar-collapse a').click(function(){
        $(".navbar-collapse").collapse('hide');
    });

    $('#portfolio a').nivoLightbox({
        effect: 'fadeScale',
    });

    wow = new WOW(
    {
      mobile: false
    });
    wow.init();

    function initParallax() 
    {
      $('#home').parallax("100%", 0.3);
      $('#conhecimentos').parallax("100%", 0.3);
      $('#contact').parallax("100%", 0.1);

    }

    initParallax();
    
});

