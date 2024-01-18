<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->
<?php
session_start();
?>
<html>
    <head>
    <title>Ali's BAKERY</title><!--text on bakery-->
    <link rel="stylesheet" href="main.css"/>
     
    <?php include('header.php'); ?><!--header-->
</head>
    <img class = "img1" src = "bakery1.jpg" />
    <img class = "img2" src = "bakery2.jpg" />
    <img class = "img3" src = "bakery3.jpg" />
    <img class = "img4" src = "bakery4.jpg" />

    <style>
       .img1{position: absolute;
            top:220px;
            right:420;
            width:20%;}

       .img2{position: absolute;
            top:470px;
            right:420;
            width:20%;}

       .img3{position: absolute;
            top:470px;
            right:70;
            width:20%;}

       .img4{position: absolute;
            top:220px;
            right:70;
            width:20%;}

       .p1{position: absolute;
          top:500ox;
     }
    </style>
        <body>


        <main>

        <h2 style = "color: #daebe8; background-color: #87bdd8;">Ali's BAKERY</header>

        <p id="p1" > Originally founded in 2023.<br>
            I have had a passion for baking ever <br>
            since I was young watching my parents. <br>
            I was thinking about my favorite baked <br>
            goods and croissants and bagels always <br>
            come to mind. This has always been my <br>
            passion, so help me live my dream. <br>
            -123 Main Street, Prospect Park, NJ 
        </p>
        </main>

    </body>
    <?php include('footer.php'); ?>

</html>
