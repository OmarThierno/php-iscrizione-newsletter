<?php
require_once __DIR__ . "/partials/function.php";
$message;
$array_email_save = [];

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_GET["email"])) {
  $user_email = $_GET["email"];

  $message = checkEmail($user_email);
  if ($message === 'La email inserita è una mail valida') {
    $array_email_save[] = $user_email;
    $_SESSION["auth"] = true;
    header('Location: ./thankyou.php');
  }
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
  <div class="container">
    <form action="index.php" method="GET" class="my-5">
      <div>
        <label for="email">Inserisci la tua email</label>
        <input type="text" id="email" placeholder="es: mario@gmail.com" name="email">
      </div>
      <button type="submit" class="btn btn-primary">invia</button>
    </form>
    <?php if (!empty($message)) { ?>
      <div class="<?= $message === 'La email inserita è una mail valida' ? 'alert alert-success' : 'alert alert-danger' ?>"><?= $message ?></div>
    <?php } ?>
  </div>
</body>

</html>