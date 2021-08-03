
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

  // Close modal
  var modalButton = document.querySelector("[data-toggle=modal]");
  var closeModalButton = document.querySelector("[data-toggle=close]");
console.log(closeModalButton);
  modalButton.addEventListener('click', openModal);
  closeModalButton.addEventListener('click', closeOpenModal);
    
    function openModal() {
      //console.log('sjjbvejbhjkb');
      var modalOverlay = document.querySelector('.modal__overlay');
      var modalDialog = document.querySelector('.modal__dialog');

      modalOverlay.classList.add('modal__overlay--visible'); 
      modalDialog.classList.add('modal__dialog--visible'); 
    };

    function closeOpenModal(event) {
      event.preventDefault();

      var modalOverlay = document.querySelector('.modal__overlay');
      var modalDialog = document.querySelector('.modal__dialog');

      modalOverlay.classList.remove('modal__overlay--visible'); 
      modalDialog.classList.remove('modal__dialog--visible'); 
    };  
 
