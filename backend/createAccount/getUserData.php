<?php
    // Check if request is post
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the content of the POST
        $json = file_get_contents('php://input');

        // Decode the JSON string
        $obj = json_decode($json,true);

        //Get the ID from the JSON object
        $id = $obj['id'];

        // Database configuration
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "superhr";
        
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // SQL query to get the user
        $sql = "SELECT * FROM users WHERE id = ?";
        
        // Prepared statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();

        // Get result
        $result = $stmt->get_result();

        // Check if user exists
        if($result->num_rows > 0){
            // Fetch data
            $user = $result->fetch_assoc();
            echo json_encode($user);
        } else {
            echo json_encode(array("message" => "No user found with provided ID"));
        }

        // Close connection
        $conn->close();
    }
?>
