<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->
                
<?php
session_start();
print_r($_POST);
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
  header('Location: bread.php?');
  exit();
} 
require_once('database.php');

$product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

if($product_id != false && $category_id != false) {
    $query = 'DELETE FROM bread WHERE breadID = :product_id';

    $statement = $db -> prepare($query);
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();
    header('Location: bread.php'); 
    exit();

    
}
