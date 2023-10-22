let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          const slides = document.querySelectorAll('.slideshow img');
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = 'none';
          }
          slideIndex++;
          if (slideIndex > slides.length) {
            slideIndex = 1;
          }
          slides[slideIndex - 1].style.display = 'block';
          setTimeout(showSlides, 2000); // Ganti gambar setiap 2 detik
        }
             const spans = document.querySelectorAll('h1 span');
        spans.forEach(span => {
        span.addEventListener('mouseover', function(e) {
            span.classList.add('animated', 'rubberBand');
        });

      span.addEventListener('mouseout', function(e) {
        span.classList.remove('animated', 'rubberBand');
      });
    });
  alert("Hai Selamat datang di blog pribadi saya")
