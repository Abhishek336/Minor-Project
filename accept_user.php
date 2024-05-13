<?php
include './dbconnect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['userId'])) {
        $userId = $_POST['userId'];

        // Fetch user details from signuprequest table based on userId
        $query = "SELECT * FROM signuprequest WHERE id = $userId";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);

        if ($row) {
            // Add the user to the alumni table
            $insertQuery = "INSERT INTO alumnilogin (id, name, email, department, batch,password ) VALUES (NULL, ?, ?, ?, ?, ?)";
            $stmt = mysqli_prepare($con, $insertQuery);
            mysqli_stmt_bind_param($stmt, 'sssss', $row['name'], $row['email'], $row['department'], $row['batch'],  $row['password']);
            $success = mysqli_stmt_execute($stmt);

            if ($success) {
                // Delete the row from signuprequest table
                $deleteQuery = "DELETE FROM signuprequest WHERE id = $userId";
                $deleteResult = mysqli_query($con, $deleteQuery);

                if ($deleteResult) {
                    echo "User added to alumni table and removed from signuprequest table successfully.";
                } else {
                    echo "Error deleting row from signuprequest table: " . mysqli_error($con);
                }
            } else {
                echo "Error adding user to alumni table: " . mysqli_error($con);
            }
        } else {
            echo "User not found in signuprequest table.";
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}
?>
