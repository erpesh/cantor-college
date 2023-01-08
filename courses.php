<?php
require_once("includes/config.php");
$computingQuery = "SELECT * FROM courses WHERE CourseSubject = \"Computing\"";
$desingQuery = "SELECT * FROM courses WHERE CourseSubject = \"Art and design\"";
$computingCourses = $mysqli->query($computingQuery);
$designCourses = $mysqli->query($desingQuery);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Courses | Cantor College</title>
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
        <div class="bannerImage forStudentsImage" style="background-size: cover">
          <img src="images/forStudents.webp" style="visibility: hidden" />
          <h1>Courses</h1>
        </div>
      </div>
      <h2>Computing Courses</h2>
      <section class="courses">
        <p>The College offers a range of courses to suit applicants with varying backgrounds and educational abilities.
          At undergraduate level, there are single BSc Honours Degree courses in Computing, Computer Networks, Software
          Engineering and Cyber Security with Forensics amongst others.</p>
        <p>The College teaches undergraduate and postgraduate courses in a wide range of specialisms, including computer
          science, software development, information systems, networking and software engineering. It is at the heart of
          a passionate computing community, including student societies devoted to games development, digital forensics
          and programming.</p>
        <p>The courses are British Computer Society accredited and are highly relevant to modern industry. They are
          designed to prepare students for professional occupations in Computing and related fields. Many graduates
          continue their studies to pursue a higher degree such as an MSc. or PhD.</p>
        <div style="overflow-x:auto;">
          <table>
            <tr>
              <th>Title</th>
              <th class="typeColumn">Type</th>
            </tr>
            <?php
            tableOutput($computingCourses);
            ?>
          </table>
        </div>
      </section>
      <h2>Design Courses</h2>
      <section class="courses">
        <p>The College is an internationally connected creative community of diverse disciplines housed under one
          roof.We shape our students' futures, preparing them to shape the world through applied knowledge and
          creativity.</p>
        <p>The College's art and design courses don't just train you, they promote alternative ways of thinking, making
          and communicating; they provide you with space, tools and inspiration to develop your creative practice and a
          clear career path. You'll get expert teaching from active practitioners and researchers who will encourage you
          to adopt innovative and resourceful approaches that both perceive and create opportunities for better lives.
        </p>
        <p>You'll develop your creative practice whilst interacting with your peers in well-equipped studios, making and
          digital workshops. At the same time, you'll learn professional skills by working on applied briefs facilitated
          through our links with commercial clients, cultural institutions, businesses and organisations.</p>
        <div style="overflow-x:auto;">
          <table>
            <tr>
              <th class="titleColumn">Title</th>
              <th class="typeColumn">Type</th>
            </tr>
            <?php
            tableOutput($designCourses);
            ?>
          </table>
        </div>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
</body>

</html>