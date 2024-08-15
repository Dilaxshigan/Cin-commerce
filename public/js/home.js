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

  // For fadeInRight animation
  document.addEventListener('DOMContentLoaded', function() {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1 
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fadeInRight');
                observer.unobserve(entry.target); 
            }
        });
    }, observerOptions);

    document.querySelectorAll('.animate-me').forEach(element => {
        observer.observe(element);
    });
});

// For fadeInUp animation 
document.addEventListener('DOMContentLoaded', function() {
  const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1 
  };

  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('fadeInUp');
              observer.unobserve(entry.target); 
          }
      });
  }, observerOptions);

  document.querySelectorAll('.animate-me-1').forEach(element => {
      observer.observe(element);
  });
});