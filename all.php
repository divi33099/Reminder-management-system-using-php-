<?php
    include "auth/conn.php";
    $sql = "SELECT * FROM reminders";
    $jsObject = array();
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
           array_push($jsObject, $row);
        }
    }
    echo json_encode($jsObject);

?>