<?php $title = "Verklighetens Gård"; include('header.php'); ?>

  <div class="imagewrapper--big wood">
    <div class="header-image image"></div>
    <h1><a href="index.php" class="nolink" alt="home">VERKLIGHETENS GÅRD</a></h1>
  </div>
  <?php include('menu.php'); ?>

  <?php include('texts/payoff.php'); ?>
  
  <div class="section white">
    <div class="container">
      <div class="col--6">
        <img class="lamm" src="../img/halmhus-round.png" alt="lamm" />
      </div>
      <div class="col--6 left-align">
        <?php include('texts/halmhus_teaser.php'); ?>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container center-align">
      <div class="col--6 right-align">
        
        <?php include('texts/far_teaser.php'); ?>
        <?php //include('texts/julmarknad_teaser.php'); ?>
        <?php //include('texts/varmarknad_teaser.php'); ?>

      </div> 
      <div class="col--6">
        <!--<img class="lamm" src="../img/jul-round.png" alt="julmarknad" />-->
        <img class="lamm" src="../img/lamm-round.png" alt="lamm" />
        <!--<img class="lamm" src="../img/var-round.png" alt="lamm" /> -->
      </div>
    </div>
  </div>

  <div class="section white">
    <div class="container">
      <div class="col--6">
        <h2>VILL DU BESÖKA OSS?</h2>
        <p>Vi välkomnar framförallt besökare på våra marknader som vi håller två gånger om året. En gång på våren och en gång till advent. Läs mer under <a href="/aktuellt.php">Aktuellt</a>.</p>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>