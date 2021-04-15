<?php 
$localstyle='about.css';
$title = 'About us';
require 'config/config.php';
require 'inc/header.php'; 
// echo URLROOT . '/inc/toggleNav.php';
?>
  <header>
    <!-- toggle and nav menu -->
    <?php require 'inc/toggleNav.php'; ?>
  </header>

  <main>
      <section>
        <h1 class="about-title">Master Trainer Training on Computational Thinking & Computer Science Teaching </h1>
       
        <div class="author-info">
            <div class="author-photo"></div>
            <div class="info">
                <a class="author-name" href='<?php echo URLROOT;?>/members/Zarul.php'>Dr Zarul Fitri</a>
                
            </div>
        </div>
        
        <p>
          27 March 2017 - USM has been appointed as regional hub covering (i.e. penang, Kedah, Perlis and north of Perak) to serve as a professional learning community platform for educator communities involving teachers, school leaders and lecturers. One of the main delivery under regional hub umbrella is the "Teacher Certificate Program: Computational Thinking and Computer Science - Teaching Certificate". This course focus on problem solving that utilizes participants prior's knowledge in their subject area along with computational thinking skills and pedagogy in order to help them understand the nature and scope of problem. 
        </p>
        <div class="centered-column">
          <img src="img/ct_group.jpg" alt="Computational Thinking" />
          <p>Image by <a href="<?php echo URLROOT;?>/members/Sufril.php">Dr Ahmad Sufril Azlan Mohamed</a></p>
        </div>
        <p>
          The initial training is given to the 6 selected universities (i.e. regional hub) so that later, they will train the teachers in their respective region (i.e. knowledge transfer).  
        </p>
        <p>
          9 lecturers were involved from CS  (i.e. Dr Sukumar, Dr Ahmad Sufril Azlan, Puan Hasimah, Puan Maziani, En Azlan, Dr Manmeet, Dr Adib, Mr Sodhy and lead by Dr Zarul Fitri), USM for the initial training from 26 - Mac 2017 In Putrajaya. The same module used will be given to the teachers with 2 more additional tasks (i.e. programming project and classroom investigation). It is expected that this project will be executed in early April 2017 until September 2017. 
        </p>
      
      </section>
    </main>
<?php require 'inc/footer.php'; ?>