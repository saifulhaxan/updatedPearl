<footer>
   <div class="container-fluid px-md-5">
      <div class="row justify-content-between">
         <div class="col-md-12">
            <div class="footerTop">
               <div class="d-flex justify-content-between align-items-center">
                  <div class="logoBox">
                     <div class="footerLogo">
                        <a href="https://aibitbyte.com/pearlshire/"><img src="assets/images/logo.png"></a>
                     </div>
                  </div>
                  <div class="stayTone">
                     <div class="newsLetter">
                        <div class="labelBox">
                           <p class="mb-0">
                              STAYED UPDATED
                           </p>
                        </div>
                        <div class="labelDataBox">
                           <input type="email" name="email" placeholder="Please enter your email address">
                           <button type="button">Send</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-5 mb-4">
            <div class="firstColumn">
               <div class="contactInfo">
                  <h4>Office</h4>
                  <h2><a href="tel:+97148847774">+971 (4) 884 7744</a></h2>
               </div>
               <div class="addressBox">
                  <p>Suite 9, 3rd floor, Oasis Mall, Al Qouz I
                     <span>Sheikh Zayed Road, Dubai</span>
                  </p>
               </div>
               <div class="emailBox">
                  <a href="mailto:connect@pearlshire.com">connect@pearlshire.com</a>
               </div>
               <div class="SocialLinks contacts__item mb-md-5">
                  <div class="SocialLinks__link">
                     <div class="Icon Icon-facebook">
                        <i class="fa fa-facebook"></i>
                     </div>
                  </div>
                  <div class="SocialLinks__link">
                     <div class="Icon Icon-telegram">
                        <i class="fa fa-telegram"></i>
                     </div>
                  </div>
                  <div class="SocialLinks__link">
                     <div class="Icon Icon-instagram">
                        <i class="fa fa-instagram"></i>
                     </div>
                  </div>
                  <div class="SocialLinks__link">
                     <div class="Icon Icon-linkedin">
                        <i class="fa fa-linkedin"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-5 mb-4">
            <div class="basicInfo">
               <h2>Get in touch</h2>
               <p>Leave your details and we
                  <span>will call you back</span>
               </p>
            </div>
            <div class="formData">
               <form>
                  <div class="form-group">
                     <input type="text" class="form-control" placeholder="Phone">
                  </div>
                  <div class="form-group mb-md-5">
                     <input type="text" class="form-control" placeholder="Name">
                  </div>

                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                     <label class="form-check-label" for="inlineRadio1">I’d like to hear about news and offers</label>
                  </div>
                  <div class="form-check form-check-inline">
                     <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                     <label class="form-check-label" for="inlineRadio2">I’ve read and agree to the <a href="privacy-policy">Privacy Policy</a></label>
                  </div>
               </form>
            </div>
         </div>
         <div class="col-md-2 mb-4">
            <div class="SimpleMenu__main">
               <a href="about-us" class="SimpleMenu__link">About us</a>
               <a href="our-team" class="SimpleMenu__link">Our team</a>
               <a href="our-values" class="SimpleMenu__link">Our values</a>
               <a href="guiding-principles" class="SimpleMenu__link">Guiding Priciples</a>
               <a href="corporate-culture" class="SimpleMenu__link">Coporate Culture</a>
               <a href="#" class="SimpleMenu__link">Arjan</a>
               <a href="#" class="SimpleMenu__link openNav">Contacts</a>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 mb-4">
            <div class="bottomBar">
               <div class="singleBox">
                  <div class="footerLogo">
                     <a href="https://aibitbyte.com/pearlshire/"><img src="assets/images/logo.png"></a>
                  </div>
                  <div class="footerLink">
                     <div class="contacts__policy-links"><a href="privacy-policy" class="contacts__policy-links_item" target="_blank">Privacy Policy
                        </a> <a href="terms-and-conditions" class="contacts__policy-links_item" target="_blank">Terms and Conditions
                        </a> <span class="entity">PearlShire</span></div>
                  </div>
               </div>
               <div class="callButn">
                  <button class="borderTheme"><!----> <span class="btnText">Call me</span> <!----></button>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.19/fullpage.min.js"></script>

<script>
   if ($(window).width() > 1024) {
      new fullpage("#fullpage", {
         navigation: false,
         slidesNavigation: false,
         controlArrows: false, // Hides left/right navigation arrows for slides (if any)
         scrollBar: false, // Disables native scroll, ensuring fullpage.js controls the scroll
         autoScrolling: true, // Enables automatic scrolling between sections
         fitToSection: true, // Fits each section to the screen when scrolling
         fitToSectionDelay: 1000, // Time delay before fitting to the section
         //   licenseKey: "YOUR-LICENSE-KEY", // Replace with your fullpage.js license key

         onLeave: function(origin, destination, direction) {
            var bannerHeight = document.querySelector('.one').offsetHeight;
            var footerLogo = document.querySelector('.logoAreaBox');

            if (destination.index !== 0) {
               footerLogo.classList.remove('hiddenLogo');
               footerLogo.classList.add('visibleLogo');
            } else {
               // If we are going back to the first section, hide the logo
               footerLogo.classList.remove('visibleLogo');
               footerLogo.classList.add('hiddenLogo');
            }

            if (destination.index == 7) {
               jQuery('header').hide();
            } else {
               jQuery('header').show();
            }
         }
      });
   }


   // function hideHeader() {
   //    jQuery('header').hide();
   // }

   // function showHeader() {
   //    jQuery('header').show();
   // }
</script>

</html>