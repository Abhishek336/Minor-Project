<?php
    include './dbconnect.php';
    include './scrolltotop.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALUMNI PORTAL</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/stylesheetalumni.css" />
</head>
<body>



    
    <div class="header">
            <div class="logo">
                <div style="float: left;padding-top: 1%;"><a href="index.php"><img src="./assets/images/sistlogo.jpg" alt="logo"   ></a> </div>
                <div style="float: left;padding-left: 2%; padding-right: 2%;padding-top: 1%;"><p style="color: white; font-size:30px;" ><b> Maharaja Surajmal Institute</b> 
                </p> <p style="color: white; padding-top: 2% ; ">Affiliated to GGSIP University & NAAC 'A' grade accredited.<br>
Rated as Category 'A+' by SFRC & 'A' by JAC Govt. of NCT of Delhi<br>
Approved by BCI & AICTE And Recognised U/s 2(f) of UGC Act</p></div>  
                <div style="float: left;
  padding-top: 3%;
  border-left: 3px double whitesmoke;
  height: 170px;
  
  color: white;
  font-size: 200%;
  font-family: Arial;
  font: bolder;;"><b> &nbsp&nbsp&nbsp ALUMNI PORTAL</b></div>           
            </div>
            



        </div>
    <div class="nav-bar">
        <div class="list-items">
            <ul><b>
                <li><a href="alumnihome.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT US</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="events.php">EVENTS</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">ALUMNI ASSIST&nbsp&nbsp&nbsp&nbsp&nbsp</a></b>
                    <div class="dropdown-content">
                        <a href="sendquery.php">Send Query</a>
                        <a href="postajob.php">Post a Job</a>
                        <a href="shareachievements.php">Share Achievements</a>
                        <a href="beamentor.php">Be a Mentor</a>
                    </div>
                </li><b>
                <li><a href="logout.php">LOG OUT</a></li></b>
            </ul>
        </div>
    </div>
</body>
</html>