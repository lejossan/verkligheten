<?php $title = "Verklighetens Gård"; include('header.php'); ?>

  <div class="imagewrapper--big wood">
    <div class="header-image image"></div>
    <h1><a href="index.php" class="nolink" alt="home">VERKLIGHETENS GÅRD</a></h1>
  </div>
  <?php include('menu.php'); ?>

  <?php include('texts/payoff.php'); ?>
  
  <div class="section">
    <div class="container">
      <div class="col--6">
          <a href="/slowtv.php" class="button more redlight">
            <div class="col--8">
              <span class="h2">JUST NU!</span>
              <span class="minor">Första kycklingen är född för i år! Följ det spännande dramat här.</span>
            </div>
            <span class="icon icon--tv ml"></span>
          </a>
      </div>
    </div>
  </div>

  <div class="section white">
    <div class="container">
      <div class="col--6 right-align">
    
        <?php //include('texts/far_teaser.php'); ?>
        <?php //include('texts/julmarknad_teaser.php'); ?>
        <?php include('texts/butik_teaser.php'); ?>
        <?php //include('texts/varmarknad_teaser.php'); ?>

      </div> 
      <div class="col--6">
        <!--<img class="lamm" src="../img/jul-round.png" alt="julmarknad" />-->
        <!--<img class="lamm" src="../img/lamm-round.png" alt="lamm" /> -->
        <img class="lamm" src="../img/var-round.png" alt="lamm" />
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container center-align">
      <div class="col--6">
        <img class="lamm" src="../img/halmhus-round.png" alt="lamm" />
      </div>
      <div class="col--6 left-align">
        <?php include('texts/halmhus_teaser.php'); ?>
      </div>
    </div>
  </div>

  <div class="section white">
    <div class="container">
      <div class="col--6">
        <h2>VILL DU BESÖKA OSS?</h2>
        <p>Söker ni ställplats eller camping i Östergötland ska ni kolla in sidan om vår <a href="/camping.php">camping</a>. Vi välkomnar även besökare på våra marknader som vi håller två gånger om året. En gång på våren och en gång till advent. Läs mer under <a href="/aktuellt.php">Aktuellt</a>. Butiken har öppet helger under sommarhalvåret. Läs mer under <a href="/butik.php">Butik</a></p>
        <p>För studiebesök i halmhuset läs mer under <a href="/halmhus.php#besokhalmhus">Halmhus</a>. Kostnad beror på upplägg och hur många ni är.</p>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>