<?php 
$localstyle='member.css';
$title = 'Zarul Fitri | CTCS';
require '../config.php'; 
require '../inc/header.php'; 
$data['img'] = 'zarul';
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
            <p class="member-name"><strong>Dr Zarul Fitri Zaaba</strong></p>
          </div>
          <!-- GENERAL INFO COLUMN -->
          <div class="general-info">
            <h2 class="text-center">General Info</h2>
            <table>
              <tr>
                <td><strong>Title</strong></td>
                <td class="pl-10">Senior Lectuer</td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Qualifications</strong></td>
                <td>
                  <ul>
                    <li>BIT Hons (IT) Universiti Utara Malaysia</li>
                    <li>
                      MSc (Information Security) Royal Holloway University of
                      London, United Kingdom.
                    </li>
                    <li>PhD, University of Plymouth, United Kingdom.</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Specialization</strong></td>
                <td>
                  <ul>
                    <li>Information Security</li>
                    <li>Usability Security</li>
                    <li>Data security and Privacy</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Research Interests</strong></td>
                <td>
                  <ul>
                    <li>Information Security</li>
                    <li>Usability Security</li>
                    <li>Human Aspects of Security</li>
                    <li>Acceptance of security</li>
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
                    Room 15, School of Computer Sciences, Universiti Sains
                    Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:someone@example.com">zarulfitri@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 4758</p>
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
                Aminuddin, M.A.I.M., Zaaba, Z.F., Hussain, A. Applicability of
                website fingerprinting attack on tor encrypted traffic (2019)
                International Journal of Innovative Technology and Exploring
                Engineering, 8 (8), pp. 386-391. DOI:
                <span class="nextline">
                  Hussein, I., Hussain, A., Mkpojiogu, E.O.C., Nathan, S.S.,
                  Zaaba, Z.F. The knowledge of human-computer interaction (HCI)
                  and user experience design (UXD) in malaysia: An analysis of
                  the characteristics of an HCI-focused conference (2019)
                  International Journal of Innovative Technology and Exploring
                  Engineering, 8 (8), pp. 483-490. DOI:
                </span>
                <span class="nextline">
                  Hui, L.S., Wen, A.C., Teng, O.C., Zaaba, Z.F., Hussain, A.
                  Investigations and assessments on web browser security (2019)
                  International Journal of Innovative Technology and Exploring
                  Engineering, 8 (8), pp. 392-397. DOI:
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2018</h4>
              <p class="details">
                Abdul Rahman, A.A., Zaaba, Z.F., Hussain, A. Usable Tourism
                Application: MyTouristPlanner (MTP) (2018) Proceedings - 2018
                International Conference on Promising Electronic Technologies,
                ICPET 2018, , pp. 31-36. DOI: 10.1109/ICPET.2018.00012
                <span class="nextline"
                  >Marashdih, A.W., Zaaba, Z.F., Suwais, K. Cross Site
                  Scripting: Investigations in PHP Web Application (2018)
                  Proceedings - 2018 International Conference on Promising
                  Electronic Technologies, ICPET 2018, , pp. 25-30. DOI:
                  10.1109/ICPET.2018.00011</span
                >
                <span class="nextline"
                  >Marashdih, A.W., Zaaba, Z.F. Infeasible paths in static
                  analysis: Problems and challenges (2018) AIP Conference
                  Proceedings, 2016, pp. -. DOI: 10.1063/1.5055481</span
                >
                <span class="nextline"
                  >Hui, D.O.Y., Yuen, K.K., Zahor, B.A.F.B.S.M., Wei, K.L.C.,
                  Zaaba, Z.F. An assessment of user authentication methods in
                  mobile phones (2018) AIP Conference Proceedings, 2016, pp. -.
                  DOI: 10.1063/1.5055518</span
                >
                <span class="nextline"
                  >Amran, A., Zaaba, Z.F., Mahinderjit Singh, M.K. Habituation
                  effects in computer security warning (2018) Information
                  Security Journal, 27 (4), pp. 192-204. DOI:
                  10.1080/19393555.2018.1505008</span
                >
                <span class="nextline"
                  >Pius Owoh, N., Mahinderjit Singh, M., Zaaba, Z.F. Automatic
                  annotation of unlabeled data from smartphone-based motion and
                  location sensors (2018) Sensors (Switzerland), 18 (7), pp. -.
                  DOI: 10.3390/s18072134</span
                >
                <span class="nextline"
                  >Abiodun, O.I., Jantan, A., Singh, M.M., Anbar, M., Zaaba,
                  Z.F., Oludare Abiodun, O.E. Forensic dna profiling for
                  identifying an individual crime (2018) International Journal
                  of Civil Engineering and Technology, 9 (7), pp. 755-765.
                  DOI:</span
                >
                <span class="nextline">
                  Amran, A., Zaaba, Z.F., Mahinderjit Singh, M.K. Habituation
                  effects in computer security warning (2018) Information
                  Security Journal, , pp. 1-13. DOI:
                  10.1080/19393555.2018.1448492
                </span>
                <span class="nextline">
                  Mahmadi, F.N., Zaaba, Z.F. Preliminary study on security
                  issues of online banking: A case study of Malaysia (2018)
                  Journal of Engineering and Applied Sciences, 13 (3), pp.
                  709-716. DOI: 10.3923/jeasci.2018.709.716
                </span>
                <span class="nextline">
                  Aminuddin, M.A.I.M., Zaaba, Z.F., Singh, M.K.M., Singh, D.S.M.
                  A survey on tor encrypted traffic monitoring (2018)
                  International Journal of Advanced Computer Science and
                  Applications, 9 (8), pp. 113-120. DOI:
                </span>
                <span class="nextline">
                  Emang, D.W.A.B., Lukman, R.N.I.R., Kamarulzaman, M.I.S.,
                  Zaaba, Z.F., Hussain, A. Implementing E-learning platforms in
                  USM: UX and usability issues (2018) Journal of Advanced
                  Research in Dynamical and Control Systems, 10 (10 Special
                  Issue), pp. 1393-1401. DOI:
                </span>
                <span class="nextline">
                  Hussain, A., Mkpojiogu, E.O.C., Fadzil, N., Hassan, N., Zaaba,
                  Z.F. A mobile usability evaluation of a pregnancy app (2018)
                  Journal of Telecommunication, Electronic and Computer
                  Engineering, 10 (11-Jan), pp. 13-18. DOI:
                </span>
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