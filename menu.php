<?php

  include('components/MenuItem.php'); 

  $menuItems = array();
  $menuItems[] = new MenuItem(getActiveMenuItem("/index"), "index.php", "HEM");
  $menuItems[] = new MenuItem(getActiveMenuItem("/aktuellt"), "aktuellt.php", "AKTUELLT");
  $menuItems[] = new MenuItem(getActiveMenuItem("/halmhus"), "halmhus.php", "HALMHUS");
  $menuItems[] = new MenuItem(getActiveMenuItem("/far"), "far.php", "FÅR");
  $menuItems[] = new MenuItem(getActiveMenuItem("/honor"), "honor.php", "HÖNS");
  $menuItems[] = new MenuItem(getActiveMenuItem("/folkochfa"), "folkochfa.php", "FOLK & FÄ");
  $menuItems[] = new MenuItem(getActiveMenuItem("/kontakt"), "kontakt.php", "KONTAKT");

?>

<div class="menu">
  <ul class="container">
    <li class="h3 title">MENY</li>

    <?php
      foreach ($menuItems as $key => $item) {
        if($item->active == "active") {
          echo '<li class="h3 active" >'. $item->title .'</li>';
        } else {
          echo '<li class="h3" ><a href="' . $item->url .'">' . $item->title .'</a></li>';
        }
      }
    ?>
  </ul>
</div>
