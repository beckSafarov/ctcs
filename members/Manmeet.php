<?php 
$localstyle='member.css';
$title = 'Manmeet Kaur | CTCS';
require '../config.php'; 
require '../inc/header.php'; 
$data['img'] = 'manmeet';
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
            <p class="member-name"><strong>Manmeet Kaur Mahinderjit Singh, Dr.</strong></p>
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
                    <li>BSc (Hons) - Universiti Sains Malaysia </li>
                    <li>
                      MSc - Distributed Computing, Universiti Sains Malaysia 
                    </li>
                    <li>PhD - Data Security, The University of Queensland, Brisbane, Australia </li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Specialization</strong></td>
                <td>
                  <ul>
                    <li>Information Security and Cybersecurity</li>
                    <li>Trusted Systems Model & Techniques</li>
                    <li>Mobile Security.  Smart Devices Security ( Internet of Things)</li>
                    <li>Cybercrime Preventions & Detection</li>
                  </ul>
                </td>
              </tr>
              <tr>
                <td class="pt-15"><strong>Research Interests</strong></td>
                <td>
                  <ul>
                    <li>Internet of Things (IoT) Sensors Network</li>
                    <li>Bring Your own Devices Model</li>
                    <li>Smart Devices Technologies and Applications</li>
                    <li>Data Mining Technologies</li>
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
                    Room 514, School of Computer Sciences, Universiti Sains
                    Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:manmeet@usm.my">manmeet@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 5346</p>
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
              <h4>2020</h4>
              <p class="details">
                N. Pius Owoh.; M. Mahinderjit Singh; SenseCrypt: A Security Framework for Mobile Crowd Sensing Applications. Sensors 2020, 20, 3280. <a href="https://doi.org/10.3390/s20113280">https://doi.org/10.3390/s20113280</a>
                <span class="nextline">
                  Lee.P.L, M. Mahinderjit Singh, Resolving the imbalance issue in short messaging service spam dataset using cost-sensitive techniques. Journal of Information Security and Applications. 2020/10/1
                </span>
                <span class="nextline">
                  Z. Zulkefli, M.Mahinderjit Singh, Sentient-based Access Control model: A mitigation technique for Advanced Persistent Threats in Smartphones,
