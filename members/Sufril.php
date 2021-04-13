<?php 
$localstyle='member.css';
$title = 'Ahmad Sufril | CTCS';
require '../config.php'; 
require '../inc/header.php'; 
$data['img'] = 'sufril';
?>
<header>
   <?php require '../inc/toggleNav.php'; ?>
</header>
<main>
      <section id="member">
        <!-- MEMBER CARD CONTAINING PHOTO -->
        <div class="grid-container gap-50">
          <div class="member text-center">
            <div class="member-photo  <?php echo $data['img'] ?>"></div>
            <p class="member-name"><strong>Ahmad Sufril Azlan Mohamed, Dr. </strong></p>
          </div>
          <!-- GENERAL INFO COLUMN -->
          <div class="general-info">
            <h2 class="text-center">General Info</h2>
            <table>
              <tr>
                <td><strong>Title</strong></td>
                <td class="pl-25">Senior Lectuer</td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Qualifications</strong></td>
                <td>
                  <ul>
                    <li>BIT (Hons), Multimedia University, Malaysia, 2003</li>
                    <li>
                      MSc., University of Manchester, United Kingdom, 2005
                    </li>
                    <li>PhD., University of Salford, United Kingdom, 2015.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Specialization</strong></td>
                <td>
                  <ul>
                    <li>Image Processing</li>
                    <li>Video Tracking</li>
                    <li>Facial Recognition</li>
                    <li>Medical Imaging</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Research Interests</strong></td>
                <td>
                  <ul>
                    <li>Industrial Design</li>
                    <li>Bioresource</li>
                    <li>Paper and Coatings Technology,</li>
                    <li>Laser</li>
                  </ul>
                </td>
              </tr>
            </table>
          </div>
          <!-- end of the general info -->

          <!-- CONTACTS COLUMN -->
          <div id="contacts">
            <div class="wrap-contacts">
              <h2 class="text-center">Contacts</h2>
              <div class="info-box">
                <i class="fas fa-map-marker-alt fa-2x"></i>
                <div class="details">
                  <h4>Address</h4>
                  <p>
                    Room 520, School of Computer Sciences, Universiti Sains Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:sufril@usm.my">sufril@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 6351</p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-fax fa-2x"></i>
                <div class="details">
                  <h4>Fax</h4>
                  <p>+604 653 3335</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end of the contacts column -->

          <!-- PUBLICATIONS COLUMN -->
          <div id="publications">
            <h2 class="text-center">Publications</h2>
            <div class="info-box">
              <h4>2019</h4>
              <p class="details">
                Shanmugasundaram, K., Mohmed, A.S.A., Ruhaiyem, N.I.R. Hybrid improved bacterial swarm optimization algorithm in hand-based multimodal biometric authentication system
  (2019) Journal of Information and Communication Technology, 18 (2), pp. 123-141. 
                <span class="nextline">
                  Ibrahim, N., Hassan, F.H., Azlan Mohamed, A.S., Khader, A.T. The Impact of Spatial Layout Design on the Pedestrian Movement during Panic Situation: Pedestrian Survival Prediction
