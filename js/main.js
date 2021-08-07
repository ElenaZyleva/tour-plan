$(document).ready( function(){
  // вызов нужных функций скрипта

  /*добавляем маску к input с id = phone*/
  $(".phone").mask("+7 (999) 999-99-99");
  
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
  var overlay = document.querySelector(".modal__overlay");

  modalButton.addEventListener('click', openModal);
  closeModalButton.addEventListener('click', closeOpenModal);
  overlay.addEventListener('click', closeOpenModal);
    
  function openModal() {
      
    var modalOverlay = document.querySelector('.modal__overlay');
    var modalDialog = document.querySelector('.modal__dialog');

    modalOverlay.classList.add('modal__overlay--visible'); 
    modalDialog.classList.add('modal__dialog--visible'); 
  };  

  document.addEventListener('keydown', function (e) {
      
    if(e.key == 'Escape') {
      var modalOverlay = document.querySelector('.modal__overlay');
      var modalDialog = document.querySelector('.modal__dialog');

      modalOverlay.classList.remove('modal__overlay--visible'); 
      modalDialog.classList.remove('modal__dialog--visible');
    };
  });

    function closeOpenModal(event) {
      event.preventDefault();

      var modalOverlay = document.querySelector('.modal__overlay');
      var modalDialog = document.querySelector('.modal__dialog');

      modalOverlay.classList.remove('modal__overlay--visible'); 
      modalDialog.classList.remove('modal__dialog--visible'); 
      
      // document.querySelector('#name-modal').value = "";
      // document.querySelector('#phone-modal').value = "";
      // document.querySelector('#email-modal').value = "";
      // document.querySelector('.modal__message').value = "";      
    }; 

  
    // Валидация форм
  $('.form').each(function() {
    $(this).validate({
      errorClass: "error",
      messages: {
        name: {
          required: "Please specify your name",
          minlength: "Name must be at least 2 charactersв",
        },
        newsletterEmail: {
          required: "We need your email address to contact you",
          email: "Your email must be in the format of name@domain.com",
        },       
        email: {
          required: "We need your email address to contact you",
          email: "Your email must be in the format of name@domain.com"
        },
        phone: {
          required: "We need your phone number to contact you",
          minlength: "Your phone must be in the format of +7(999)999-99-99",                   
        },
      }
    }); 
       
    // Валидация формы subscribe
    $(".subscribe").validate({
      errorClass: "error",
      // validClass: "success",      
      
      // errorPlacement: function(error, element) {        
      //   $("#newsletterEmail-error").remove();
      //   error.appendTo("#newsletter__wrap");        
      // },
      messages: {        
        newsletterEmail: {
          required: "We need your email address to contact you",
          email: "Your email must be in the format of name@domain.com"
        },
      },      
    });   
  });
});

AOS.init();
   
  
 
