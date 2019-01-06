<?php


function getMetaDescription() {

  $page = $_SERVER['REQUEST_URI'];
  

  switch ($page) {
    case "/far.php":
      $description = "Fåren på Verklighetens Gård är en stor del av vår verksamhet.";
      break;
    case "/aktuellt.php":
      $description = "Mycket händer på gården, 2 advent bjuder vi traditionsenligt in till adventsmys, då bjuder vi på glögg, pepparkaka och julstämning. På våren har vi vårmarknad med lammys, nykläckta kycklingar och vårkänslor.";
      break;
    case "/butik.php":
      $description = "I vår butik finns ett urval av noga utvalda produkt, alla med stor hänsyn till människa och miljö.";
      break;
    case "/halmhus.php":
      $description = "Halmhuset från verkligheten. Ett hus som är byggt på riktigt och från grunden, miljövänligt och utan kemikalier.";
      break;
    case "/folkochfa.php":
      $description = "I verkligheten bor två familjer. Familjen Salbark bygger halmhus och familjen Espenkrona bor i det gamla boningshuset på gården.";
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