(2019) Journal of Physics: Conference Series, 1201 (1), art. no. 012066, . DOI: 10.1088/1742-6596/1201/1/012066
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2018</h4>
              <p class="details">
                Mohamed, A.S.A., Ab Wahab, M.N., Suhaily, S.S., Arasu, D.B.L. Smart mirror design powered by raspberry Pi (2018) ACM International Conference Proceeding Series, pp. 166-173. DOI: 10.1145/3299819.3299840
                <span class="nextline"
                  >Shanmugasundaram, K., Mohamed, A.S.A., Ruhaiyem, N.I.R. An overview of hand-based multimodal biometrie system using multi-classifier score fusion with score normalization (2018) Proceedings of IEEE International Conference on Signal Processing and Communication, ICSPC 2017, 2018-January, pp. 53-57. DOI: 10.1109/CSPC.2017.8305806</span
                >
              </p>
            </div>
            <div class="info-box">
              <h4>2017</h4>
              <p class="details">
                Azlan Mohamed, A.S., Soter, E.B., Singh, A., Raihana Ruhaiyem, N.I. Gesture based help identification for hospital& elderlycare using dynamic time warping: A systematic study (2017) ACM International Conference Proceeding Series, pp. 94-98. DOI: 10.1145/3177404.3177426
                <span class="nextline">
                  Pearson, S.J., Mohammed, A.S.A., Hussain, S.R. Patellar tendon in vivo regional strain with varying knee angle (2017) Journal of Biomechanics, 61, pp. 45-50. DOI: 10.1016/j.jbiomech.2017.06.038
                </span>
                <span class="nextline">
                  Sukri, S.S., Ruhaiyem, N.I.R., Mohamed, A.S.A. Face recognition with real time eye lid movement detection (2017) Lecture Notes in Computer Science (including subseries Lecture Notes in Artificial Intelligence and Lecture Notes in Bioinformatics), 10645 LNCS, pp. 352-363. DOI: 10.1007/978-3-319-70010-6_33
                </span>
                <span class="nextline">
                  Shanmugasundaram, K., Mohamed, A.S.A., Ruhaiyem, N.I.R. Hybrid improved bacterial swarm (HIBS) optimization algorithm (2017) Lecture Notes in Computer Science (including subseries Lecture Notes in Artificial Intelligence and Lecture Notes in Bioinformatics), 10645 LNCS, pp. 71-78. DOI: 10.1007/978-3-319-70010-6_7
                </span>
                <span class="nextline">
                  Mohamed, A.S.A., Chingeng, P.S., Mat Isa, N.A., Surip, S.S. Body matching algorithm using normalize dynamic time warping (NDTW) skeleton tracking for traditional dance movement (2017) Lecture Notes in Computer Science (including subseries Lecture Notes in Artificial Intelligence and Lecture Notes in Bioinformatics), 10645 LNCS, pp. 669-680. DOI: 10.1007/978-3-319-70010-6_62
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2016</h4>
              <p class="details">
                Ruhaiyem, N.I.R., Mohamed, A.S.A., Belaton, B. Optimized Segmentation of Cellular Tomography through Organelles' Morphology and Image Features (2016) Journal of Telecommunication, Electronic and Computer Engineering, 8 (3), pp. 79-83. 
                <span class="nextline">
                  Halim, M.A.A., Ruhaiyem, N.I.R., Fauzi, E.R.I., Jamil, M.S.C., Mohamed, A.S.A. Automatic laser welding defect detection and classification using sobel-contour shape detection
(2016) Journal of Telecommunication, Electronic and Computer Engineering, 8 (6), pp. 157-160. 
                </span>
                <span class="nextline">
                    Muhammad, A., Addenan, M.F., Latiff, M.M., Haris, B., Surip, S.S., Mohamed, A.S.A. Interactive sign language interpreter using skeleton tracking (2016) Journal of Telecommunication, Electronic and Computer Engineering, 8 (6), pp. 137-140. 
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2014</h4>
              <p class="details">
                Pearson, S.J., Ritchings, T., Mohamed, A.S.A. Regional strain variations in the human patellar tendon (2014) Medicine and Science in Sports and Exercise(2014) Medicine and Science in Sports and Exercise, 46 (7), pp. 1343-1351. DOI: 10.1249/MSS.0000000000000247 
              </p>
            </div>
            <div class="info-box">
              <h4>2013</h4>
              <p class="details">
                Pearson, S.J., Ritchings, T., Mohamed, A.S.A. The use of normalized cross-correlation analysis for automatic tendon excursion measurement in dynamic ultrasound imaging (2013) Journal of Applied Biomechanics, 29 (2), pp. 165-173. DOI: 10.1123/jab.29.2.165 
              </p>
            </div>
            <div id="expandDiv">
              <i id="expand" class="fas fa-chevron-down"></i>
            </div>
          </div>
        </div>
        <!-- the end of the grid container -->
      </section>
    </main>
<?php require '../inc/footer.php'; ?>