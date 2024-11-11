<!DOCTYPE html>
<html>
<title>Coporate Culture - PearlShire </title>
<?php include 'headLinks.php' ?>

<body>
  <?php include 'navigation.php'; ?>
  <section class="about_section">
    <div class="DefaultPageHeaderDesktop mounted">

      <div class="DefaultPageHeaderDesktop__image">
        <img src="https://mered.ae/_ipx/f_webp,q_85,w_1920/assets/images/pages/about/background.jpg" width="1920">
        <div class="Gradient bottom"></div>
        <h1 class="DefaultPageHeaderDesktop__title">Coporate Culture</h1>
        <div class="container">
          <button class="StandardButton DefaultPageHeaderDesktop__back-button borderss" fdprocessedid="bllobn">
            <div class="Icon StandardButton__icon Icon-arrow-back" style="width: 1.1rem; height: 1.1rem;">
              <svg class="Icon_inner">
                <use xlink:href="#arrow-back"></use>
              </svg>
            </div>
            <span class="StandardButton__text">back</span>
            <!---->
          </button>
          <h2 class="DefaultPageHeaderDesktop__sub-title">A Culture of Excellence<br>Our Work Environment.</h2>
        </div>
        <p class="text__description scrollStarted">At the heart of our mission,
our guiding principles embody visionary empowerment, forward-thinking leadership, and a commitment to community enrichment. These core values steer our every action, propelling us toward a future of purposeful progress and societal betterment.</p>
        <div class="text__container scrollStarted">
          <p class="text__sub-description">Our mission is to build a portfolio of enduring real estate investment vehicles, using meticulous due diligence to identify growth- oriented investments.</p> <!---->
        </div>
      </div>
    </div>
  </section>
  <section class="about_section_two" id="about_section_two">

    <div class="DefaultPageSliderDesktop">
      <div class="slide active">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/about/00.jpg" height="1080"></div>
        <div class="slide__container">
          <h3 class="slide__title">1. EMPOWER<br>Visionary<br>Empowerment</h3>
          <p class="slide__sub-title"></p>
          <p class="slide__description">Through insightful business strategies, we navigate future opportunities and drive progress. We aim to improve businesses and enhance residents' lives beyond today's capabilities, reshaping paradigms and forging new pathways through insightful collaboration and taking educated risks.</p>
        </div>
      </div>
      <div class="slide">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/about/01.jpg" height="1080"></div>
        <div class="slide__container">
          <h3 class="slide__title">2. LEAD<br>Forward-Thinking<br>Leadership</h3>
          <p class="slide__sub-title"></p>
          <p class="slide__description">We confidently steer our business in the right direction by demonstrating exceptional foresight and visionary thinking.We aim to foster a purposeful vision that positions us as the most trustworthy partner in our endeavors.</p>
        </div>
      </div>
      <div class="slide">
        <div class="slide__image"><img src="https://mered.ae/_ipx/f_webp,q_85,h_1080/assets/images/pages/about/02.jpg" height="1080"></div>
        <div class="slide__container">
          <h3 class="slide__title">3. CREATE<br>Community<br>Enrichment</h3>
          <p class="slide__sub-title"></p>
          <p class="slide__description">As we advance, our foremost commitment is to enhance the communities we engage with, contributing significantly to societal betterment. Guided by a human-centric, wellness-oriented philosophy, we craft thriving living spaces through customer-focused design and strong community engagement.</p>
        </div>
      </div>
      <div class="SlideBar">
        <span class="SlideBar__prev">01</span>
        <div class="container">
          <div class="buttons">
            <span class="buttons__prev">prev</span>
            <span class="buttons__separator"></span>
            <span class="buttons__next">next</span>
          </div>
        </div>
        <span class="SlideBar__next">02</span>
      </div>
    </div>
  </section>
  <?php include 'footer.php' ?>
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
<script src="assets/js/custom.js"></script> -->

