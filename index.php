<?php $title = "Verklighetens Gård"; include('header.php'); ?>

  <div class="imagewrapper--big wood">
    <div class="header-image image"></div>
    <h1><a href="index.php" class="nolink" alt="home">VERKLIGHETENS GÅRD</a></h1>
  </div>
  <?php include('menu.php'); ?>

  <?php include('texts/payoff.php'); ?>
  <!--
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
-->
  <div class="section white">
    <div class="container-flex">
      <div class="col--6 right-align">
    
        <?php //include('texts/far_teaser.php'); ?>
        <?php //include('texts/julmarknad_teaser.php'); ?>
        <?php include('texts/reko_teaser.php'); ?>
        <?php //include('texts/varmarknad_teaser.php'); ?>

      </div> 
      <div class="col--6 readmore--container">
        <!--<img class="lamm" src="../img/jul-round.png" alt="julmarknad" />-->
        <!--<img class="lamm" src="../img/lamm-round.png" alt="lamm" /> -->
        <!--<img class="lamm" src="../img/var-round.png" alt="lamm" />-->
        <!-- <img class="butik" src="../img/butik-round.png" alt="butik" /> -->
        <img class="reko" src="../img/reko-round.png" alt="butik" />
        <a class="readmore--outline" href="/butik.php#gronsaker">Läs mer</a>
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container-flex center-align">
      <div class="col--6 readmore--container">
        <!-- <img class="camping" src="../img/camping-round.png" alt="camping" /> -->
        <!--<img class="lamm" src="../img/halmhus-round.png" alt="lamm" />-->
        <img class="butik" src="../img/butik-round-grey.png" alt="butik" />
        <a class="readmore--outline" href="/butik.php">Läs mer</a>
      </div>
      <div class="col--6 left-align">
        <?php include('texts/butik_teaser.php'); ?>
        <?php //include('texts/far_teaser.php'); ?>
        <?php //include('texts/halmhus_teaser.php'); ?>
      </div>
    </div>
  </div>


  <div class="section white">
    <div class="container">
      <div class="col--12">
        <h2>VI SOM BOR HÄR</h2>
        <p>Verkligheten är ett generationsboende. Familjen Salbark bor i sitt halmhus,  familjen Espenkrona bor i det gamla boningshuset på gården och föräldrarna Ottosson bor i Bokammaren, ett gammalt sädesmagasin som är ombyggt till bostadshus. Här lever vi och hjälps åt i vardagen, vi odlar ihop och sköter våra djur tillsammans. </p>
        <p>På gården bor ungefär 25 höns som ger oss de godaste ägg med den gulaste gula man kan tänka sig. De går i en stor gård där de hittar både mask och gräs att äta. Vi har olika raser och därför även olika färg på äggen, vita, bruna, gröna och turkosa. </p>
        <p>I verkligheten bor förutom höns och får också två hästar. Här bor även bordercollien Jazz som mest busar runt och lever rövare. </p>
        <p>Vi har också två katter som heter Evert och Missen, de bor i logen och hjälper oss hålla koll på den. De nyaste tillskotten är Siv och Maj, våra små dvärgvädurskaniner. </p>
      </div>
    </div>
  </div>

  <div class="imagewrapper--small folk">
    <div class="header-image image"></div>
  </div>
  
  <div class="section">
    <div class="container">
      <div class="col--6">
        <h2>VILL DU BESÖKA OSS?</h2>
        <p>Söker ni ställplats eller camping i Östergötland ska ni kolla in sidan om vår <a href="/camping.php">camping</a>. Vi välkomnar även besökare på våra marknader som vi håller då och då. Butiken har öppet helger under sommarhalvåret. Läs mer under <a href="/butik.php">Butik</a></p>
        <p>För studiebesök i halmhuset läs mer under <a href="/halmhus.php#besokhalmhus">Halmhus</a>. Kostnad beror på upplägg och hur många ni är.</p>
        <a href="/kontakt.php#hittahit" class="button"><span class="icon icon--pin"></span><span>Hitta till oss!</span></a>
      </div>
    </div>
  </div>


<?php include('footer.php'); ?>