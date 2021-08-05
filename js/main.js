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

    //Close on Esc
  //   document.addEventListener('keydown', function(event){
  //     console.log('Строковый код: ', event.code);
  //     console.log('ASCII код: ', event.charCode);
  // });


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
    }; 

  
    // Валидация форм
  $('.form').each(function() {
    $(this).validate({
      errorClass: "invalid",
      
      messages: {
        name: {
          required: "Укажите имя",
          minlength: "Имя должно быть не короче 2 символов",
        },       
        email: {
          required: "Укажите адрес электронной почты",
          email: "Ваш email адрес должен быть в формате name@domain.com"
        },
        phone: {
          required: "Укажите телефон",
        },
      }
    }); 
       
    // Валидация форм
    $(".subscribe").validate({
      errorClass: "error",
      validClass: "success",      
      
      errorPlacement: function(error, element) {        
        $("#newsletterEmail-error").remove();
        error.appendTo("#newsletter__wrap");        
      },
      messages: {        
        newsletterEmail: {
          required: "Укажите email",
          email: "Ваш email адрес должен быть в формате name@domain.com"
        },
      },      
    });   
  });
});

AOS.init();
   
  
 
