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
  if ($result->num_rows){
    tableOutput($result);
  }else {
    noResults();
  }
}
function tableOutput(object $resultObject)
{
  while ($obj = $resultObject->fetch_object()) {
    echo "<tr class=\"tableRow\" onclick=\"window.location='courseDetails.php?courseId={$obj->CourseId}'\">";
    echo "<td class=\"titleColumn\">{$obj->CourseTitle}</td>";
    echo "<td class=\"typeColumn\">" . $obj->CourseType . "</td>";
    echo "</tr>";
  }
}
function noResults(){
  echo "<span class=\"noResults\">No results found</span>";
}
?>

<?php
if (isset($_POST['q'])) {
  getSearchResults($_POST['q']);
}
?>