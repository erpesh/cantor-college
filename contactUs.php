<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Cantor College</title>
  <link rel="stylesheet" href="css/mobile.css" />
  <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 720px)" />
</head>

<body>
  <?php
  include("includes/header.php");
  ?>
  <div class="mainContainer">
    <main>
      <h2>Contact Us</h2>
      <section>
      <form action="thankYou.php" method="post">
          <div>
            <label for="firstName">First name</label>
            <input type="text" name="firstname" id="firstname" placeholder="Your First Name" required>
          </div>
          <div>
            <label for="lastName">Last name</label>
            <input type="text" name="lastname" id="lastname" placeholder="Your Last Name" required>
          </div>
          <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>
          </div>
          <div>
            <label for="tel">Contact telephone</label>
            <input type="tel" name="tel" id="tel" required>
          </div>
          <div>
            <label for="message">Your message</label>
            <textarea id="message" name="message" required></textarea>
          </div>
          <div>
            <input type="submit" value="Send" class="sendButton">
          </div>
        </form>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
</body>

</html>