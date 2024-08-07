<?php

require_once 'connection.php';


function authenticateUser($username, $password, $type, $con) {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $stmt = $con->prepare("SELECT * FROM login_table WHERE Username = ? AND Password = ? AND Type = ?");
    $stmt->bind_param("sss", $username, $password, $type);

    $stmt->execute();
    $result = $stmt->get_result();
    
 
    if ($result->num_rows === 1) {
       
        return true;
    } else {
        
        return false;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $type = $_POST['Type'];

  
    if (authenticateUser($username, $password, $type, $con)) {
        header("Location: admin.php");
    } else {
   
        echo "Invalid credentials. Please try again.";
    }
}
?>