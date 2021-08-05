<?php 
  session_start();  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best Tour Plan - Hotel Booking</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Nunito:wght@400;600;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <header class="header header--mobile--fixed">
      <div class="container">
        <div class="header-top">
          <a href="index.html" class="logo">
            <img
              src="img/horizontai-logo.svg"
              alt="Logo: Best Tour Plan"
              class="logo__image"
            />
          </a>
          <!-- /.logo -->

          <form action="#" class="search header__search header__search--mobile--hidden">
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="Icon: search" />
            </button>
          </form>
          <!-- /.search -->

          <a href="#" class="user header__user header__user--mobile--hidden">
            <img
              src="img/user-avatar.jpg"
              alt="Avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- /.user -->
          <button class="menu-button header-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
          <!--/.menu-button header-top__menu-button-->
        </div>
        <!-- /.header-top -->
      </div>
      <!-- /.container -->
      <div class="navbar">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <a href="#" class="user header__user header__user--mobile--visible">
                <img
                  src="img/user-avatar.jpg"
                  alt="Avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name--light">Nathan</span>
              </a>
              <!-- /.user -->
            </li>
            <li class="navbar-menu__item navbar-menu__item--mobile--visible">
              <form action="#" class="search header__search header__search--mobile--visible">
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="Icon: search" />
                </button>
              </form>
              <!-- /.search -->
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
          <!-- /.navbar-menu -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.navbar -->
    </header>
    <!-- /.header -->
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
            <!-- /.bread-list__link -->
          </li>
          <!-- /.breadcrumb-list__item -->
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
            <!-- /.bread-list__link -->
          </li>
          <!-- /.breadcrumb-list__item -->
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
          <!-- /.breadcrumb-list__item -->
        </ul>
        <!-- /.breadcrumb-list -->
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->

    <div class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <h1 class="hotel-name hotel-info__name hotel-info__name--thankyou">
                Message sent
              </h1>
            </div>
            <p class="hotel-description hotel-info__descripnion hotel-info__descripnion--thankyou">
              <?=$_SESSION['text'] ; ?>
            </p>
            <a href="index.html" class="hotel-info__button">Return</a>
          </div>
          <!-- /.hotel-info__text -->
        </div>
        <!-- /.hotel-info -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.hotel -->

    <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <img src="img/vertical-logo.svg" alt="Logo: Best Tour Plan" class="logo footer__logo">
          <div class="footer__list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">All Deals</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Hotels</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Activities</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Spa Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Hotel Day Packages</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Restaurants</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Fitness</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Rodrigues</a></li>
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
              <li class="footer__item"><a href="#" class="footer__link">How does it work?</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Frequently Asked Questions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Deals.mu loyalty program</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Promote your Business on BTP</a></li>              
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__social-network">
            <h3 class="footer__title footer__title--inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="https://www.facebook.com" class="footer__link" target="_blank"><img src="img/facebook.svg" alt="Icon: facebook"></a>
              <a href="https://www.youtube.com" class="footer__link" target="_blank"><img src="img/youtube.svg" alt="Icon: youtube"></a>
              <a href="https://www.instagram.com/" class="footer__link" target="_blank"><img src="img/inst.svg" alt="Icon: instagram"></a>
            </div>
            <!-- /.footer_social-links -->
          </div>
          <!-- /.footer__social-network -->

          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item"><a href="#" class="footer__link">Terms & Conditions</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Disclaimer</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Cancellation policy</a></li>
              <li class="footer__item"><a href="#" class="footer__link">Privacy</a></li>              
            </ul>
          </div>
          <!-- /.footer__list -->

          <div class="footer__contact-details">
            <h3 class="footer__title footer__title--mb-3">Contact Details</h3>
            <p class="footer__text">Feel free to contact us by phone, email or by our contact form</p>
            <ul class="footer__ul">
              <li class="footer__item footer__item-wrapper">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/map-marker.svg" alt="Icon: map marker">
                </div>
                <p class="footer__item-text">
                  9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United States
                </p>                
              </li>
              <li class="footer__item footer__item-wrapper">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/phone-call.svg" alt="Icon: phone call">
                </div>
                <p class="footer__item-text">
                  Tel (business hours) : <a href="tel:269 1500" >269 1500</a><br>
                  Tel (hotline) Monday - Saturday: <a href="tel:52-56-61-38" >52-56-61-38</a> (08:00 am – 20:00 pm)<br>
                  Tel (hotline) Sunday: <a href="tel:52-56-61-38" >52-56-61-38</a> (08:00 am – 14:00 pm)
                </p>
              </li>
              <li class="footer__item footer__item-wrapper">
                <div class="footer__icon-wrapper">
                  <img class="footer__icon" src="img/email.svg" alt="Icon: email">
                </div>
                <p class="footer__item-text">
                  cherly.lawson@example.com
                </p>
              </li>
            </ul>
          </div>
          <!-- /.footer_contact-details -->

          <div class="footer__contact-form">
            <h3 class="footer__title footer__title--mb-3">Send us a message</h3>
            <form action="send.php" method="POST" class="footer__form">
              <input class="input footer__input" type="text" name="name" placeholder="Your Full Name*">
              <input class="input footer__input" type="text"  name="phone" placeholder="Phone Number*">
              <textarea class="footer__message" name="message" placeholder="Message"></textarea>
              <button class="button footer__button" type="submit">Send</button>
              <span class="footer__info">* Required Fields</span>
            </form>
            <!-- /.footer__form -->
          </div>
          <!-- /.footer__contact-form -->
        </div>        
        <!-- /.footer-wrapper -->

        <div class="footer__bottom">
          <div class="footer__bottom-links">
            <span class="footer__bottom-link">Disclaimer</span>
            <span class="footer__bottom-link">Conditions of use</span>
            <span class="footer__bottom-link">Cancellation policy</span>
          </div>
          <div class="footer__pay-icons">
            <img src="img/pay-icons.jpg" alt="Icon: pay icons">
          </div>
        </div>
        <!-- /.footer__bottom -->
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>  
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
