<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "superhr";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $pos1 = $_POST['pos1'];
    $pos2 = $_POST['pos2'];

    $sql = "SELECT * FROM users 
    INNER JOIN positions ON users.id = positions.user_id 
    INNER JOIN candidate_followup ON users.id = candidate_followup.user_id 
    WHERE (positions.position_1 = ? OR positions.position_2 =? )";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $pos1, $pos2);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '
            <div class="card-profile">
                <div class="card-header text-white text-end" style=" background: #CB0021;">'
                . $row['status'] .
                '</div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="profile-image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" width="90" height="90" class="rounded-circle">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-12">
                        <h4 class="m-t-0 m-b-0">' . $row['full_name_eng'] . '</h4>
                        <span class="job_post">' . $row['position_1'] . '</span>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="text-decoration-none me-2 userlist" data-id="' . $row['user_id'] . '">view</button>
                        </div>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "0 results";
    }
?>