Journal of Information Security and Applications, Volume 51,102431, ISSN 2214-2126. <a href="https://doi.org/10.1016/j.jisa.2019.102431.">https://doi.org/10.1016/j.jisa.2019.102431.</a>
                </span>
                <span class="nextline">
                  R. Khana, M. Mahinderjit Singh, F. Damanhoori, N. Mustaffa. Breast Self-Examination System Using Multifaceted Trustworthiness: Observational Study. JMIR Med Inform 2020;8(9):e21584. <a href="https://medinform.jmir.org/2020/9/e21584/">https://medinform.jmir.org/2020/9/e21584/</a>
                </span>
                <span class="nextline">
                    R.Khanna, M.Mahinderjit Singh,  F. Damanhoori, N. Mustafa. Investigating the Importance of Implementing Ethical Value on a Healthcare System within a Social Media context. 2020.International Journal of Innovation, Creativity and Change
                </span>
                <span class="nextline">
                    N. Baharom, M. Mahinderjit Singh, Authentication and Authorization Model for Safeguarding Mission-Critical Applications in Pervasive Environment, International Journal of Advanced Trends in Computer Science and Engineering. Vol 9, No1.1., 2020. <a href="https://doi.org/10.30534/ijatcse/2020/5191.12020">https://doi.org/10.30534/ijatcse/2020/5191.12020</a>
                </span>
                <span class="nextline">
                      Y.S Chow, W.S.Ting, M. Mahinderjit Singh, M.N Ab Wahab, Ambient Sensors Fusion Smart Home, Test Engineering & Management, Volume 82, 2020. pp 12001-12009.
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2019</h4>
              <p class="details">
                Pius Owoh, M. Mahinderjit Singh, Applying Diffie-Hellman Algorithm to Solve the Key Agreement Problem in Mobile Blockchain-based Sensing Applications, International Journal of Advanced Computer Science and Applications (IJACSA), 10(3), 2019. <a href="http://dx.doi.org/10.14569/IJACSA.2019.0100308">http://dx.doi.org/10.14569/IJACSA.2019.0100308.</a>
                <span class="nextline"
                  >Mahinderjit Singh. M, Wern Shen. L, Anbar. M. Conceptualizing Distrust Model with Balance Theory and Multi-Faceted Model for Mitigating False Reviews in Location-Based Services (LBS). Symmetry 2019, 11, 1118. <a href="https://doi.org/10.3390/sym11091118">https://doi.org/10.3390/sym11091118</a></span
                >
                <span class="nextline"
                  >Singh, M.M., Lim, Y., Manaf, A. Smart home using microelectromechanical systems (MEMS) sensor and ambient intelligence (SAHOMASI) (2019) Lecture Notes in Electrical Engineering, 481, pp. 557-567. DOI: 10.1007/978-981-13-2622-6_54</span
                >
                <span class="nextline"
                  >Chuan, B.L.J., Singh, M.M., Shariff, A.R.M. APTGuard: Advanced persistent threat (APT) detections and predictions using android smartphone (2019) Lecture Notes in Electrical Engineering, 481, pp. 545-555. DOI: 10.1007/978-981-13-2622-6_53</span
                >
                <span class="nextline"
                  >Al Ashhab, Z.R., Anbar, M., Singh, M.M., Alieyan, K., Ghazaleh, W.I.A. Detection of HTTP flooding DDoS attack using Hadoop with MapReduce: a survey (2019) International Journal of Advanced Trends in Computer Science and Engineering, 8 (1), pp. 71-77. DOI: 10.30534/ijatcse/2019/12812019</span
                >
              </p>
            </div>
            <div class="info-box">
              <h4>2018</h4>
              <p class="details">
               Amran, A., Zaaba, Z.F., Mahinderjit Singh, M.K. Habituation effects in computer security warning (2018) Information Security Journal, 27 (4), pp. 192-204. DOI: 10.1080/19393555.2018.1505008 
               <span class="nextline">
                    Pius Owoh, N., Mahinderjit Singh, M., Zaaba, Z.F. Automatic annotation of unlabeled data from smartphone-based motion and location sensors (2018) Sensors (Switzerland), 18 (7), pp. -. DOI: 10.3390/s18072134
               </span>
               <span class="nextline">
                    Abiodun, O.I., Jantan, A., Singh, M.M., Anbar, M., Zaaba, Z.F., Oludare Abiodun, O.E. Forensic dna profiling for identifying an individual crime (2018) International Journal of Civil Engineering and Technology, 9 (7), pp. 755-765. DOI:
               </span>
               <span class="nextline">
                      Amran, A., Zaaba, Z.F., Mahinderjit Singh, M.K. Habituation effects in computer security warning (2018) Information Security Journal, , pp. 1-13. DOI: 10.1080/19393555.2018.1448492
               </span>
               <span class="nextline">
                    Owoh, N.P., Mahinderjit Singh, M. Security analysis of mobile crowd sensing applications (2018) Applied Computing and Informatics, , pp. -. DOI: 10.1016/j.aci.2018.10.002  
               </span>
               <span class="nextline">
                   Mahinderjit Singh, M., Ching, K.W., Abd Manaf, A. A novel out-of-band biometrics authentication scheme for wearable devices (2018) International Journal of Computers and Applications, , pp. -. DOI: 10.1080/1206212X.2018.1547347   
               </span>
               <span class="nextline">
                   Mohammed, S.M.Z., Shariff, A.R.M., Singh, M.M. An Authentication Technique: Behavioral Data Profiling on Smart Phones (2018) Lecture Notes in Electrical Engineering, 488, pp. 88-98. DOI: 10.1007/978-981-10-8276-4_9   
               </span>
               <span class="nextline">
                    Hassan, R., Mahinderjit-Singh, M., Hassan, H., Yuhaniz, S.S. Online Islamic business enhancer tool (OIBET) for young entrepreneurs (2018) Proceedings of the 31st International Business Information Management Association Conference, IBIMA 2018: Innovation Management and Education Excellence through Vision 2020, , pp. 687-701. DOI:  
               </span>
               <span class="nextline">
                   Mun, S.P., Husin, M.H., Singh, M.M., Malim, N.H.A.H. N-LibSys: Library system using NFC technology (2018) Lecture Notes in Electrical Engineering, 425, pp. 22-30. DOI: 10.1007/978-981-10-5281-1_3   
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