
var mainImg = document.querySelector('.main__img');
var slickTest = document.querySelectorAll('.slick-box');

mainImg.onclick = () => {
  for( var j = 0; j < slickTest.length; j++) {
      slickTest[j].classList.add('activated');
    }
}

mainImg.onload = () => {
  $('.sl').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.sl__nav'
  });
  $('.sl__nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.sl',
    dots: false,
    centerMode: true,
    focusOnSelect: true
  });
}









