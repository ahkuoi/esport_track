<?php

$servername = "localhost"; 
$username = "root";   
$password = "";    
$dbname = "esport_track";      


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT ID, Ingame_Name, Real_Name,Team_Name,achievement,img,Lane  FROM player_ranking_wr";
$result = $conn->query($sql);

if ($result === false) {
 
    die("Error executing query: " . $conn->error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="player_ranking.css"> 
    <title>Esport Players</title>
   
</head>
<body>
    <h1>Esport Players</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ingame_Name</th>
                <th>Real Name</th>
                <th></th>
                <th>Team</th> 
                <th>Achievement</th>
                <th>Lane</th>
               
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["ID"] . "</td>";
                    echo "<td>" . $row["Ingame_Name"] . "</td>";
                    echo "<td>" . $row["Real_Name"] . "</td>";
                    echo "<td><img src='iAG.png'> " . $row["img"] . "</td>";
                    echo "<td>" . $row["Team_Name"] . "</td>";
                    echo "<td>" . $row["achievement"] . "</td>";
                    echo "<td>" . $row["Lane"] . "</td>";
                    echo "</tr>";
                    echo "<!-- Debug: Image Path: " . $row["img"] . " -->";
                }
            } else {
                echo "<tr><td colspan='6'>No players found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>
