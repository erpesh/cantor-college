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
          <h1>For Students</h1>
        </div>
      </div>
      <h2>Information for Students</h2>
      <section>
        <ul class="nonDecor forStudents">
          <li>
            <h4>Academic Information</h4>
            <ul>
              <li>Faculties - Links to all the Faculty and Departmental Offices with information on staff, courses and
                events.</li>
              <li>A to Z List of Departments - Departmental Homepages.</li>
              <li>Library and Learning Resource Services - Information on LLRS services, access to the on-line
                catalogue, links to external academic resources and guides to using IT to support your studies.</li>
              <li>Our Academic Partners - Information on College links.</li>
              <li>Research - links to the Research Centres, guide to research opportunities and help on finding research
                funding.</li>
            </ul>
          </li>
          <li>
            <h4>Administrative Support</h4>
            <ul>
              <li>Academic Registry - Information provided by the Academic Registry, including Academic Calendars,
                Academic Regulations, Module Catalogue, information on award ceremonies and tuition fees.</li>
              <li>Student Guide to Regulations - General and Academic Regulations, World Wide Web Code of Practice,
                Rules Governing the Use of LLRS facilities.</li>
            </ul>
          </li>
          <li>
            <h4>Student Services</h4>
            <ul>
              <li>Advisory and Counselling Centre - academic advice, help for international students, careers guidance,
                personal counselling, student loans and access funds and support for students with disabilities/learning
                difficulties.</li>
              <li>Health Centre - guide to the services provided by the University Health Centre.</li>
              <li>Multi-Faith Centre - information regarding the work of the Multi-Faith Centre.</li>
              <li>Pre-School Centre - contact information regarding the University's child care facilities.</li>
              <li>Sports Centre - booking arrangements and facilities.</li>
            </ul>
          </li>
          <li>
            <h4>University Services</h4>
            <ul>
              <li>Catering Services - guide to the catering facilities on campus.</li>
              <li>Printing Services - information regarding services provided for students.</li>
              <li>Student Accommodation Services - guide to University Accommodation and help on finding accommodation
                in the private sector.</li>
            </ul>
          </li>
          <li>
            <h4>Life at the University</h4>
            <ul>
              <li>Arts Centre - what's on at the University's arts venues.</li>
              <li>Students' Union - events and services provided by the Students' Union.</li>
              <li>University Guide - a full guide to life at the University.</li>
              <li>Campus Navigator - help with finding your way around campus.</li>
            </ul>
          </li>
          <li>
            <h4>Communications</h4>
            <ul>
              <li>Noticeboards - General, Classified, Events and Alumni noticeboards.</li>
              <li>Student Email Search - database of student email addresses.</li>
              <li>Staff Search - database of staff email addresses.</li>
              <li>A to Z List of Services - full A to Z list of University Services.</li>
            </ul>
          </li>
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