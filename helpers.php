<?php


function getMetaDescription() {

  $page = $_SERVER['REQUEST_URI'];
  

  switch ($page) {
    case "/smabruk.php":
      $description = "I vårt småbruk odlar vi grönsaker och föder upp lamm . Vi använder småskaliga metoder utan stora maskiner och givetvis utan kemiska bekämpningsmedel eller konstgödsel.";
      break;
    case "/aktuellt.php":
      $description = "Mycket händer på gården, håll koll här för det senaste.";
      break;
    case "/handelsbod.php":
      $description = "I vår handelsbod finns ett urval av noga utvalda produkt, alla med stor hänsyn till människa och miljö.";
      break;
    case "/halmhus.php":
      $description = "Halmhuset från verkligheten. Ett hus som är byggt på riktigt och från grunden, miljövänligt och utan kemikalier.";
      break;
    case "/folkochfa.php":
      $description = "I verkligheten bor två familjer. Familjen Salbark bygger halmhus och familjen Espenkrona bor i det gamla boningshuset på gården.";
      break;
      case "/naturlogi.php":
      $description = "Naturlogi i verkligheten. Logi mitt i naturen och mitt mellan Kolmården och Astrid Lindgrens värld.";
      break;
    case "/kontakt.php":
      $description = "Verklighetens Gård ligger 2.5 mil söder om Linköping i Östergötland.";
      break;
    default:
      $description = "Verkligheten är en familjegård där vi bygger upp en liten verksamhet med fokus på småskalighet, äkthet och välkomnande.";
  }


  return $description;
}

function getActiveMenuItem($item) {
  $page = str_replace(".php", "", $_SERVER['REQUEST_URI']);
  $active = "";
  if($page == $item) {
    $active = "active";
  }
  return $active;
}

?>