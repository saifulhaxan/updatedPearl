/**
    * @description      : 
    * @author           : Saif
    * @group            : 
    * @created          : 10/10/2024 - 15:50:20
    * 
    * MODIFICATION LOG
    * - Version         : 1.0.0
    * - Date            : 10/10/2024
    * - Author          : Saif
    * - Modification    : 
**/

$(document).ready(function () {

  jQuery('.Header__button_callback, .openNav').click(function(){
    jQuery('.sideBar').addClass('activeBar')
})

jQuery('.sideBar .backBtn').click(function(){
    jQuery('.sideBar').removeClass('activeBar')
})

  if ($(window).width() <= 1600) {
    setInterval(function () {
      jQuery('.projectSection').find('div').removeClass('fp-overflow');
    }, 500)
  }


  $('.slider_banner').slick({
    dots: true,               // Show navigation dots
    infinite: true,           // Infinite scrolling
    speed: 500,               // Transition speed
    fade: true,               // Enable fade effect
    cssEase: 'linear',        // CSS easing for fade effect
    autoplay: true,           // Enable autoplay
    autoplaySpeed: 2000       // Autoplay speed in milliseconds
  });



  $(".HeaderActionButtonDesktop").click(function () {

    $(".HeaderActionButtonDesktop__title").toggleClass("active");
    $(".dots").toggleClass("active");
    $(".MenuDesktop").toggleClass("opened");

  });


});






gsap.registerPlugin(ScrollTrigger);

gsap.to(".footer_id", {
  scrollTrigger: {
    trigger: ".footer_id", // The element that triggers the animation
    start: "top center", // When the top of the element reaches the center of the viewport
    onEnter: function () {
      document.querySelector(".contacts").classList.add("active");
      document.querySelector(".Footer").classList.add("active");
      document.querySelector(".forms_active").classList.add("active");
      document.querySelector(".Form_screen-inputs").classList.add("Form_screen-active");
    }
  }
});








// 
gsap.registerPlugin(ScrollTrigger);

(function ($) {
  $(document).ready(function () {
    initialiseApp();

    function initialiseApp() {
      initialiseLenisScroll();
    }


    function initialiseLenisScroll() {
      const lenis = new Lenis({
        smoothWheel: true,
        duration: 1.2
      });

      lenis.on('scroll', ScrollTrigger.update);

      gsap.ticker.add((time) => {
        lenis.raf(time * 1000);
      });

      gsap.ticker.lagSmoothing(0);
    }
  });
})(jQuery);



$(document).ready(function () {

  // Loop through each CardsNews section
  document.querySelectorAll('.CardsNews').forEach((sliderContainer) => {
    const scrollContainer = sliderContainer.querySelector('.scroll-container');
    const prevButton = sliderContainer.querySelector('.prev');
    const nextButton = sliderContainer.querySelector('.next');
    const scrollAmount = 550; // Adjust this value for how much to scroll on each click

    // Scroll to the left when the "prev" button is clicked
    prevButton.addEventListener('click', function () {
      scrollContainer.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth' // Smooth scroll effect
      });
    });

    // Scroll to the right when the "next" button is clicked
    nextButton.addEventListener('click', function () {
      scrollContainer.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
      });
    });

    // Function to toggle button states (disable if at the end)
    function checkScroll() {
      const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
      prevButton.classList.toggle('active', scrollContainer.scrollLeft > 0);
      nextButton.classList.toggle('active', scrollContainer.scrollLeft < maxScrollLeft);
    }

    // Check scroll position on load and when scrolling
    scrollContainer.addEventListener('scroll', checkScroll);
    checkScroll(); // Initial check on page load
  });
});






