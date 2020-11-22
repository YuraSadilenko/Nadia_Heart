
(() => {
  let navOpen = document.getElementById('navigation-open');
  let navigation = document.querySelector('.navigation');
  let navigationLeft = document.querySelector('.navigation__left');
  let navigationSocials = document.querySelectorAll('.navigation__socials a');
  let navigationListLinks = document.querySelectorAll('.navigation__list--item a');
  let navigationClose = document.querySelector('.navigation__close-btn');

  navOpen.onclick = function() {
    navigation.style.transform = 'translateX(0)';
    navigationLeft.classList.add('navigation__left--animated');
    navigationClose.classList.add('opacity-on');

    for(let i = 0; i < navigationListLinks.length; i++) {
      navigationListLinks[i].classList.add('transform-up');
    }

    for(let i = 0; i < navigationSocials.length; i++) {
      navigationSocials[i].classList.add('opacity-on');
    }
  }

  navigationClose.onclick = function() {
    navigation.style.transform = 'translateX(200%)';
    navigationLeft.classList.remove('navigation__left--animated');
    navigationClose.classList.remove('opacity-on');

    for(let i = 0; i < navigationListLinks.length; i++) {
      navigationListLinks[i].classList.remove('transform-up');
    }

    for(let i = 0; i < navigationSocials.length; i++) {
      navigationSocials[i].classList.remove('opacity-on');
    }
  }
})();   