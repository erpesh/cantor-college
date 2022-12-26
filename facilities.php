<?php
require_once("includes/config.php");
$queryCourses = "SELECT * FROM courses";
$resultCourses = $mysqli->query($queryCourses);
?>

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
      <div class="banner">
        <div class="bannerImage facilitiesImage" style="background-size: cover">
          <img src="images/facilities.webp" style="visibility: hidden" />
          <h1>Facilities</h1>
        </div>
      </div>
      <h2>Facilities</h2>
      <section>
        <p>The College is located in the attractive and pleasantly refurbished Building. The building houses computing
          laboratories, and lecture/tutorial rooms. It has its own catering facilities and student work areas. There is
          also a car park to the back of the building.</p>
        <p>Our building has space of 9500m², houses over 240 staff and provides teaching space for more than 1600
          students.</p>
      </section>
      <h3>Facilities include:</h3>
      <section>
        <ul>
          <li>wi-fi technology</li>
          <li>pool teaching rooms, including classrooms to teach from 25 - 80 students</li>
          <li>specialist faculty facilities</li>
          <li>a double height lecture theatre at first and second floor level</li>
          <li>dramatic three-storey glass open atrium</li>
          <li>meeting rooms</li>
          <li>office accommodation</li>
          <li>specialist IT facilities</li>
          <li>reception desk area</li>
          <li>catering outlet</li>
          <li>parking for disabled badge holders</li>
          <li>cycle racks</li>
          <li>gallery</li>
        </ul>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
</body>

</html>