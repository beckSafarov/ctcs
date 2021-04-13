<?php 
$localstyle='about.css';
$title = 'About us';
require 'config.php';
require 'inc/header.php'; 
// echo URLROOT . '/inc/toggleNav.php';
?>
  <header>
    <!-- toggle and nav menu -->
    <?php require 'inc/toggleNav.php'; ?>
  </header>

  <main>
      <section>
        <h1>Computational Thinking</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, fuga?
          Necessitatibus minima omnis corporis, temporibus reiciendis minus
          obcaecati eveniet iusto eaque doloremque culpa nam excepturi? Ea,
          cumque quos! Soluta nam animi quos fugit eligendi dolores ea magnam
          vel, repellendus ab!
        </p>
        <div class="centered-column">
          <img src="img/brain.jpg" alt="Computational Thinking" />
          <p>Image by Seanbatty from Pixabay</p>
        </div>

        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure eum
          eligendi id? Necessitatibus neque, aut recusandae, officia suscipit
          debitis vel adipisci mollitia, at culpa accusamus perferendis voluptas
          quibusdam! Corporis repudiandae a rerum itaque aperiam quia ipsa
          quisquam debitis quibusdam doloremque praesentium aspernatur maxime
          obcaecati, veritatis accusantium, libero rem vero.
        </p>

        <div class="centered-column bordered">
          <img
            src="img/question-2004314_1920.jpg"
            alt="Computational Thinking"
          />
          <p>Image by Tulisu from Pixabay</p>
        </div>

        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti
          possimus porro, delectus iste et cum accusantium voluptatum, fugit
          sapiente atque, accusamus expedita magni dolor molestiae dolore eaque
          voluptates optio saepe libero odio ad. Placeat ex nam delectus quaerat
          eos quidem possimus nemo vel aperiam illo, consectetur quod, veniam,
          tempore veritatis.
        </p>
      </section>
    </main>
<?php require 'inc/footer.php'; ?>