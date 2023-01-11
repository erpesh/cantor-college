<?php
require_once("includes/config.php");
// query to get film by filmID
$courseId = $_GET['courseId'] ?? null;
$stmt = $mysqli->prepare("SELECT * FROM courses WHERE CourseId = ?");
$stmt->bind_param('i', $courseId);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows <= 0) {
  header("Location: catalogue.php");
}
$obj = $result->fetch_object();

function echoUcasInfo($obj)
{
  if ($obj->UcasCode != null) {
    echo "<p>UCAS Code: <span>{$obj->UcasCode}</span></p>";
    echo "<p>UCAS Points: <span>{$obj->UcasPoints}</span></p>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php echo $obj->CourseTitle ?> | Cantor College
  </title>
  <link rel="stylesheet" href="css/mobile.css" />
  <link rel="stylesheet" href="css/desktop.css" media="only screen and (min-width : 720px)" />
</head>

<body>
  <?php
  include("includes/header.php");
  ?>
  <div class="mainContainer">
    <main>
      <h1>
        <?php echo $obj->CourseTitle ?>
      </h1>
      <?php
        if ($obj->NoLongerRecruiting == 1) {
        echo "<h2 style=\"color:red;\">No longer recruiting!</h2>";
        }
      ?>
      <section class="courseDetails">
        <p>Course Type: <span><?php echo $obj->CourseType ?></span></p>
        <p>Course Award: <span><?php echo $obj->CourseAwardName ?></span></p>
        <?php echoUcasInfo($obj); ?>
        <p>Year of Entry: <span><?php echo $obj->YearOfEntry ?></span></p>
        <p>ModeOfAttendance: <span><?php echo $obj->ModeOfAttendance ?></span></p>
        <p>Course Length: <span><?php echo $obj->StudyLength ?></span></p>
        <p>
          <?php echo $obj->HasFoundationYear == 1 ? "With" : "No" ?>
          Foundation Year
        </p>
        <p class="courseSummary"><?php echo $obj->CourseSummary?></p>
      </section>
    </main>
  </div>

  <?php
  include("includes/footer.php");
  ?>

  <script src="js/main.js"></script>
</body>

</html>