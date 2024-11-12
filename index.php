<!DOCTYPE html>
<html>
<title> PearlShire </title>
<?php include 'headLinks.php' ?>

<body class="homePage">
   <style>
      .sectioon_two_para_1 {
         width: 310px;
         float: left;
         margin-right: 60px;
      }

      .section_two_partitions {
         width: 600px;
      }

      .CardsCard__description {
         /* width: 300px; */
         margin-top: -60px;
      }

      .CardsCard__title {
         font-family: 'Header font';
         margin-top: 70px;
      }

      .StandardButton {
         margin-top: -70px;
      }

      .CardsCard__description_projects {
         margin: 10px 0px;
      }

      .CardsNewsItem__title {
         font-family: 'Header font';
      }

      .flex-direction-row {
         flex-direction: row;
      }

      .flex-direction-row .fp-overflow {
         justify-content: flex-start;
         max-height: max-content;
      }

      .fp-table {
         display: block !important;
      }

      .projectSection {
         background-color: #1b2222;
         height: 100vh;
         padding-top: 2rem;
      }

      .footer_section {
         background-color: #0d1313;
      }

      .h-100vh {
         height: 100vh;
      }

      .CardsNewsItem {
         height: auto !important;
      }

      .slick-dots {
         display: none;
         background: #000;
      }


      @media(max-width: 1600px) {
         .CardsNewsItem__image {
            height: 415px;
         }

         .fp-overflow footer {
            padding: 0;
         }

         .CardsCard__description_projects {
            margin: 10px 0px 0px !important;
         }

         .projectSection .fp-overflow {
            overflow-y: hidden;
         }

         .SocialLinks {
            margin-top: 2.5rem;
            margin-bottom: 0px !important;
         }

         .addressBox {
            margin-bottom: 2rem;
         }

         footer {
            padding-top: 5.5rem;
         }

         /* .CardsNews__header {
            padding: 1rem 3.8rem 3rem;
         } */
      }

      /* #guiding .fp-overflow, #culture .fp-overflow {
         height: 100vh;
      } */


      .footer_section>div {
         display: flex;
         align-items: center;
      }

      footer {
         width: 100%;
      }

      /* Adjust layout for smaller screens */
      @media (max-width: 768px) {
         .slick-slider img {
            height: 100vh;
            /* Full height on mobile */
            object-fit: cover;
            /* Ensure images are responsive */
         }
      }
   </style>

   <?php include 'navigation.php'; ?>


   <div class="cards" id="fullpage">
      <section class="section flex-direction-row mainBanner">
         <section class="grid-container full one">
            <div class="fullSlides">
               <div class="Slider_container">
                  <div class="slider_banner">
                     <div><img src="assets/images/01.webp"></div>
                     <div><img src="assets/images/02.webp"></div>
                     <div><img src="assets/images/03.webp"></div>
                     <div><img src="assets/images/04.webp"></div>
                     <div><img src="assets/images/05.webp"></div>
                  </div>
                  <div class="banner_content">
                     <h1> For People </h1>
                     <h1> For Life </h1>
                  </div>
                  <div class="logo_banner_footer">
                     <img src="assets/images/logo.png">
                  </div>
               </div>
            </div>
         </section>
      </section>
      <section class="home_section_two section">
         <div class="sectioon_two_heading">
            <h2> <span> Building Sustainable Futures. </span> <br> Enriching Communities. </h2>
            <div class="section_two_partitions">
               <p class="sectioon_two_para_1">
                  Pearlshire embodies a dynamic and visionary brand personality, exuding confidence. Rooted
                  in triumph, innovation, and advancement, Pearlshire adeptly navigates complex landscapes.
               </p>
               <p class="sectioon_two_para_2">
                  With a global outlook and a commitment to excellence, Pearlshire demonstrates exceptional expertise, embracing calculated risks for promising opportunities.
               </p>
            </div>
         </div>
      </section>
      <section class="home_section_three section" id="about">
         <div class="CardsCard card_0" style="z-index: 5;">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="assets/images/card-1.webp" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">About us</h2>
                     <h3 class="CardsCard__title">Crafting real estate excellence</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="k4ed4">
                        <a href="about-us"><span class="StandardButton__text">Read More</span></a>

                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="home_section_four section" id="vision">
         <div class="CardsCard card_1" style="z-index: 4;">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="assets/images/card-2.webp" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Our Values</h2>
                     <h3 class="CardsCard__title">Time-Honoured Values</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="7sfztr">
                        <a href="our-values"><span class="StandardButton__text">Read More</span></a>

                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="CardsCard card_3 section" id="guiding">
         <div class="CardsCard card_1">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="assets/images/card-4.webp" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Guiding Principles</h2>
                     <h3 class="CardsCard__title">Upholding Success. Our<br> Core Principles.</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the Lorem Ipsum has been the </p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="9gtvok">
                        <a href="guiding-principles"><span class="StandardButton__text">Read More</span></a>

                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="CardsCard card_4 section" id="culture">
         <div class="CardsCard card_1">
            <div class="wrapper">
               <div class="CardsCard__container">
                  <img src="assets/images/card-5.webp" width="1920" class="CardsCard__image">
                  <div class="text-container">
                     <h2 class="CardsCard__name">Corporate Culture</h2>
                     <h3 class="CardsCard__title">A Culture of Excellence. <br>Our Work Environment.</h3>
                     <p class="CardsCard__description">is simply dummy text of the printing and typesetting industry. Lor</p>
                     <button class="StandardButton CardsCard__action-button hover border" fdprocessedid="49uuml">
                        <a href="corporate-culture"><span class="StandardButton__text">Read More</span></a>

                     </button>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section class="projectSection section">
         <div class="CardsNews">
            <div class="wrapper">
               <header class="CardsNews__header">
                  <a href="/news" class="" aria-label="Link to the news page">
                     <h3 class="CardsNews__title">Projects</h3>
                  </a>
                  <div class="controls">
                     <span class="controls__item prev">prev</span>
                     <span class="controls__separator"></span>
                     <span class="controls__item next">next</span>
                  </div>
                  <!-- <div class="scroll-container slider_news">
                 
               </div> -->

               </header>
               <div class="scroll-container">
                  <article class="CardsNewsItem">
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/68.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <div class="cardContent">
                        <div class="cardArea">
                           <h4 class="CardsNewsItem__title">
                              <p> Unveils New Headquarters in Dubai Internet City</p>
                           </h4>
                           <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                           <button class="StandardButton hover border" fdprocessedid="wfbpli">
                              <span class="StandardButton__text">read more</span>

                           </button>
                        </div>
                     </div>
                  </article>
                  <article class="CardsNewsItem">
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/67.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <div class="cardContent">
                        <div class="cardArea">
                           <h4 class="CardsNewsItem__title">
                              <p> Expands to Abu Dhabi with Prime Waterfront Property on Al Reem Island</p>
                           </h4>
                           <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                           <button class="StandardButton hover border" fdprocessedid="4spwao">
                              <span class="StandardButton__text">read more</span>

                           </button>
                        </div>
                     </div>
                  </article>
                  <article class="CardsNewsItem">
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/65.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <div class="cardContent">
                        <div class="cardArea">
                           <h4 class="CardsNewsItem__title">
                              <p>Six Elements That Attract European Buyers to UAE Luxury Real Estate</p>
                           </h4>
                           <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                           <button class="StandardButton hover border" fdprocessedid="8jiew4">
                              <span class="StandardButton__text">read more</span>

                           </button>
                        </div>
                     </div>
                  </article>
                  <article class="CardsNewsItem">
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/66.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <div class="cardContent">
                        <div class="cardArea">
                           <h4 class="CardsNewsItem__title">
                              <p> CEO Explores Branded Residences in Design Middle East Magazine</p>
                           </h4>
                           <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                           <button class="StandardButton hover border" fdprocessedid="j12qf">
                              <span class="StandardButton__text">read more</span>

                           </button>
                        </div>
                     </div>
                  </article>
                  <article class="CardsNewsItem">
                     <div class="CardsNewsItem__image">
                        <img src="https://mered.ae/_ipx/f_webp,q_85,s_800x800/assets/m/images/pages/news/52.jpg" width="800" height="800">
                        <div class="CardsNewsItem__gradient"></div>
                     </div>
                     <div class="cardContent">
                        <div class="cardArea">
                           <h4 class="CardsNewsItem__title">
                              <p>Diana Nilipovscaia Joins Exclusive Dubai Business Women Council (DBWC)</p>
                           </h4>
                           <p class="CardsCard__description CardsCard__description_projects">a asd asd asd asd asd as sadasd d a</p>
                           <button class="StandardButton hover border">
                              <span class="StandardButton__text">read more</span>

                           </button>
                        </div>
                     </div>
                  </article>
               </div>

            </div>
         </div>
      </section>
      <section class="section footer_section">
         <?php include 'footer.php' ?>
      </section>
   </div>