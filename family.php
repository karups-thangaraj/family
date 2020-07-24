<?php
$user = "gokul";
$password = "password";
$database = "familydb";
$table = "members";

try {
  $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
  echo "<h2>Family Members</h2><ol>";
  foreach($db->query("SELECT mem_name, mem_gender, mem_dob FROM $table") as $row) {
    echo "<li>" . $row['mem_dob'] . "</li>";
  }
  echo "</ol>";

  echo "<table>";
  echo   "<tr>";
  echo     "<th> Name </th>";
  echo     "<th> Gender </th>";
  echo     "<th> DoB </th>";
  echo   "</tr>";

  echo   "<tr>";
  foreach($db->query("SELECT mem_name, mem_gender, mem_dob FROM $table") as $row) {
    echo "<td>"  . $row['mem_name'] . "</td>";
    echo "<td>"  . $row['mem_gender'] . "</td>";
    echo "<td>"  . $row['mem_dob'] .  "</td>";
    echo "</tr>";
  }
  echo "</table>";
  
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}