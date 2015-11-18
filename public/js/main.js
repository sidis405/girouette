// Insert your JS here
$(document).ready(function() {
	$('#scene').parallax();
});

// Slick init

$('.opening-carousel').slick({
  dots: false,
  infinite: true,
  speed: 500, 
  autoplay: true, 
  cssEase: 'linear'
});

$('.partners').slick({
  dots: false,
  infinite: true,
  // speed: 7000,
  autoplay: true,
  autoplaySpeed: 2000,
  slidesToShow: 4,
  arrows: false,
  cssEase: 'linear',
  responsive: [
    {
     breakpoint: 1199,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 1,
       infinite: true       
     }
   },
   {
     breakpoint: 767,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1,
       infinite: true       
     }
   }
   ]
});

$(document).ready(function() {
  $(window).scroll(function(){
    if ($(window).scrollTop() > $('h2.slogan').offset().top) {
      $('header').fadeIn(300)
    } else {
      $('header').fadeOut(300)
    }
  })
});

// Cache selectors
var lastId,
    topMenu = $("header"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
$('header a, .welcome-container a').click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight-60;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 300);
  e.preventDefault();
});

$('.open-popup').magnificPopup({
  type:'inline',
  midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
});

$('#contact_form').submit(function(e){
  e.preventDefault();

  // alert('invia mail');

  sendContactMail();

})

function sendContactMail() {

    var token = $('meta[name="_token"]').attr('content');

    // console.log(last_activity);
    var formData = $('#contact_form').serializeArray();

    $.ajax({
        url: "/contact_send",
        type: 'POST',
        data: {_token : token, form: formData},
        success: function(data) {

            // alert('mail spedita');

            $('.write.footer-box').html('<div class="success_contact">Grazie per averci contattato. Vi risponderemo il prima possibile.</div>');

            return false;
        },
        error: function(XMLHttpRequest, textstatus, error) {

            return false;

        }
    });

    return false;


}





//# sourceMappingURL=main.js.map
//1