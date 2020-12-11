var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.swiper-container', {
  pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
  },
  autoplay: {
      delay: 3000,
  },
});

window.addEventListener('DOMContentLoaded', function(){
  $('#toggle').on('click',function(){
      $(this).toggleClass('on');
      $('.js-drower').toggleClass('on');

      let isActive = $(this).hasClass('on');
      toggleDrower(isActive);
  });
});

  function toggleDrower(isActive) {
    if (isActive) {
      $('#drower-bg').fadeIn(600);
    } else {
      $('#drower-bg').fadeOut(600);
    }
  } 