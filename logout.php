<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->
                <?php
session_start();

$_SESSION = [];
session_destroy();

$login_message = 'You have been logged out.';
header('Location: home_page.php');
