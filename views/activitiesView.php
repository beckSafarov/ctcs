<?php require 'components/header.php'; ?>
<header>
   <!-- navbar or toggle nav -->
   <?php require 'components/navbar.php'; ?>
   <?php require 'components/toggleNav.php'; ?>
</header>
<main>
   <section id="activities">
      <h1 data-aos="fade-in" data-aos-duration="2000">Activities</h1>
      <div class="activity-infoboxes">
         <?php 
         for($i=0; $i<3; $i++){
            require 'components/activityRow.php'; 
         }
       ?>
      </div>
   </section>

   <!-- The Modal -->
   <div id="modal" class="modal">
      <img class="modal-content" id="modalImage">
      <div id="caption"></div>
   </div>

</main>
<?php require 'components/footer.php';?>