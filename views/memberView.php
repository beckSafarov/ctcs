<?php require 'components/header.php'; ?>
<header>
   <?php require 'components/navbar.php'; ?>
   <?php require 'components/toggleNav.php'; ?>
</header>
<main>
   <section id="member">
      <!-- MEMBER CARD CONTAINING PHOTO -->
      <div class="member">
         <div class="member-photo  <?php echo $member['imgShortcut']; ?>"></div>
         <h3><?php echo $member['name'];?></h3>
      </div>

      <!-- tab menu -->
      <div class="tab">
         <div class="general-info-btn-div">
            <button id='infoBtn' class="tab-btn active">General Info</button>
         </div>
         <div class="contact-btn-div">
            <button id='contactBtn' class="tab-btn">Contact</button>
         </div>
      </div>

      <!-- flex container -->
      <div class="flex-container">
         <div class="info-section grid-container">
            <p class="label"><strong>Title</strong></p>
            <p class="description">Senior Lecturer</p>
            <p class="label"><strong>Qualifications</strong></p>
            <div class="description">
               <?php 
                  $infoTable = $qualifications;
                  require 'components/memberInfoList.php';
               ?>
            </div>
            <p class="label"><strong>Specializations</strong></p>
            <div class="description">
               <?php 
                  $infoTable = $specializations;
                  require 'components/memberInfoList.php';
               ?>
            </div>
            <?php 
               if($researchInterests){
                  $infoTable = $researchInterests;
                  echo "
                  <p class='label'><strong>Research Interests</strong></p>
                  <div class='description'>";
                  if(count($researchInterests) > 1){
                     require 'components/memberInfoList.php';
                  }else{
                     echo '<p>'.array_pop($researchInterests).'</p>';
                  }
                  echo '</div>';
               }
            ?>
         </div>

         <!-- CONTACT SECTION -->
         <div class="contact-section hidden">
            <div class="info-box">
               <i class="fas fa-map-marker-alt fa-2x"></i>
               <div class="details">
                  <h4>Address</h4>
                  <p><?php echo $member['address'];?></p>
               </div>
            </div>
            <div class="info-box">
               <i class="fas fa-envelope fa-2x"></i>
               <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:<?php echo $member['email'];?>"><?php echo $member['email'];?></a>
               </div>
            </div>
            <div class="info-box">
               <i class="fas fa-phone-alt fa-2x"></i>
               <div class="details">
                  <h4>Call</h4>
                  <p><?php echo $member['call'];?></p>
               </div>
            </div>
            <div class="info-box">
               <i class="fas fa-fax fa-2x"></i>
               <div class="details">
                  <h4>Fax</h4>
                  <p><?php echo $member['fax'];?></p>
               </div>
            </div>
         </div>
      </div>
      <!-- the end of the flex container -->
   </section>
</main>
<?php require 'components/footer.php'; ?>