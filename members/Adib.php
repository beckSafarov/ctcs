<?php 
$localstyle='member.css';
$title = 'Mohd Adib | CTCS';
require '../config/config.php'; 
require '../inc/header.php'; 

$data['img'] = 'adib';
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
            <p class="member-name"><strong>Mohd Adib Haji Omar, dr</strong></p>
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
                    <li>BSc. American University, Washington DC, USA</li>
                    <li>
                      MSc. American University, Washington DC, USA
                    </li>
                    <li>PhD. Universiti Sains Malaysia, Malaysia</li>
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
                    <li>Network Computing</li>
                    <li>Distributed Computing</li>
                    <li>Information Security</li>
                    <li>TRIZ in Computing</li>
                    <li>Computational Thinking</li>
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
                    Room 620, School of Computer Sciences, Universiti Sains
                    Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:adib@usm.my">adib@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 4648</p>
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
                Almazrooie, M., Samsudin, A., Gutub, A.A.-A., Salleh, M.S., Omar, M.A., Hassan, S.A. Integrity verification for digital Holy Quran verses using cryptographic hash function and compression (2020) Journal of King Saud University - Computer and Information Sciences, 32 (1), pp. 24-34. DOI: 10.1016/j.jksuci.2018.02.006
              </p>
            </div>
            <div class="info-box">
              <h4>2019</h4>
              <p class="details">
                Ahmed Elsmany, E.F., Omar, M.A., Wan, T.-C., Altahir, A.A. EESRA: Energy efficient scalable routing algorithm for wireless sensor networks (2019) IEEE Access, 7, pp. 96974-96983. DOI: 10.1109/ACCESS.2019.2929578
              </p>
            </div>
            <div class="info-box">
              <h4>2018</h4>
              <p class="details">
                Ahmed, E.F., Omar, M.A., Wan, T.-C., Altahir, A.A. Work in Progress: LEACH-based energy efficient routing algorithm for large-scale wireless sensor networks (2018) Journal of Telecommunication, Electronic and Computer Engineering, 10 (5-Jan), pp. 83-87. DOI:
              </p>
            </div>
            <div class="info-box">
              <h4>2016</h4>
              <p class="details">
                Bee, K.B., Hao, P.S., Woei, L.J., Omar, M.A. Intel Galileo based home automation system in Malaysia (2016) Jurnal Teknologi, 78 (1), pp. 113-120. DOI: 10.11113/jt.v78.4477
              </p>
            </div>
            <div class="info-box">
              <h4>2015</h4>
              <p class="details">
                Sedek, K.A., Omar, M.A., Sulaiman, S. Towards effectiveness of integration and interoperability of one-stop E-government portal (2015) Jurnal Teknologi, 77 (9), pp. 47-60. DOI: 10.11113/jt.v77.6185
              </p>
            </div>
            <div class="info-box">
              <h4>2014</h4>
              <p class="details">
                Sedek, K.A., Omar, M.A., Sulaiman, S. A hybrid and distributed architecture for an interoperable One-Stop E-government portal (2014) 2013 3rd World Congress on Information and Communication Technologies, WICT 2013, , pp. 325-330. DOI: 10.1109/WICT.2013.7113156
                <span class="nextline">
                  Sedek, K.A., Omar, M.A., Sulaiman, S. A hybrid architecture for one-stop e-government portal integration and interoperability (2014) 2014 8th Malaysian Software Engineering Conference, MySEC 2014, , pp. 96-101. DOI: 10.1109/MySec.2014.6985996
                </span>
                <span class="nextline">
                  Anagreh, M., Samsudin, A., Omar, M.A. Parallel method for computing elliptic curve scalar multiplication based on MOF (2014) International Arab Journal of Information Technology, 11 (6), pp. -. DOI:
                </span>
                <span class="nextline">
                    Al-Tamimi, B.N., Budiarto, R., Omar, M.A., Alhendawi, K.M. Exploiting IPV6 routing headers type 0/2 in different IP wireless networks: Attack scenario & analysis (2014) Journal of Theoretical and Applied Information Technology, 59 (2), pp. 372-378. DOI:
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2013</h4>
              <p class="details">
                Jaafar, Y., Samsudin, A., Syafalni, A., Omar, M.A. Framework for VoIP authentication using session ID based on modified vector quantization (2013) International Journal of Multimedia and Ubiquitous Engineering, 8 (3), pp. 369-376. DOI: 
              </p>
            </div>
            <div class="info-box">
              <h4>2012</h4>
              <p class="details">
                Syafalni, A., Samsudin, A., Jaafar, Y., Omar, M.A. ROSS: Low-cost self-securing VoIP communication framework (2012) KSII Transactions on Internet and Information Systems, 6 (12), pp. 3366-3383. DOI:
                <span class="nextline">
                  Sedek, K.A., Omar, M.A., Sulaiman, S. Interoperable SOA-based architecture for e-government portal (2012) 2012 IEEE Conference on Open Systems, ICOS 2012, , pp. -. DOI: 10.1109/ICOS.2012.6417636
                </span>
                <span class="nextline">
                  Amirul, M., Omar, M.A., Aini, N., Karuppiah, E.K., Mohanavelu, M., Meng, S.S., Chong, P.K. Sorting very large text data in multi GPUs (2012) Proceedings - 2012 IEEE International Conference on Control System, Computing and Engineering, ICCSCE 2012, , pp. 160-165. DOI: 10.1109/ICCSCE.2012.6487134
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2011</h4>
              <p class="details">
                Sedek, K.A., Sulaiman, S., Omar, M.A. A systematic literature review of interoperable architecture for e-government portals (2011) 2011 5th Malaysian Conference in Software Engineering, MySEC 2011, , pp. 82-87. DOI: 10.1109/MySEC.2011.6140648
                <span class="nextline">
                  Zareei, M., Zarei, A., Budiarto, R., Omar, M.A. A comparative study of short range wireless sensor network on high density networks (2011) 17th Asia-Pacific Conference on Communications, APCC 2011, , pp. 247-252. DOI: 10.1109/APCC.2011.6152813
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