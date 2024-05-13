<?php
    include './navbaradmin.php';
    include './dbconnect.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: adminlogin.php");  
    }
    $eventname=$organizer=$description=$fromdate=$todate=$file=$file_loc=$final_file=$msg="";
    $sql="SELECT * FROM signuprequest";
    $result=mysqli_query($con,$sql);
    $count=$result->num_rows;
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>
<div class="adminmain">
    
        <div class="head">
SIGNUP REQUESTS
        </div>
        <div class="message">
            <?php
                if($msg!=""){
                    echo $msg;
                }
            ?>
        </div><div>
        <table class="tablecontainer" id="table" border=black width=90% height=60%>
            <div class="tableheader">
                <tr>
                <th>ID</th>
                <th> NAME</th>
                <th>EMAIL</th>
                <th>DEPARTMENT</th>
                <th>BATCH</th>
                <th>ADD</th>
                <th>REMOVE</th>
                </tr>
            </div>            
            <?php
               while ($count > 0) {
                $row = mysqli_fetch_array($result);
                $userId = $row["id"];
                echo "<tr>
                        <td>".$row["id"]."</td>
                        <td>".$row["name"]."</td>
                        <td>".$row["email"]."</td>
                        <td>".$row["department"]."</td>
                        <td>".$row["batch"]."</td>
                        <td><button type='button' class='open-button add-button' data-userid='$userId'>ADD</button></td>
                        <td><button type='button' class='open-button remove-button' data-userid='$userId'>Remove</button></td>
                      </tr>";
                $count = $count - 1;
            }
                  
            ?>
        </table>  
        <br><br>      
    </div> 
    </div>
    </div>

 
</body>
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Your PHP and HTML code here -->

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Your PHP and HTML code here -->

<script>
$(document).ready(function() {
    $('.add-button').on('click', function() {
        var userId = $(this).data('userid');

        // Store a reference to $(this)
        var button = $(this);

        // Perform AJAX request to accept_user.php
        $.post('accept_user.php', { userId: userId }, function(response) {
            console.log(response);

            // If the addition is successful, remove the corresponding row from the table
            if (response === "User added to alumni table and removed from signuprequest table successfully.") {
                button.closest('tr').remove();
            } else {
                // Handle error or provide feedback to the user
                console.log("Error:", response);
            }
        });
    });
});
</script>
<script>
$(document).ready(function() {
    $('.remove-button').on('click', function() {
        var userId = $(this).data('userid');

        // Store a reference to $(this)
        var button = $(this);

        // Perform AJAX request to remove_user.php
        $.post('remove_user.php', { userId: userId }, function(response) {
            console.log(response);

            // If the removal is successful, remove the corresponding row from the table
            if (response === "User removed from signuprequest table successfully.") {
                button.closest('tr').remove();
            } else {
                // Handle error or provide feedback to the user
                console.log("Error:", response);
            }
        });
    });
});
</script>

