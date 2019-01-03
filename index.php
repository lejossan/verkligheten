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
        
        <?php //include('texts/far_teaser.php'); ?>
        <?php //include('texts/julmarknad_teaser.php'); ?>
        <?php include('texts/varmarknad_teaser.php'); ?>

      </div> 
      <div class="col--6">
        <!--<img class="lamm" src="../img/jul-round.png" alt="julmarknad" />-->
        <img class="lamm" src="../img/lamm-round.png" alt="lamm" />
        <!--<img class="lamm" src="../img/var-round.png" alt="lamm" />-->
      </div>
    </div>
  </div>



  <div class="imagewrapper">
    <div class="header-image--medium image-view"></div>
  </div>

  <div class="section social">
    <h2>HÄR FINNS VI OCKSÅ</h2>
    <div class="container">
      <a class="byggiverkligheten col--4 nolink" href="http://www.instagram.com/byggiverkligheten" target="_blank">
        <img src="img/byggiverkligheten.png" alt="instagram:byggiverkligheten" />
        <div class="banner">
          <h3>INSTAGRAM</h3>
          <span>@byggiverkligheten</span>
        </div>
      </a>
      <a class="odlaiverkligheten col--4 nolink" href="http://www.instagram.com/odlaiverkligheten" target="_blank">
        <img src="img/odlaiverkligheten.png" alt="instagram:odlaiverkligheten" />
        <div class="banner">
          <h3>INSTAGRAM</h3>
          <span>@odlaiverkligheten</span>
        </div>
      </a>
      <a class="djuriverkligheten col--4 nolink" href="http://www.instagram.com/djuriverkligheten" target="_blank">
        <img src="img/djuriverkligheten.png" alt="instagram:djuriverkligheten" />
        <div class="banner">
          <h3>INSTAGRAM</h3>
          <span>@djuriverkligheten</span>
        </div>
      </a>
    </div>
    <div class="container">
      <a class="facebook col--12 nolink" href="https://facebook.com/verklighetensgard" target="_blank">
        <img src="img/facebook.png" alt="Verklighetens Gård på Facebook" />
          <div class="banner">
            <h3>FACEBOOK</h3>
            <span>facebook.com/verklighetensgard</span>
          </div>
      </a>
    </div>
  </div>


<?php include('footer.php'); ?>