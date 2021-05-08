<?php require 'components/header.php'; ?>
<!-- LANDING PAGE BACKGROUND IMAGE -->
<div class="background-img">

   <!-- NAVBAR OR TOGGLE NAVIGATION MENU -->
   <?php require 'components/navbar.php'; ?>
   <?php require 'components/toggleNav.php'; ?>


   <!-- LANDING PAGE CONTENT -->
   <div id="#landing-page" class="landing-page-title">
      <div class="center-align">
         <img class="mobile-logo" src="public/img/logo_simple.png" alt="" />
      </div>
      <h1 class="animate__animated animate__fadeInDown">
         Computational Thinking
      </h1>
      <p class="animate__animated animate__fadeInLeft">Research Team</p>
   </div>

   <div class="center-align">
      <div class="down-arrow">
         <a href="#about"><i class="fas fa-chevron-down fa-3x"></i></a>
      </div>
   </div>
</div>
<!-- the end of the background image -->

<main>
   <!-- ABOUT SECTION -->
   <section id="about">
      <h1 data-aos="fade-up" data-aos-duration="2000">About Us</h1>
      <div class="centered-column">
         <div data-aos="fade-up" data-aos-duration="2000" class="short-about-video">
            <iframe id="video" width="700" height="500" src="https://www.youtube.com/embed/klXzntaBZ3c">
            </iframe>
         </div>
         <div data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="500" data-aos-offset="0"
            class="text-center mt-30">
            <button id='aboutBtn' class='hvr-float-shadow'>Learn more</button>
         </div>
      </div>
   </section>

   <!-- TEAM MEMBERS SECTION -->
   <section id="team-members">
      <h1 data-aos="fade-in" data-aos-duration="2000">Team Members</h1>
      <div class="cards-container">
         <?php 
              for($i=0; $i<6; $i++){
                require 'components/memberCard.php'; 
              }
           ?>
      </div>
   </section>

   <!-- SERVICES SECTION -->
   <section id="services">
      <h1 data-aos="fade-in" data-aos-duration="2000">Our Services</h1>
      <div class="serviceCards">
         <?php 
                for($i=0; $i<6; $i++){
                  require 'components/serviceCard.php';
                }
              ?>
      </div>
   </section>
</main>
<?php require 'components/footer.php'; ?>