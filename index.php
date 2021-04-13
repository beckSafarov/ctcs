
<?php 
$localstyle='main.css';
$title = 'CTCS official';
require 'config.php';
require 'inc/header.php'; 
?>
  <!-- LANDING PAGE BACKGROUND IMAGE -->
    <div class="background-img">
      <div class="logobox animate__animated animate__fadeIn">
        <img src="img/logo_main.png" alt="Computational Thinking" />
      </div>

      <!-- TOGGLE AND NAVIGATION MENU -->
      <?php require 'inc/toggleNav.php'; ?>


      <!-- LANDING PAGE CONTENT -->
      <div id="#landing-page" class="landing-page-title">
        <div class="center-align">
          <img class="mobile-logo" src="img/logo_simple.png" alt="" />
        </div>
        <h1 class="animate__animated animate__fadeInDown">
          Computational Thinking
        </h1>
        <p class="animate__animated animate__fadeInLeft">Research Team</p>
      </div>

      <div class="center-align">
        <div class="down-arrow">
          <a href="#about"><i class="fas fa-chevron-down fa-3x"></i></a>
        </div>
      </div>
    </div>
    <!-- the end of the background image -->

    <main>
      <!-- ABOUT SECTION -->
      <section id="about">
        <h1 data-aos="fade-up" data-aos-duration="3000" >About Us</h1>
        <div class="row">
          <div data-aos="fade-up" data-aos-duration="3000" class="short-about-img">
            <img src="img/brain.jpg" alt="Brain" />
          </div>
          <div data-aos="fade-up" data-aos-duration="3000" class="textcontent">
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis
              culpa sunt maxime, magnam blanditiis adipisci delectus expedita.
              Vitae quaerat dicta esse, id voluptatem corporis quibusdam
              explicabo error harum nihil eius sapiente iure soluta consequatur
              ut est quidem saepe molestiae odio minima fuga. Molestiae,
              consectetur labore veritatis commodi quam itaque alias nostrum
              fugiat qanaqadir saepe maiores deserunt, aliquam rerum aperiam
              nemo!
            </p>
            <a href="about.php"
              >Read More <i class="fas fa-arrow-right"></i
            ></a>
          </div>
        </div>
      </section>

      <!-- TEAM MEMBERS SECTION -->
      <section id="team-members">
        <h1 data-aos="fade-in" data-aos-duration="2000">Team Members</h1>
        <div class="cards-container">
          <div data-aos="fade-right" data-aos-duration="2000" onclick="memberPage('Zarul')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Dr Zarul Fitri</strong></p>
            </div>
          </div>
          <div data-aos="fade-down" data-aos-duration="2000" onclick="memberPage('Sufril')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Dr Ahmad Sufril</strong></p>
            </div>
          </div>
          <div data-aos="fade-left" data-aos-duration="2000" onclick="memberPage('Adib')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Dr Mohd Adib</strong></p>
            </div>
          </div>
          <div data-aos="fade-right" data-aos-duration="2000" onclick="memberPage('Manmeet')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Dr Manmeet Kaur</strong></p>
            </div>
          </div>
          <div data-aos="fade-up" data-aos-duration="2000" onclick="memberPage('Maziani')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Mdm Maziani Sabudin</strong></p>
            </div>
          </div>
          <div data-aos="fade-left" data-aos-duration="2000" onclick="memberPage('Azlan')" class="card">
            <div class="card-photo"></div>
            <div class="card-description">
              <p><strong>Mr Azlan Osman</strong></p>
            </div>
          </div>
        </div>
      </section>

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
                  <input
                    type="text"
                    name="firstName"
                    id="firstName"
                    placeholder="First Name"
                  />
                </div>
                <div class="input50">
                  <input
                    type="text"
                    name="lastName"
                    id="lastName"
                    placeholder="Last Name"
                  />
                </div>
              </div>

              <div class="row">
                <div class="input50">
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email"
                  />
                </div>
                <div class="input50">
                  <input
                    type="text"
                    name="subject"
                    id="subject"
                    placeholder="Subject"
                  />
                </div>
              </div>
              <div class="row">
                <div class="input100">
                  <textarea
                    placeholder="Message"
                    name="message"
                    id="message"
                  ></textarea>
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
                <p>Universiti Sains Malaysia, 11800, USM, Penang, Malaysia</p>
              </div>
            </div>
            <div class="info-box">
              <i class="fas fa-envelope"></i>
              <div class="details">
                <h4>Email</h4>
                <a href="mailto:someone@example.com">someone@example.com</a>
                <a href="mailto:sombody@example.com">somebody@example.com</a>
              </div>
            </div>
            <div class="info-box">
              <i class="fas fa-phone-alt"></i>
              <div class="details">
                <h4>Call</h4>
                <p>+1 978 555 5555</p>
                <p>+1 978 555 5555</p>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
<?php require 'inc/footer.php'; ?>

