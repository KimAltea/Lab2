<?php
$servername = "192.168.150.213";
$username = "webprogmi211";
$password = "j@zzyAngle30";
$dbname = "webprogmi211";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT id, Fullname, email, website, comment FROM kealtea_myguests";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
             // output data of each row
              while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Name: " . $row["Fullname"]. "  - Email: " . $row["email"]. "  - Website: " . $row["website"]. "  - Comment: " . $row["comment"]."<br>";
              }
            } else {
              echo "0 results";
            }


            $conn->close();
            ?>
