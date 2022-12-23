<?php
require_once("includes/config.php");

function getSearchResults(?string $query)
{
  global $mysqli;
  $searchQuery = "%" . $query . "%";
  $stmt = $mysqli->prepare("SELECT * FROM courses WHERE courseTitle LIKE ?");
  $stmt->bind_param('s', $searchQuery);
  $stmt->execute();
  $result = $stmt->get_result();
  while ($obj = $result->fetch_object()) {
    echoObject($obj);
  }
}

function echoObject(?object $courseItem)
{
  echo "<li class=\"searchResultsItem\">";
  echo $courseItem->CourseTitle;
  echo "</li>";
}
?>

<?php
if (isset($_POST['q'])) {
  getSearchResults($_POST['q']);
}
?>

