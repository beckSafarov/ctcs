<?php require 'components/header.php'; ?>
<header>
   <?php require 'components/navbar.php'; ?>
   <?php require 'components/toggleNav.php'; ?>
</header>
<main>
   <!-- CONTACT SECTION -->
   <section id="contact">
      <div class="text-center">
         <h1>Contact</h1>
      </div>
      <div class="contact">
         <div class="contact-form">
            <form>
               <div class="row">
                  <div class="input50">
                     <input type="text" name="firstName" id="firstName" placeholder="First Name" />
                  </div>
                  <div class="input50">
                     <input type="text" name="lastName" id="lastName" placeholder="Last Name" />
                  </div>
               </div>

               <div class="row">
                  <div class="input50">
                     <input type="email" name="email" id="email" placeholder="Email" />
                  </div>
                  <div class="input50">
                     <input type="text" name="subject" id="subject" placeholder="Subject" />
                  </div>
               </div>
               <div class="row">
                  <div class="input100">
                     <textarea placeholder="Message" name="message" id="message"></textarea>
                  </div>
               </div>
               <div class="row">
                  <div class="input100">
                     <input type="submit" value="Send" />
                  </div>
               </div>
            </form>
         </div>
         <!-- End of contact-form div -->
         <div class="contact-info">
            <div class="info-box">
               <i class="fas fa-map-marker-alt"></i>
               <div class="details">
                  <h4>Address</h4>
                  <p class="unspaced">School of Computer Sciences, Universiti Sains Malaysia, 11800, Pulau Pinang,
                     Malaysia</p>
               </div>
            </div>
            <div class="info-box">
               <i class="fas fa-envelope"></i>
               <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:usm-ct-trainers@staffusm.onmicrosoft.com">usm-ct-trainers@staffusm.onmicrosoft.com</a>
               </div>
            </div>
            <div class="info-box">
               <i class="fas fa-phone-alt"></i>
               <div class="details">
                  <h4>Phone</h4>
                  <p>+604-653 3647/3610</p>
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php require 'components/footer.php'; ?>