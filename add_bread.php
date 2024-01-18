<!-- 
  Ali Shahsamand
  11/17/2023
  IT202-003
  Unit 9 Assignment
  as483@njit.edu
                -->


<?php


print_r($_POST);

$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
$breadCode = filter_input(INPUT_POST, 'breadCode');
$breadName = filter_input(INPUT_POST, 'breadName');
$description = filter_input(INPUT_POST, 'description');
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_FLOAT);

if (
    $category_id == null || $category_id == false ||
    $breadCode == null || $breadName == null ||
    $description == null || $price == null || $price == false
) {
  $error = "Invalid bread data. Check all fields and try again.";
  echo $error;
 } else {
      require_once('database.php');

      $query = 'INSERT INTO bread (breadCategoryID, breadCode, breadName, description, price, dateAdded)
                            VALUES 
                            (:category_id, :breadCode, :breadName, :description, :price, NOW())';


$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);  
$statement->bindValue(':breadCode', $breadCode);
$statement->bindValue(':breadName', $breadName);
$statement->bindValue(':description', $description);
$statement->bindValue(':price', $price);
$statement->execute();
$statement->closeCursor();
header('Location:bread.php'); // remember to put this in other areas to go back to bread
    exit();
 }

?>