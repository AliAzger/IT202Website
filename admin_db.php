<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->

<?php

require_once('database.php'); 

function get_user_details($email) {
    $db = getDB(); 
    $query = 'SELECT * FROM breadManagers WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user_details = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $user_details;
}


?>
