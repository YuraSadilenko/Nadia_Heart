
var mainImg = document.querySelectorAll('.gallery__img');
var slickTest = document.querySelectorAll('.slick-box');
var sliderItem = document.querySelectorAll('.sl');
var sliderBoxClose = document.querySelectorAll('.slick-box__close');

//open popup with slick slider and description block  
// for(var i = 0; i < mainImg.length; i++){
//   mainImg[i].onclick = () => {
//     for( var j = 0; j < slickTest.length; j++) {
//         slickTest[j].classList.add('activated');
//       }  
//       $('.slick-slider').slick('setPosition');
//   }
// }






//close button for popup with slick slider and description block
for(var i = 0; i < sliderBoxClose.length; i++) {
  sliderBoxClose[i].onclick = () => {
    for(var j = 0; j < slickTest.length; j++) {
      slickTest[j].classList.remove('activated');
    }
  }
}

//slick config for gallery
  $('.sl').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    infinite: true,
    speed: 500,
    fade: true,
    lazyLoad: 'progressive',
    asNavFor: '.sl__nav',
    respondTo: '.sl__block',
    centerMode: true,
    lazyLoaded: 'imageSource',
    slickPlay: 1,
  });
  $('.sl__nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.sl',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    lazyLoaded: 'imageSource',
  });

  function openPicture(identificator) {
      var getId = document.querySelectorAll(identificator);
      getId.forEach(element => {
        element.classList.add('activated');

      });
      console.log(getId)
      $('.slick-slider').slick('setPosition');
  }