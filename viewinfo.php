<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $servername = "localhost";
    $username = "root"; 
    $password = "";
    $dbname = "reg_db";

    try {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            throw new Exception("Connection failed: " . $conn->connect_error);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
        exit();
    }


    $name = htmlspecialchars($_POST['vname']);
    $email = htmlspecialchars($_POST['vmail']);
    $phone = htmlspecialchars($_POST['vphone']);
    $gender = htmlspecialchars($_POST['vgender']);
    $city = htmlspecialchars($_POST['vcity']);

    $sql = "INSERT INTO users (name, email, phone, gender, city) 
            VALUES ('$name', '$email', '$phone', '$gender', '$city')";

        echo "<p>Received Gender: " . ($gender == 'female'?'Female':'Male') . "</p>";
        echo "<h3>Registration Confirmation</h3>";
        echo "<p>Received name: $name</p>";
        echo "<p>Received email: $email</p>";
        echo "<p>Received Phone: $phone</p>";
        echo "<p>Recevied Gender: " . ($gender == 'female'?'Female':'Male') . "</p>";
        echo "<p>Received city: $city</p>";
    } else {
    
        echo "<h3>Error:</h3> " . $conn->error;
    }
    
    $conn->close();

}else{
    echo "<p>No form data Received</p>";
}


?>