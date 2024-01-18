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

    $firstname = $_GET['firstname'];
    $lastname = $_GET['lastname'];
    $address = $_GET['address'];
    $city = $_GET['city'];
    $state = $_GET['state'];
    $zip = $_GET['zip'];
    $d1 = $_GET['d1'];
    $weight = $_GET['weight'];
    $ordernumber = $_GET['ordernumber'];
    $date = $_GET['date'];
?>     


<html>
    <head>
        <link rel="stylesheet" href="main.css"/>
        <?php include('header.php'); ?><!--header-->
</head>
<main>
<style>
main{  position: absolute;
  top: 150;
  width: 100%;
  height: 50px;
  font-size:25px;}


</style>
<p style = "font-size: 15px;">From: 123 Main Street, Prospect Park, NJ 07421</p>
<p style = "font-size: 15px;">To: </p>

<p style = "font-size: 15px;"><?php echo $firstname; ?>  <?php echo $lastname; ?> </p> <!--<p> is for paragraphs-->

<p style = "font-size: 15px;"> <?php echo $address; ?> </p>

<p style = "font-size: 15px;"><?php echo $city; ?> 
<?php echo $state; ?> 
<?php echo $zip; ?> </p>


<p style = "font-size: 15px;"> Dimensions: <?php echo $d1; ?> </p>
<p style = "font-size: 15px;">Weight: <?php echo $weight; ?> </p>
<p style = "font-size: 15px;">Order Number: <?php echo $ordernumber; ?> </p>
<p style = "font-size: 15px;">Shipping Date: <?php  echo $date; ?> </p>
<p style = "font-size: 15px;">Shipping Company: USPS</p>
<p style = "font-size: 15px;">Shipping Class: Priority Mail</p>
<p style = "font-size: 15px;">Tracking Number: 0 36000 29145 2</p>
<img class = "img5" src = "barcode.jpg" /> 

<style>
.img5{width:9%;}
</style>

<p>

</main>
<body>
        <?php include('footer.php'); ?>
</body>
</html>