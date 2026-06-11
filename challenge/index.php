<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>challange</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php include("includes/header.php"); ?>
  <?php
  $allowed_pages = ['hardware', 'netwerk', 'contact'];
  $page = $_GET['page'] ?? 'hardware';

  if (in_array($page, $allowed_pages)) {
    include "pages/" . $page . ".php";
  }
  ?>

  <?php include("includes/footer.php"); ?>

</body>

</html>