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
    echo "<p>UCAS Code: {$obj->UcasCode}</p>";
    echo "<p>UCAS Points: {$obj->UcasPoints}</p>";
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
        <p>Course Type: <?php echo $obj->CourseType ?></p>
        <p>Course Award: <?php echo $obj->CourseAwardName ?></p>
        <?php echoUcasInfo($obj); ?>
        <p>Year of Entry: <?php echo $obj->YearOfEntry ?></p>
        <p>ModeOfAttendance: <?php echo $obj->ModeOfAttendance ?></p>
        <p>Course Length: <?php echo $obj->StudyLength ?></p>
        <p>Foundation Year:
          <?php echo $obj->HasFoundationYear == 1 ? "✓" : "✗" ?>
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