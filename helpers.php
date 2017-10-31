<?php


function getMetaDescription() {

  $page = $_SERVER['REQUEST_URI'];
  

  switch ($page) {
    case "/far.php":
      $description = "Fåren på Verklighetens Gård är en stor del av vår verksamhet.";
      break;
    case "/sakersomhander.php":
      $description = "Mycket händer på gården, 1 advent bjuder vi traditionsenligt in till första advent, då bjuder vi på glögg, pepparkaka och julstämning. På våren har vi vårmarknad med lammys, nykläckta kycklingar och vårkänslor.";
      break;
    case "/honor.php":
      $description = "På Verklighetens Gård bor ungefär 25 hönor och två tuppar, Doris och Knut.";
      break;
    case "/halmhus.php":
      $description = "Halmhuset från verkligheten. Ett hus som är byggt på riktigt och från grunden, miljövänligt och utan kemikalier.";
      break;
    case "/folkochfa.php":
      $description = "I verkligheten bor två familjer. Familjen Salbark bygger halmhus och familjen Espenkrona bor i det gamla boningshuset på gården.";
      break;
    default:
      $description = "Verkligheten är en familjegård där vi bygger upp en liten verksamhet med fokus på småskalighet, äkthet och välkomnande.";
  }


  return $description;
}

?>