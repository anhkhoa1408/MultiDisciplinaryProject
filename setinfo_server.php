<?php
    session_start();
    include 'connect-database.php';
    $temp = $_POST['temp'];
    $humid = $_POST['humid'];
    $sql = "INSERT INTO `minimumparam` (`Temperature`, `Humidity`) VALUES ('$temp', '$humid')";
    $result = $conn->query($sql) or die($conn->error);
    $message = 0;
    if($result) {
        $message = 1;
    }
    echo $message;
?>

<!-- 
CREATE TABLE `minimumparam` (
  `ID` int NOT NULL,
  `Temperature` int NOT NULL,
  `Humidity` int NOT NULL,
  `Created` timestamp NOT NULL
) -->