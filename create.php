<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->

<?php
session_start();
if (!isset($_SESSION['is_valid_admin']) || !$_SESSION['is_valid_admin']) {
    header('Location: login_page.php?');
    exit();
}

require_once('database.php');

$queryBread = 'SELECT * FROM breadcategories ORDER BY breadCategoryID';
$statement = $db -> prepare($queryBread);
$statement -> execute();
$categories = $statement -> fetchAll();
$statement -> closeCursor();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Create</title>
        <link rel="stylesheet" href="main.css">
        <?php include('header.php'); ?>  
        <?php include('footer.php'); ?> 

       
    </head>
    <body>
    <main>
        <h4>
        <style>
        h4{position: absolute;
        top: 200px;
        }
        </style>
        <div id="error"></div>

        <form action="add_bread.php" method="post" id="add_bread">

            <label>Category:</label>
            <select name = "category_id">
               <?php foreach ($categories as $category) : ?>
                <option value="<?php
                        echo $category['breadCategoryID']; ?>">
                    <?php echo $category['breadCategoryName']; ?>

                    </option>
                    <?php endforeach; ?>    
            </select>
            <br>
            <!-- required: makes sure that it is not blank
                placeholder is too add text into input area
               -->
            <label>Bread Code:</label>
            <input type="text" id = "breadCode" name="breadCode" placeholder="Between 4-6 characters" required><br>
            <span id="breadCodeError" class="error"></span><br><br>

            
            <label>Bread Name:</label>
            <input type="text" id = "breadName" name="breadName" placeholder="Between 10-100 characters" required><br>
            <span id="breadNameError" class="error"></span><br><br>

            
            <label>Description:</label>
            <input type="text" id = "description" name="description" placeholder="Between 10-225 characters" required><br>
            <span id="descriptionError" class="error"></span><br><br>


            <label>Bread Price:</label>
            <input type="text" id = "price" name="price" placeholder="Between 1-100,000 dollars" required><br>
            <span id="priceError" class="error"></span><br><br>

            
            <label>&nbsp;</label>
            
            <input type="submit" value="Add Product">
            <input type = "reset" id = "reset_button" value = "Clear Form" /><br>

            </form>
            <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" 
            integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
            <script defer src="create.js"></script>

            </h4>
        </main>
    </body>
 </html>