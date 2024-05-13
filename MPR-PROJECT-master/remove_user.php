<?php
include './dbconnect.php'; // Include your database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['userId'])) {
        $userId = $_POST['userId'];

        // Perform the deletion from the signuprequest table
        $deleteQuery = "DELETE FROM signuprequest WHERE id = $userId";
        $deleteResult = mysqli_query($con, $deleteQuery);

        if ($deleteResult) {
            echo "User removed from signuprequest table successfully.";
        } else {
            echo "Error deleting user from signuprequest table: " . mysqli_error($con);
        }
    } else {
        echo "Invalid request.";
    }
} else {
    echo "Invalid request method.";
}
?>
