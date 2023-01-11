<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Cantor College</title>
  <link rel="stylesheet" href="css/mobile.css" />
  <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 720px)" />
</head>

<body>
  <?php
  include("includes/header.php");
  ?>
  <div class="mainContainer">
    <main>
      <!-- <div class="slider">
        <img src="images/slider/0.webp" />
        <h2>Cantor College</h2>
      </div> -->
      <div class="banner">
        <div class="bannerImage sliderImage"
          style="background: linear-gradient(to bottom, rgba(0,0,0,0) 20%, rgba(0,0,0,6)), url('images/slider/0.webp'); background-size: cover;">
          <img src="images/slider/0.webp" style="visibility: hidden" />
          <h1>Cantor College</h1>
        </div>
      </div>
      <h2>About Us</h2>
      <section>
        Cantor College was established in 1989 to specialize in Computing and Design. At Cantor College, we want to give
        students the education they need to achieve their career aims, leaving them equipped with the knowledge, skills
        and experience to succeed. Cantor College gives you the opportunities that can give you the edge when you enter
        the world of work, through our teaching and our links to some of the world's leading researchers and employers.
        Our students have gone on to successful careers in a wide range of industries across the globe. Whatever your
        ambitions, our learning and support can help to get the most out of your time with Cantor College, both as a
        student and in your future career.
      </section>
      <h2>How To Find Us</h2>
      <section class="aboutUsSection">
        <h3>Address</h3>
        <div class="address">
          <ul class="address">
            <li>Cantor College</li>
            <li>Main Street</li>
            <li>Sheffield</li>
            <li>SC4 2BB</li>
          </ul>
          <div class="iframeMap">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d707.6137939225056!2d-1.4683908721527261!3d53.37690931483411!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48798338bc5a1d13%3A0xad74824d1242efa8!2sCantor%20College!5e0!3m2!1sen!2slt!4v1671788542943!5m2!1sen!2slt"
              style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
        <h3>Contacts</h3>
        <ul class="contacts">
          <li>Tel: <a href="tel:+(01321) 2340 235">(01321) 2340 235</a></li>
          <li>Fax: <a href="tel:+(01321) 2340 236">(01321) 2340 236</a></li>
          <li>Email: <a href="mailto:info@cantorcollege.ac.uk">info@cantorcollege.ac.uk</a></li>
          <li><a href="contactUs.php">Contact form</a></li>
        </ul>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
  <script src="js/slider.js"></script>
</body>

</html>