<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->
<header>

<h1 style ="word-spacing: 200px;font-size: 50px;color: #daebe8; background-color: #87bdd8;">

<a style = "color: daebe8; text-decoration: none;
"href = "http://localhost/as483/IT-202/unit3assignment/home_page.php"> Home </a>

<a style = "color: daebe8;text-decoration: none;
"href = "http://localhost/as483/IT-202/unit3assignment/shipping_form.html"> Shipping </a> 

<a style = "color: daebe8;text-decoration: none;
"href = "http://localhost/as483/IT-202/unit3assignment/bread.php"> Bread </a>

<a style = "color: daebe8;text-decoration: none;
"href = "http://localhost/as483/IT-202/unit3assignment/create.php"> Create </a>

<?php
    if (isset($_SESSION['is_valid_admin']) && $_SESSION['is_valid_admin']) {
      $user_details = $_SESSION['user_details'];
      echo '<span style="color: #daebe8;font-size:30px;word-spacing:10px;">Welcome ' .
       $user_details['firstName'].' '.
       $user_details['lastName'].
       '('.$user_details['emailAddress'].')</span>';
       
      echo '<a style="color: daebe8;text-decoration: none;" href="logout.php"> Logout </a>';
  } else {
      echo '<a style="color: daebe8;text-decoration: none;" href="login_page.php"> Login </a>';
  }
  ?>
</header>