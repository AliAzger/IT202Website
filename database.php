<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->

<?php
    $local_dsn = 'mysql:host=localhost;port=3306;dbname=bread';
    $local_username = 'mgs_user';
    $local_password = 'pa55word';

    $njit_dsn = 'mysql:host=sql1.njit.edu;port=3306;dbname=as483';
    $njit_username = 'as483';
    $njit_password = 'Azgermysql19!';

    //change the $njit_ stuff to local if you want to switch "local_dsn"
    $dsn = $njit_dsn;
    $username = $njit_username;
    $password = $njit_password;

    try {
        $db = new PDO($dsn, $username, $password);
        echo '<p></p>';
    }   catch(PDOException $exception) {
        $error_message = $exception->getMessage();
        include('database_error.php');
        exit();
    }

    function getDB() {
        $host = 'sql.njit.edu';
        $dbname = 'as483';
        $username = 'as483';
        $password = 'Azgermysql19!';
        try {
            $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            return $db;
        } catch (PDOException $e) {
            exit();
        }
    }
    
?>