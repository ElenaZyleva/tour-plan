var hotelSlider = new Swiper('.hotel-slider', {
    // Optional parameters    
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.hotel-slider__button--next',
      prevEl: '.hotel-slider__button--prev',
    },
    
    // Enable keyboard navigation by Page Up and Page Down keys
    keyboard: {
      enabled: true,      
      pageUpDown: true,
    },
  });
  
  var reviewsSlider = new Swiper('.reviews-slider', {
    // Optional parameters    
    loop: true,
    autoHeight: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.reviews-slider__button--next',
      prevEl: '.reviews-slider__button--prev',
    },
    
    // Enable keyboard navigation by Page Up and Page Down keys
    keyboard: {
      enabled: true,      
      pageUpDown: true,
    },
  });

  $('.newsletter').parallax({imageSrc: 'img/newsletter-bg.jpg'});

  var menuButton = document.querySelector('.menu-button');
  menuButton.addEventListener('click', function(){
    document.querySelector('.navbar').classList.toggle('navbar--visible');
  });

  