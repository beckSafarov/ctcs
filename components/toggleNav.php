<div class="toggle animate__animated animate__fadeIn">
   <i id="toggle-icon" class="fas fa-bars fa-3x"></i>
</div>

<div class="navigation">
   <ul class='toggleNavItems'>
      <li><a name="home" id='homeLink' onclick="closeToggleMenu()" href="<?php echo HOME_PATH;?>">Home</a></li>
      <li><a class="active-toggle-link" name="about" id='aboutUsLink' onclick="closeToggleMenu()"
            href="<?php echo ABOUT_PATH;?>">About</a></li>
      <li><a name="activities" id='activitiesLink' onclick="closeToggleMenu()"
            href="<?php echo ACTIVITIES_PATH;?>">Activities</a></li>
      <li><a name="contact" id='contactLink' onclick="closeToggleMenu()" href="<?php echo CONTACT_PATH;?>">Contact</a>
      </li>
   </ul>

   <div class="social-bar">
      <a href="www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a>
      <a href="www.twitter.com"><i class="fab fa-twitter-square fa-2x"></i></a>
      <a href="www.linkedin.com"><i class="fab fa-linkedin fa-2x"></i></a>
   </div>
</div>