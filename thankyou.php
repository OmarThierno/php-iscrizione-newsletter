<?php
if (!isset($_SESSION)) {
  session_start();
}

if (!isset($_SESSION["auth"]) || $_SESSION["auth"] !== true) {
  header("Location: ./index.php");
  die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container my-5">
    <h1>Thanks for signing up</h1>
    <div>See you soon...</div>
  </div>
</body>

</html>