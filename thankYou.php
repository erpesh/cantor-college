<?php
require_once("includes/config.php");

if (!isset($_SERVER['HTTP_REFERER'])) { // redirect if the page was accessed directly
  header("Location: index.php");
}

$postQuery = "";
if (count($_POST) > 1) {
  $firstName = $_REQUEST["firstname"];
  $lastName = $_REQUEST["lastname"];
  $email = $_REQUEST["email"];
  $telephone = $_REQUEST["tel"];
  $message = $_REQUEST["message"];
  $postQuery = "INSERT INTO contactforms (userFirstName, userLastName, userEmail, userTelNumber, userMessage) 
  VALUES ('$firstName', '$lastName', '$email', '$telephone', '$message');";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Thank you | Cantor College</title>
  <link rel="stylesheet" href="css/mobile.css" />
  <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 720px)" />
</head>

<body>
  <?php
  include("includes/header.php");
  ?>
  <div class="mainContainer">
    <main>
      <h2>Thank you!</h2>
      <section class="centre">
        <?php
        if (count($_POST) > 1 && mysqli_query($mysqli, $postQuery)) {
          echo "<h1>Thank you! We will get in touch with you shortly!</h1>";
        } else {
          echo "<h1>Something went wrong. Please go back and try to fill in the contact form again.</h1>";
        }
        ?>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
</body>

</html>