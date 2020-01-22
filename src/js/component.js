$(document).ready(function () {
  $('.catalog-tab>li>a').click(function (e) {
    e.preventDefault();
    $('.catalog-tab li').removeClass('active');
    $('.catalog-item').removeClass('active');
    $(this).parent().addClass('active');
    $($(this).attr('href')).addClass('active');
  })

  $('.item-list>li>a').click(function (e) {
    e.preventDefault();
    $('.item-list li a').removeClass('active');
    $('.item-content').removeClass('active');
    $('[href="' + $(this).attr('href') + '"]').addClass('active');
    $('.item-content.' + $(this).attr('href')).addClass('active');
  })

  $('.category-slider').slick({
    slidesToShow: 7,
    infinite: true,
    nextArrow: '<button type="button" class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.49 31.49"><path d="M21.205 5.007a1.112 1.112 0 0 0-1.587 0 1.12 1.12 0 0 0 0 1.571l8.047 8.047H1.111A1.106 1.106 0 0 0 0 15.737c0 .619.492 1.127 1.111 1.127h26.554l-8.047 8.032c-.429.444-.429 1.159 0 1.587a1.112 1.112 0 0 0 1.587 0l9.952-9.952a1.093 1.093 0 0 0 0-1.571l-9.952-9.953z" fill="#1e201d"/></svg></button>',
    prevArrow: '<button type="button" class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.494 31.494"><path d="M10.273 5.009a1.112 1.112 0 0 1 1.587 0 1.12 1.12 0 0 1 0 1.571l-8.047 8.047h26.554c.619 0 1.127.492 1.127 1.111s-.508 1.127-1.127 1.127H3.813l8.047 8.032c.429.444.429 1.159 0 1.587a1.112 1.112 0 0 1-1.587 0L.321 16.532a1.12 1.12 0 0 1 0-1.571l9.952-9.952z" fill="#1e201d"/></svg></button>',
    responsive: [
      {
        breakpoint: 1366,
        settings: {
          slidesToShow: 5
        }
    },
      {
        breakpoint: 1025,
        settings: {
//          arrows: false,
          slidesToShow: 2
        }
    },
      {
        breakpoint: 480,
        settings: {
//          arrows: false,
          dots: true,
          slidesToShow: 1
        }
    }
  ]
  });
});