  <footer>
    <div class='footer_social'>
      <h2>Follow Us</h2>
      <div class='row'>
        <a href='www.twitter.com'>
          <i class='fab fa-twitter-square fa-2x'></i>
        </a>
        <a href='www.facebook.com'>
          <i class='fab fa-facebook-square fa-2x'></i>
        </a>
        <a href='www.linkedin.com'>
          <i class='fab fa-linkedin fa-2x'></i>
        </a>
      </div>
    </div>
    <div class='copyright center_align'>
      <p class='copyright_text'>
        Copyright © <?php echo date('Y') ?> CTCS.
      </p>
    </div>
  </footer>
  <script>
const ROOT_URL = '<?php echo URLROOT?>';
const ABOUT_PATH = '<?php echo ABOUT_PATH; ?>';
  </script>
  <script src="<?php echo URLROOT; ?>/public/js/globals.js"></script>
  <?php 
    if($localscript){
        $root = URLROOT; 
        echo "<script src='$root/public/js/$localscript'></script>"; 
    }
    ?>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="<?php echo URLROOT;?>/public/js/rellax.min.js"></script>
  <script>
AOS.init();
  </script>

  </body>

  </html>