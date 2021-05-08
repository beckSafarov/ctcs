<?php require 'components/header.php'; ?>
<header>
   <!-- navbar or toggle nav -->
   <?php require 'components/navbar.php'; ?>
   <?php require 'components/toggleNav.php'; ?>
</header>
<?php require 'components/header.php'; ?>
<main>
   <section>
      <div class="about">
         <h1 class="about-title">Computational Thinking And Computer Science Teaching Certificate Programme </h1>
         <p><?php echo $dummyText?></p>
         <div class="centered-column">
            <a href="public/img/ct.png" target='_blank'><img class='about-photo' src="public/img/ct.png"
                  alt="Computational Thinking Program Aspects"></a>
            <p>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a
                  href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></p>
         </div>
         <p><?php echo $dummyText?></p>
      </div>
      <div class="projects">
         <h1>Our Projects</h1>
         <?php 
            for($i=0; $i<3; $i++){
              require 'components/projectInfo.php';
            }
          ?>
      </div>
   </section>
</main>
<?php require 'components/footer.php'; ?>