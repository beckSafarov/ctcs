<?php require 'components/header.php'; ?>
<!-- LANDING PAGE BACKGROUND IMAGE -->
<div class="background-img">

  <!-- NAVBAR OR TOGGLE NAVIGATION MENU -->
  <?php require 'components/navbar.php'; ?>
  <?php require 'components/toggleNav.php'; ?>


  <!-- LANDING PAGE CONTENT -->
  <div class="mobile-logo">
    <img src="<?php echo URLROOT;?>/public/img/logo_main.png" alt="CT USM">
  </div>
  <div id="landing-page" class="landing-page">
    <div class="body">
      <div class="text">
        <h1 class="animate__animated animate__fadeInDown">Computational Thinking</h1>
        <p class="animate__animated animate__fadeInLeft">Lorem ipsum dolor sit amet consectetur adipisicing</p>
      </div>
      <div class='btn-div animate__animated animate__fadeInUp'>
        <button id='aboutBtn' class='hvr-glow'>Learn More</button>
      </div>
    </div>
    <div class="video animate__animated animate__zoomIn">
      <iframe id="video" src="https://www.youtube.com/embed/klXzntaBZ3c">
      </iframe>
    </div>
  </div>

  <main>
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