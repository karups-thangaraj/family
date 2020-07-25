<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Family Table </title>
    <link rel="stylesheet" href="css/familystyles.css">
</head>
<body>

<?php

    include './database/config/config.php';
    $table = "familydb.members";
    try 
    { 
        $db = new PDO("mysql:host=$host",$user,$password,$options);
    } 
    catch(PDOException $ex) 
    { 
        die("Failed to connect to the database: " . $ex->getMessage()); 
    } 

    try {
        echo "<h2>Family Members</h2>";
?>

<p>
    <table>
        <tr>
            <th> Name </th>
            <th> Gender </th>
            <th> DoB </th>
        </tr>
        
        <?php 
           
            foreach($db->query("SELECT mem_name, mem_gender, mem_dob FROM $table") as $row) {  ?>
            
            <tr>
                <td> <?php echo  $row['mem_name']  ?> </td>
                <td> <?php echo  $row['mem_gender']  ?> </td>
                <td> <?php echo $row['mem_dob']  ?> </td>
            </tr>
        <?php } ?>

    </table>
        
<?php 

    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }

?>
</p>
</body>
</html>