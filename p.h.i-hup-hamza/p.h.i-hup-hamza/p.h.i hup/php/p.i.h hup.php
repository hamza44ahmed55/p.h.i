<?php
$websiteUrl = "http://www.p.h.i_hup.com";

echo "<a href=\"$websiteUrl\">P.H.I HUP</a>";
?>
<?php

$servername = "p.h.i hup";
$username = "hamza";
$password = "hamzahamza";
$dbname = "hamzab";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['hamza'];
    $password = $_POST['hamzahamza'];


    $sql = "SELECT * FROM Users WHERE Username='$username' AND Password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        echo "Login successful!";
    } else {
       
        echo "Login failed. Invalid username or password.";
    }
}
$conn->close();
?>
