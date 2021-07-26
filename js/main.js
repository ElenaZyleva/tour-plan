const swiper = new Swiper('.swiper-container', {
    // Optional parameters    
    loop: true,
  
    // Navigation arrows
    navigation: {
      nextEl: '.slider-button--next',
      prevEl: '.slider-button--prev',
    },
    
    // Enable keyboard navigation by Page Up and Page Down keys
    keyboard: {
      enabled: true,      
      pageUpDown: true,
    },
  });
  