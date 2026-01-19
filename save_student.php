<?php
include "db.php";

$name = $_POST['name'];
$roll = $_POST['roll'];
$class = $_POST['class'];
$marks = $_POST['marks'];

$result = ($marks >= 40) ? "Pass" : "Fail";

mysqli_query($conn,
 "INSERT INTO students (name, roll_no, class, marks, reasult)
  VALUES ('$name','$roll','$class','$marks','$reasult')"
);

header("Location: search.php");
exit;