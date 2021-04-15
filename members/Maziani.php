<?php 
$localstyle='member.css';
$title = 'Maziani Sabudin | CTCS';
require '../config/config.php'; 
require '../inc/header.php'; 
$data['img'] = 'maziani';
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
            <p class="member-name"><strong>Maziani Sabudin, Mdm. </strong></p>
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
                    <li>B.Sc. Computer Science - University of Wisconsin, La Crosse, Wisconsin, U.S.A.</li>
                    <li>
                      M.Sc. Computer Science - Bradley University, Peoria, Illinois, U.S.A.
                    </li>
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
                <td class="pl-25 pt-15">Dynamic Knowledge Representation for E-Learning Applications</td>
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
                    Room 632, School of Computer Sciences, Universiti Sains
                    Malaysia, 11800 USM, Pulau Pinang
                  </p>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-envelope fa-2x"></i>
                <div class="details">
                  <h4>Email</h4>
                  <a href="mailto:maziani@usm.my">maziani@usm.my</a>
                </div>
              </div>
              <div class="info-box">
                <i class="fas fa-phone-alt fa-2x"></i>
                <div class="details">
                  <h4>Call</h4>
                  <p>+604 653 4649</p>
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
              <h4>2016</h4>
              <p class="details">
                Alzahri, F.B.B., Sabudin, M. Vehicle Tracking Device (2016) 4th IGNITE Conference and 2016 International Conference on Advanced Informatics: Concepts, Theory and Application, ICAICTA 2016, , pp. -. DOI: 10.1109/ICAICTA.2016.7803080
              </p>
            </div>
            <div class="info-box">
              <h4>2015</h4>
              <p class="details">
               Zarro, R.D., Yusof, U.K., Sabudin, M. Maintenance cost optimization with replacement policy using island model and harmony search (2015) ICIC Express Letters, 9 (3), pp. 713-720. DOI:
                <span class="nextline"
                  >Sabudin, M., Che Othman, A.H., Osman, A., Yusof, U.K. Improving colour contrast of images for colour deficient individual (2015) ICIC Express Letters, 9 (4), pp. 983-988. DOI:</span
                >
              </p>
            </div>
            <div class="info-box">
              <h4>2014</h4>
              <p class="details">
                Lee, H.W., Sabudin, M., Idrus, R., Osman, M.A., Kruahong, T., Leanjay, N. Exploring the key determinants of successful ICT innovation adoption: A case study of a fishing community in Thailand (2014) Lecture Notes in Electrical Engineering, 279 LNEE, pp. 643-648. DOI: 10.1007/978-3-642-41674-3_92 
              </p>
            </div>
            <div class="info-box">
              <h4>2013</h4>
              <p class="details">
                Othman, A.H.C., Sabudin, M. A study of colour transformation for colour deficient individual (2013) Proceeding - 2013 IEEE Student Conference on Research and Development, SCOReD 2013, , pp. 328-333. DOI: 10.1109/SCOReD.2013.7002601
              </p>
            </div>
            <div class="info-box">
              <h4>2012</h4>
              <p class="details">
                Khalid, M.N.A., Yusof, U.K., Sabudin, M. Solving flexible manufacturing system distributed scheduling problem subject to maintenance using harmony search algorithm (2012) Conference on Data Mining and Optimization, , pp. 73-79. DOI: 10.1109/DMO.2012.6329801
              </p>
            </div>
            <div class="info-box">
              <h4>2011</h4>
              <p class="details">
                Osman, M.A., Talib, A.Z., Sabudin, M., Lee, W.P. GreenEve2Peace: An advising and scheduling management platform for farming community (2011) Recent Researches in Software Engineering, Parallel and Distributed Systems - 10th WSEAS International Conference on Software Engineering, Parallel and Distributed Systems, SEPADS'11, , pp. 90-95. DOI:
              </p>
            </div>
            <div class="info-box">
              <h4>2011</h4>
              <p class="details">
                Ching, S.-L., Sabudin, M. Website image colour transformation for the colour blind (2010) ICCTD 2010 - 2010 2nd International Conference on Computer Technology and Development, Proceedings, , pp. 255-259. DOI: 10.1109/ICCTD.2010.5645874
                <span class="nextline">
                  Ching, S.-L., Sabudin, M. A study of color transformation on website images for the color blind (2010) World Academy of Science, Engineering and Technology, 62, pp. 808-811. DOI:
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2009</h4>
              <p class="details">
                Ismail, A., Sulaiman, S., Sabudin, M. Perspectives on knowledge sharing system for special interest group (SIG): Culture, power issues and user interface (2009) ICCTD 2009 - 2009 International Conference on Computer Technology and Development, 1, pp. 416-420. DOI: 10.1109/ICCTD.2009.181
                <span class="nextline">
                    Mohamed, H., Sulaiman, S., Sabudin, M. A hybrid of rule and frame based approach in solving hajj complex problems (2009) SoCPaR 2009 - Soft Computing and Pattern Recognition, , pp. 466-471. DOI: 10.1109/SoCPaR.2009.96
                </span>
                <span class="nextline">
                    Lee, W.P., Osman, M.A., Sabudin, M. Design of an intelligent route planning system using an enhanced A*-search algorithm (2009) Proceedings - 2009 3rd Asia International Conference on Modelling and Simulation, AMS 2009, , pp. 40-44. DOI: 10.1109/AMS.2009.132
                </span>
              </p>
            </div>
            <div class="info-box">
              <h4>2008</h4>
              <p class="details">
                Ismail, A., Sulaiman, S., Sabudin, M., Sulaiman, S. A point-based semi-automatic expertise classification (PBaSE) method for knowledge management of an online special interest group (2008) Proceedings - International Symposium on Information Technology 2008, ITSim, 2, pp. -. DOI: 10.1109/ITSIM.2008.4631650
                <span class="nextline">
                    Sulaiman, S., Ismail, A., Khader, A.T., Sabudin, M., Sulaiman, S. A classification and visualization approach for knowledge management of a special interest group (2008) Proceedings of the 4th IASTED International Conference on Advances in Computer Science and Technology, ACST 2008, , pp. 31-36. DOI:
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