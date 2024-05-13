<?php
    include './navigationbar.php';
    session_start();
    if(!(isset($_SESSION['logged_in']))){
        header("Location: alumnilogin.php");  
    }
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
    <div class="alumnimain">
        <div class="head">
            <b> GALLERY </b>
        </div>
        <div class="subheading">
            CAMPUS IMAGES
        </div>
        <div class="gallery">
            <img src="./assets/images/1.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/2.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/3.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/4.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/5.jpeg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/6.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/7.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/8.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/9.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/10.jpg" alt="img" >
        </div>
        <div class="gallery">
            <img src="./assets/images/11.jpg" alt="img" >
        </div> <div class="gallery">
            <img src="./assets/images/12.jpg" alt="img" >
        </div> <div class="gallery">
            <img src="./assets/images/13.jpg" alt="img" >
        </div> <div class="gallery">
            <img src="./assets/images/14.jpg" alt="img" >
        </div> <div class="gallery">
            <img src="./assets/images/15.jpg" alt="img" >
        </div> <div class="gallery">
            <img src="./assets/images/16.jpg" alt="img" >
        </div>
    </div>

</body>
</html>