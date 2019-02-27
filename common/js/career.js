$(function () {
  $('.cast-box').slick({
    infinite: true,
    dots: false,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: '100px',
    variableWidth: true,
    responsive: [{
      breakpoint: 768,
      settings: {
        centerMode: false,
        dots: true,
      }
          }]
  });
});
