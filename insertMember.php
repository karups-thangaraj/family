<?php

include './database/config/config.php';

$table = "familydb.members";

$iname = $_POST['fullname'];
$igender = $_POST['gender'];
$idob = $_POST['DoB'];

echo "<h1> Submitted Values </h1>";
echo "Full Name:  ", $iname,"<BR>";
echo "Gender:     ", $igender,"<BR>";
echo "DoB:        ", $idob, "<BR>";

try {
    $db = new PDO("mysql:host=$host",$user,$password,$options);
    //$db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
    print "Connected Successfully <BR>";
    $sql_insert = "INSERT INTO $table (mem_name, mem_gender, mem_dob) VALUES ('$iname', '$igender' , date('$idob') )";
    print "SQL Statement: " . $sql_insert . "<BR>";
    $stmt = $db->prepare($sql_insert);
    $rows = $stmt->execute();
    If ($rows>0){
        echo "Number of rows impacted: ",$rows,"<BR>";
    }else{
        echo "Error Inserting new member <BR>";
    }
} catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }


?>