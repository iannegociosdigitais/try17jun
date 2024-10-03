<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>OverTV - Digital Signage</title>
  <link href="../assets/image/icon-logo1.png" rel="icon">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="../assets/css/channel.css" rel="stylesheet">
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="../assets/css/helpcenter.css" rel="stylesheet">
  <link href="../assets/css/animate.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="stylesheet" href="../assets/css/swipercss.min.css" />
</head>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>
<body>
  <!-- ======= Header ======= -->
  <?php
  include '../common/header.php';
  ?>
  <!-- End Header -->
  <div class="wrapper">
    <div class="hero-helpcenter">
        <div class="container">
            <div class="helpcenter-content wow fadeInUp" data-wow-delay="0.1s">
              <h2 data-i18n="help_center_title">How can we help?</h2>
              <form>
                <input type="text" name="search" placeholder="Pesquisa">
              </form>
            </div>
        </div>
    </div>
    <div class="breadcrump">
        <div class="container">
            <div class="breadcrump-content">
                <p><b data-i18n="home">Home</b> <span data-i18n="home_digital"> > Digital Signage</span></p>
                <form>
                    <input type="text" name="search" placeholder="Search the knowledge base...">
                </form>
            </div>
        </div>
    </div>
    <div class="container">
      <div class="general-section">
        <div class="general-question">
            <h2>
               <span><img src="../assets/svg/digital-signage.svg" alt=""></span> <span data-i18n="digital_signage_title">Digital Signage</span>
            </h2>
            <ul>
                <li>
                    <span data-i18n="how_digital_signage_works_question">How does digital signage work?</span> <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <span data-i18n="best_practices_digital_signage_question">What are the best practices for making this digital signage?</span> <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <span data-i18n="image_video_specifications_question">What are the image/video specifications for digital signage?</span> <i class="fa-solid fa-arrow-right"></i>
                </li>
                <li>
                    <span data-i18n="ads_not_loading_question">Why aren't my ads loading?</span> <i class="fa-solid fa-arrow-right"></i>
                </li>
            </ul>
        </div>
        <div class="need-support">
            <h3 class="support-text" data-i18n="need_support_title">Need Support?</h3>
            <ul>
                <li data-i18n="support_description">
                    Can't find the answer you're looking for? Don't worry we're here to help!
                </li>
            </ul>
            <button data-i18n="contact_support_button">Contact Support</button>
        </div>
      </div>
      <div id="footer-container"></div>
    </div>
</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../assets/js/script.js"></script>
  <script src="../assets/js/wow.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/swiper.min.js"></script>
  <script>
    fetch('../common/header.html')
    .then(response => response.text())
    .then(data => {
        document.getElementById('header-container').innerHTML = data;
    })
    .catch(error => console.error('Error loading header:', error));
    fetch('../common/footer.html')
        .then(response => response.text())
        .then(data => {
            document.getElementById('footer-container').innerHTML = data;
        })
        .catch(error => console.error('Error loading footer:', error));
  </script>
  <script>


    var swiper = new Swiper(".text-slider", {
      slidesPerView: 4,
      spaceBetween: 10,

      speed: 3000,
      autoplay: {
        delay: 0,
        // reverseDirection: true,
      },

      loop: true,
      equalHeight: true,


      allowTouchMove: false,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 4,
          spaceBetween: 40,
        },
        2000: {
          slidesPerView: 4,
          spaceBetween: 50,
        },
      },

    });


    var swiper = new Swiper(".text-slider2", {
      slidesPerView: 3,
      spaceBetween: 10,


      speed: 3000,
      autoplay: {
        delay: 0,
        reverseDirection: true,
      },

      loop: true,


      allowTouchMove: false,
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
        2000: {
          slidesPerView: 3,
          spaceBetween: 10,
        },
      },

    });








    const items = document.querySelectorAll('.accordion button');

    function toggleAccordion() {
      const itemToggle = this.getAttribute('aria-expanded');

      for (i = 0; i < items.length; i++) {
        items[i].setAttribute('aria-expanded', 'false');
      }

      if (itemToggle == 'false') {
        this.setAttribute('aria-expanded', 'true');
      }
    }

    items.forEach((item) => item.addEventListener('click', toggleAccordion));

  </script>
  <script>
    function scrollToTarget(targetId) {
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: 'smooth' });
      }
    }
  </script>
  <script>
    document.getElementById('contact-form').addEventListener('submit', function (event) {
      event.preventDefault();
      var captcha = document.getElementById('recaptcha');
      var response = grecaptcha.getResponse();

      if (response.length === 0) {
        var errorMsg = document.querySelector('.msg-error');
        if (errorMsg) {
          errorMsg.textContent = "reCAPTCHA is mandatory";
        }
        if (!captcha.classList.contains("error")) {
          captcha.classList.add("error");
        }
      } else {
        var errorMsg = document.querySelector('.msg-error');
        if (errorMsg) {
          errorMsg.textContent = '';
        }
        if (captcha.classList.contains("error")) {
          captcha.classList.remove("error");
        }
        alert('reCAPTCHA marked');
      }
    });
  </script>
  <!-- Start of overtv Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=76ef79a5-aae8-4af0-9ca1-a346285c8ceb"> </script>
<!-- End of overtv Zendesk Widget script -->
</body>

</html>
