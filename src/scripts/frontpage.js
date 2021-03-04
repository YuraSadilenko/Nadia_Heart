//slick config for front page
$('.sl').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  infinite: true,
  speed: 1500,
  fade: true,
  dots: false,
  lazyLoad: 'progressive',
  centerMode: true,
  lazyLoaded: 'imageSource',
  slickPlay: 1,
  pauseOnHover: false,
  focusOnSelect: false,
});

(() => {
  $('.portfolio__wrap').click(() => {
    window.location.href = './gallery';
  });
})()
