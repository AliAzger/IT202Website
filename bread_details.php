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

$bread_id = filter_input(INPUT_GET, 'bread_id', FILTER_VALIDATE_INT);

if ($bread_id == NULL || $bread_id == FALSE) {
    header('Location: bread.php'); 
}

$queryBreadDetails = 'SELECT * FROM bread WHERE breadID = :bread_id';
$statement = $db->prepare($queryBreadDetails);
$statement->bindValue(':bread_id', $bread_id);
$statement->execute();
$breadDetails = $statement->fetch();
$statement->closeCursor();

if (!$breadDetails) {
    echo "No bread records found.";
    exit();
}
?>

<!DOCTYPE html>
<head>
    <title>Bread Details</title>
    <link rel = "stylesheet" href = "style.css" >

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(() => {
        $("img").hover(
            function () {
                const src = $(this).attr('src');
                const newSrc = src.replace(".jpg", "-modified.jpg");
                $(this).attr('src', newSrc);
            },
            function () {
                const src = $(this).attr('src');
                const newSrc = src.replace("-modified.jpg", ".jpg");
                $(this).attr('src', newSrc);
        }
    );
});
</script>

</head>
<style>
    main{position: absolute;
        top: 150px;
        font-size:30px;
        }

    img{
        width:300px;}
        </style>
<body>
    <main>
    <p>Bread Code: <?php echo $breadDetails['breadCode']; ?></p>
    <p>Bread Name: <?php echo $breadDetails['breadName']; ?></p>
    <p>Description: <?php echo $breadDetails['description']; ?></p>
    <p>Price: <?php echo $breadDetails['price']; ?></p>
    <img src="<?php echo $breadDetails['breadID']; ?>.jpg" alt="Bread Image">
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


