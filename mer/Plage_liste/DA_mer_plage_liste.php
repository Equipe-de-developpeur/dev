<!DOCTYPE html>

<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed&display=swap" rel="stylesheet">
  <link rel="stylesheet" style="text/css" href="css/DA_mer_plage_liste.css">
  <link rel="stylesheet" style="text/css" href="css/DA_mer_plage_commentaires.css">
  <link rel="stylesheet" style="text/css" href="css/DA_mer_plage_liste_details.css">

  <?php
  $title = "Liste plage";

  if (isset($_REQUEST['id'])) {
    $title = "Liste plage détails";
  }

  ?>

  <title><?= $title ?></title>
</head>

<body>

  <?php
  if ($title == "Liste plage") {
    require 'View/DA_mer_plage_liste_tableau.php';
    include 'View/DA_mer_plage_liste_commentaires.php';
  }

  if ($title == "Liste plage détails") {
    include 'View/DA_mer_plage_liste_details.php';
  }
  ?>

  <?php include "../espace_membre/footer.php"; ?>

</body>

</html>