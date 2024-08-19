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

// Footer Section 
const scriptURL ='https://script.google.com/macros/s/AKfycbzSZuuG6yYuPAoKu0stzpdehBlLCJo5unfWy_gDwj1DGPh-aBmCexgBkFfMjzdq1xnQ/exec'
const form = document.forms['submit-to-google-sheet']
const inputElement = document.getElementById('button-addon2');

form.addEventListener('submit', e => {
e.preventDefault();
inputElement.value = 'sending';
inputElement.disabled = true;
const successMessage = document.getElementById(
    'success-message'); // Replace with your success message element's ID

fetch(scriptURL, {
        method: 'POST',
        body: new FormData(form)
    })
    .then(response => {
        console.log('Success!', response);
        successMessage.textContent =
            'Form submitted successfully!'; // Update the success message text
        successMessage.style.display = 'block'; // Show the success message
        inputElement.value = 'Submitedd';
        form.reset();
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 5000);
    })
    .catch(error => {
        console.error('Error!', error.message);
        // Handle errors, e.g., display an error message
    });
});