

<?php


// $link = mysqli_connect("localhost", "root", "", "interview");
 
// // Check connection
// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }
// echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);

// echo "<br />";

// // //create db
// // $sql = "CREATE DATABASE interview";
// // if(mysqli_query($link, $sql)){
// //     echo "Database created successfully";
// // } else{
// //     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// // }


require("DatabaseConnector.php");
$dbConnection = (new DatabaseConnector())->getConnection();

// //create db table
// $sql = "CREATE TABLE persons(
//     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
//     first_name VARCHAR(30) NOT NULL,
//     last_name VARCHAR(30) NOT NULL,
//     arrival VARCHAR(30) NOT NULL,
//     hobby VARCHAR(1500) NOT NULL,
//     tech VARCHAR(1500) NOT NULL

// )";
// if($dbConnection->query($sql)===true){
//     echo "Table created successfully.";
// } else{
//     echo("ERROR: Could not able to execute $sql. " . $dbConnection->error);
//     // exit();
// }


?>