<!-- <script type="text/javascript">
  $(document).ready(function() {
    var currentSlide = 0;
    var totalSlides = $('.slide').length;
    var isAnimating = false;

    function updateSlides() {
      // Remove all classes before reassigning
      $('.slide').removeClass('active ahead next behind');
      // Add 'behind' class to all previous slides
      $('.slide').slice(0, currentSlide).addClass('behind');
      // Add 'active' class to the current slide
      $('.slide').eq(currentSlide).addClass('active');
      // Add 'next' class to the next slide
      if (currentSlide + 1 < totalSlides) {
        $('.slide').eq(currentSlide + 1).addClass('next').addClass('ahead');
      }
      // Add 'ahead' class to slides after the next one
      $('.slide').slice(currentSlide + 2).addClass('ahead');
      // Update the SlideBar text
      $('.SlideBar__prev').text('0' + (currentSlide + 1));
      $('.SlideBar__next').text('0' + (currentSlide + 2));
    }

    function animateSlide(direction) {
      if (isAnimating) return; // Prevent multiple animations at the same time
      if (direction === 'next' && currentSlide < totalSlides - 1) {
        currentSlide++;
      } else if (direction === 'prev' && currentSlide > 0) {
        currentSlide--;
      }
      isAnimating = true;
      updateSlides();
      gsap.fromTo('.slide.active .slide__container', {
        opacity: 0
      }, {
        opacity: 1,
        duration: 1
      });
      gsap.fromTo('.slide.active .slide__image img', {
        scale: 1.1
      }, {
        scale: 1,
        duration: 1,
        onComplete: function() {
          isAnimating = false; // Allow new animations after the current one completes
        }
      });
    }
    $('.buttons__next').click(function() {
      animateSlide('next');
    });
    $('.buttons__prev').click(function() {
      animateSlide('prev');
    });
    // GSAP ScrollTrigger to pin the about section and start animations when fully in view
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.create({
      trigger: "#about_section_two",
      start: "top top", // Start when the top of #about_section_two hits the top of the viewport
      end: "+=1000", // Extend the pin duration by 1000px
      pin: true, // Pin the section
      onEnter: () => {
        // Re-attach the wheel event listener when the section is fully in view
        $(window).on('wheel', function(event) {
          if (event.originalEvent.deltaY > 1.5) {
            animateSlide('next'); // Scroll down to go to the next slide
          } else {
            animateSlide('prev'); // Scroll up to go to the previous slide
          }
        });
      },
      onLeaveBack: () => {
        // Optionally detach the event listener when the section leaves the viewport
        $(window).off('wheel');
      }
    });
    updateSlides(); // Initialize the first slide
  });
</script> -->

<script type="text/javascript">
  $(document).ready(function() {
   if($(window).width() > 1024) {
    var currentSlide = 0;
    var totalSlides = $('.slide').length;
    var isAnimating = false;

    function updateSlides() {
      // Remove all classes before reassigning
      $('.slide').removeClass('active ahead next behind');
      // Add 'behind' class to all previous slides
      $('.slide').slice(0, currentSlide).addClass('behind');
      // Add 'active' class to the current slide
      $('.slide').eq(currentSlide).addClass('active');
      // Add 'next' class to the next slide
      if (currentSlide + 1 < totalSlides) {
        $('.slide').eq(currentSlide + 1).addClass('next').addClass('ahead');
      }
      // Add 'ahead' class to slides after the next one
      $('.slide').slice(currentSlide + 2).addClass('ahead');
      // Update the SlideBar text
      $('.SlideBar__prev').text('0' + (currentSlide + 1));
      $('.SlideBar__next').text('0' + (currentSlide + 2));
    }

    function animateSlide(direction) {
      if (isAnimating) return; // Prevent multiple animations at the same time
      if (direction === 'next' && currentSlide < totalSlides - 1) {
        currentSlide++;
      } else if (direction === 'prev' && currentSlide > 0) {
        currentSlide--;
      }
      isAnimating = true;
      updateSlides();
      gsap.fromTo('.slide.active .slide__container', {
        opacity: 0
      }, {
        opacity: 1,
        duration: 1
      });
      gsap.fromTo('.slide.active .slide__image img', {
        scale: 1.1
      }, {
        scale: 1,
        duration: 1,
        onComplete: function() {
          isAnimating = false; // Allow new animations after the current one completes
        }
      });
    }
    $('.buttons__next').click(function() {
      animateSlide('next');
    });
    $('.buttons__prev').click(function() {
      animateSlide('prev');
    });
    // GSAP ScrollTrigger to pin the about section and start animations when fully in view
    gsap.registerPlugin(ScrollTrigger);
    ScrollTrigger.create({
      trigger: "#about_section_two",
      start: "top top", // Start when the top of #about_section_two hits the top of the viewport
      end: "+=1000", // Extend the pin duration by 1000px
      pin: true, // Pin the section
      onEnter: () => {
        // Re-attach the wheel event listener when the section is fully in view
        $(window).on('wheel', function(event) {
          if (event.originalEvent.deltaY > 1.5) {
            animateSlide('next'); // Scroll down to go to the next slide
          } else {
            animateSlide('prev'); // Scroll up to go to the previous slide
          }
        });
      },
      onLeaveBack: () => {
        // Optionally detach the event listener when the section leaves the viewport
        $(window).off('wheel');
      }
    });
    updateSlides(); // Initialize the first slide
   }
  });
</script>

</html>