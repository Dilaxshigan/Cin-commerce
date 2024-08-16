// For carousel slider
  document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('#carouselExampleAutoplaying');

    $(carousel).on('slid.bs.carousel', function () {
      $('.carousel-caption').removeClass('animate');
      setTimeout(function () {
        $('.carousel-caption').addClass('animate');
      }, 100); 
    });
  });

  