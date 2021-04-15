  <footer>
      <div class="horizontal-wrap">
        <div class="footer-navigation">
          <h4>Navigation</h4>
          <div class="column">
            <a href="<?php echo URLROOT?>#about">About us</a>
            <a href="<?php echo URLROOT?>#team-members">Team members</a>
            <a href="<?php echo URLROOT?>#about">Courses</a>
            <a href="<?php echo URLROOT?>#about">Activities</a>
            <a href="<?php echo URLROOT?>#contact">Contact</a>
          </div>
        </div>
        <div class="footer-navigation">
          <h4>Activities</h4>
          <div class="column">
            <a href="#about">Activity 1</a>
            <a href="#team-members">Activity 2</a>
            <a href="#team-members">Activity 3</a>
            <a href="#team-members">Activity 4</a>
            <a href="#contact">Activity 5</a>
          </div>
        </div>
        <div class="footer-navigation">
          <h4>Courses</h4>
          <div class="column">
            <a href="#about">Course 1</a>
            <a href="#team-members">Course 2</a>
            <a href="#team-members">Course 3</a>
            <a href="#team-members">Course 4</a>
            <a href="#contact">Course 5</a>
          </div>
        </div>
        <div class="footer-social">
          <h4>Follow Us</h4>
          <div class="row">
            <a href="">
              <i class="fab fa-twitter-square"></i>
            </a>
            <a href="">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="">
              <i class="fab fa-linkedin"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="copyright center-align">
        <p class='copyright-text'>The landing page background <a href="http://www.freepik.com">by starline from freepik</a>. Copyright © 2021 CTCS.</p>
      </div>
    </footer>
    <script>
      const ROOT_URL = '<?php echo URLROOT?>'; 
    </script>
    <script src="<?php echo URLROOT; ?>/js/main.js"></script>
    <?php 
    if($localstyle === 'member.css'){
      echo '<script src="../js/member.js"></script>'; 
    }
    ?>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="<?php echo URLROOT;?>/js/rellax.min.js"></script>
    <script>
      AOS.init();
    </script>
    
  </body>
</html>