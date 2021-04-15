<?php 
$localstyle='member.css';
$title = 'Azlan Osman | CTCS';
require '../config/config.php'; 
require '../inc/header.php'; 
$data['img'] = 'azlan';
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
            <p class="member-name"><strong>Azlan Osman, Mr. </strong></p>
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
                <td class='pl-25 pt-15'>-</td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Specialization</strong></td>
                <td class='pl-25 pt-15'>-</td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Research Interests</strong></td>
                <td class="pt-15 pl-25">Service Computing</td>
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
                    Room 714, School of Computer Sciences, Universiti Sains Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:azlanosman@usm.my">azlanosman@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 2062</p>
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
                Praptodiyono, S., Sofhan, R., Pramudyo, A.S., Firmansyah, T., Osman, A. Performance comparison of transmitting jumbo frame on Windows and Linux system (2019) Telkomnika (Telecommunication Computing Electronics and Control), 17 (1), pp. 68-75. DOI: 10.12928/TELKOMNIKA.v17i1.11627
              </p>
            </div>
            <div class="info-box">
              <h4>2018</h4>
              <p class="details">
                Praptodiyono, S., Firmansyah, T., Hasbullah, I.H., Murugesan, R.K., Osman, A., Wey, C.Y. Implementation of trust neighbor discovery on securing IPv6 link local communication (2018) Journal of Engineering Science and Technology, 13 (9), pp. 2898-2915. 
              </p>
            </div>
            <div class="info-box">
              <h4>2017</h4>
              <p class="details">
                Supriyanto, Sofhan, R., Fahrizal, R., Osman, A. Performance evaluation of IPv6 Jumbogram Packets transmission using Jumbo Frames (2017) International Conference on Electrical Engineering, Computer Science and Informatics (EECSI), 2017-December, . DOI: 10.1109/EECSI.2017.8239188
                <span class="nextline">
                  Supriyanto, Sofhan, R., Fahrizal, R., Osman, A. Performance evaluation of ipv6 jumbogram packets transmission using jumbo frames (2017) International Conference on Electrical Engineering, Computer Science and Informatics (EECSI), 4, pp. 653-657. DOI: 10.11591/eecsi.4.1082
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2016</h4>
              <p class="details">
                Mahmadi, F.N., Zaaba, Z.F., Osman, A. Computer Security Issues in Online Banking: An Assessment from the Context of Usable Security (2016) IOP Conference Series: Materials Science and Engineering, 160 (1), art. no. 012107, . DOI: 10.1088/1757-899X/160/1/012107
                <span class="nextline">
                  Praptodiyono, S., Hasbullah, I.H., Kadhum, M.M., Murugesan, R.K., Wey, C.Y., Osman, A. Improving Security of Duplicate Address Detection on IPv6 Local Network in Public Area (2016) Proceedings - AMS 2015: Asia Modelling Symposium 2015 - Asia 9th International Conference on Mathematical Modelling and Computer Simulation, art. no. 7725309, pp. 123-128. DOI: 10.1109/AMS.2015.28
                </span>
                <span class="nextline">
                  Praptodiyono, S., Murugesan, R.K., Hasbullah, I.H., Wey, C.Y., Kadhum, M.M., Osman, A. Security mechanism for IPv6 stateless address autoconfiguration (2016) Proceedings of the 2015 International Conference on Automation, Cognitive Science, Optics, Micro Electro-Mechanical System, and Information Technology, ICACOMIT 2015, art. no. 7440150, pp. 31-36. DOI: 10.1109/ICACOMIT.2015.7440150
                </span>
                <span class="nextline">
                  Hasbullah, I.H., Kadhum, M.M., Chong, Y.-W., Alieyan, K., Osman, A., Supriyanto Timestamp utilization in Trust-ND mechanism for securing Neighbor Discovery Protocol (2016) 2016 14th Annual Conference on Privacy, Security and Trust, PST 2016, art. no. 7906974, pp. 275-281.DOI: 10.1109/PST.2016.7906974
                </span>
                <span class="nextline">
                  Praptodiyono, S., Hasbullah, I.H., Kadhum, M.M., Wey, C.Y., Murugesan, R.K., Osman, A. Securing duplicate address detection on IPv6 using distributed trust mechanism (2016) International Journal of Simulation: Systems, Science and Technology, 17 (32), 11 p. DOI: 10.5013/IJSSST.a.17.32.03
               </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2015</h4>
              <p class="details">
                Sabudin, M., Che Othman, A.H., Osman, A., Yusof, U.K. Improving colour contrast of images for colour deficient individual (2015) ICIC Express Letters, 9 (4), pp. 983-988. 
              </p>
            </div>
            <div class="info-box">
              <h4>2014</h4>
              <p class="details">
                Supriyanto, Hasbullah, I., Anbar, M., Murugesan, R., Osman, A. Risk analysis of the implementation of IPv6 neighbor discovery in public network (2014) International Conference on Electrical Engineering, Computer Science and Informatics (EECSI), 1, pp. 275-279. DOI: 10.11591/eecsi.1.340
              </p>
            </div>
            <div class="info-box">
              <h4>2013</h4>
              <p class="details">
                Supriyanto, Murugesan, R.K., Osman, A., Ramadass, S. Security mechanism for IPv6 router discovery based on distributed trust management (2013) 2013 IEEE International Conference on RFID-Technologies and Applications, RFID-TA 2013, art. no. 6694519, . DOI: 10.1109/RFID-TA.2013.6694519
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