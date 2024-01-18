<!-- 
  Ali Shahsamand
  12/1/2023
  IT202-003
  Unit 11 Assignment
  as483@njit.edu
                -->

<?php
session_start();

require_once('database.php');

$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);

if ($category_id == NULL || $category_id == FALSE) {
    $category_id = 1;
}

$queryCategory = 'SELECT * FROM breadcategories WHERE breadCategoryID = :category_id';
$statement1 = $db->prepare($queryCategory);
$statement1->bindValue(':category_id', $category_id);
$statement1->execute();
$category = $statement1->fetch();
$category_name = $category['breadCategoryName'];
$statement1->closeCursor();

//Get categories
$queryAllbreadCategories = 'SELECT * FROM breadcategories ORDER BY breadCategoryID';
$statement2 = $db->prepare($queryAllbreadCategories);
$statement2->execute();
$categories = $statement2->fetchAll();
$statement2->closeCursor();

// Get the bread
$queryBread = 'SELECT * FROM bread WHERE breadCategoryID = :category_id ORDER BY breadID';
$statement3 = $db->prepare($queryBread);
$statement3->bindValue(':category_id', $category_id);
$statement3->execute();
$bread = $statement3->fetchAll();
$statement3->closeCursor();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bread</title>
    <link rel ="stylesheet" href = main.css />

    <script>                                                        //delete alert
        function confirmDelete() {
            return confirm("Are you sure you want to delete this item.");
        }
    </script>

</head>

<body>
    <main>
        <aside>
            <nav>
                <ul>
                <style>
        ul{position: absolute;
        top:150;
        }
        </style>
                    <?php foreach ($categories as $breadCategory) : ?>
                        <li>
                            <a href="?category_id=<?php echo $breadCategory['breadCategoryID']; ?>">
                                <?php echo $breadCategory['breadCategoryName']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </aside>
        <section>
            <table>
            <style>
        table{position: absolute;
        top:200px;
        }
        </style>
                <tr>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
                <?php foreach ($bread as $breads) : ?>
                    <tr>
                        <td><a href="bread_details.php?bread_id=<?php echo $breads['breadID']; ?>">
                            <?php echo $breads['breadCode']; ?></td>
                        <td><?php echo $breads['breadName']; ?></td>
                        <td><?php echo $breads['description']; ?></td>
                        <td><?php echo $breads['price']; ?></td>
                    <td>
                    <form action = "delete_bread.php" method = "post">
                        <input type = "hidden" name = "product_id"
                            value = "<?php echo $breads['breadID']; ?>" />
                        <input type = "hidden" name = "category_id" 
                            value = "<?php echo $breads['breadCategoryID']; ?>" />
                        <input type = "submit" value = "Delete" onclick = "return confirmDelete()"/>
                        <form action="add_create.php" method="post" id="add_create">

                    </form>
                    
                    </td>
                    </tr>
                    
                <?php endforeach; ?>
            </table>
        </section>
    </main>
</body>
<head>
      <link rel = "stylesheet" href = "style.css" />

       <?php include('header.php'); ?>
    </head>
            

    <body>
        <?php include('footer.php'); ?>
    </body> 
</html>
