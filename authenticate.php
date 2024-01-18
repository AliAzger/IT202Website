<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->

<?php
require_once('admin_db.php');

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

$user_details = get_user_details($email);

if ($user_details && $password === $user_details['password']) {
    session_start();
    $_SESSION['is_valid_admin'] = true;
    $_SESSION['user_details'] = $user_details;
    header('Location: home_page.php');
    exit();
} else {
    header('Location: login_page.php?error=Wrong login information');
    exit();
}
?>
