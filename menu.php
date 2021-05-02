<?php

  include('components/MenuItem.php'); 

  $menuItems = array();
  $menuItems[] = new MenuItem(getActiveMenuItem("/index"), "index.php", "HEM");
  // $menuItems[] = new MenuItem(getActiveMenuItem("/aktuellt"), "aktuellt.php", "AKTUELLT");
  $menuItems[] = new MenuItem(getActiveMenuItem("/handelsbod"), "handelsbod.php", "HANDELSBOD");
  $menuItems[] = new MenuItem(getActiveMenuItem("/smabruk"), "smabruk.php", "SMÅBRUK");
  /* $menuItems[] = new MenuItem(getActiveMenuItem("/att_gora"), "att_gora.php", "ATT GÖRA"); */
  $menuItems[] = new MenuItem(getActiveMenuItem("/naturlogi"), "naturlogi.php", "NATURLOGI");
  $menuItems[] = new MenuItem(getActiveMenuItem("/halmhus"), "halmhus.php", "HALMHUS");
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
