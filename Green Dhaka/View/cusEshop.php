<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
$conn = mysqli_connect('localhost','root','','greendhaka') or die('connection failed');
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../Asset/shop.css">
</head>
<body>
   <table border="0" width = "100%" height = "100%">
            <tr >
                <td height="5%" width="15%" align="center">
                    <img src="../Images/logo.png" height="100" width="100" alt="Green Dhaka Logo">
                </td>
                <td align="center" height="5%"width="70%">
                    <h1 style="color:SeaGreen;">  </h1> <br>
                    <h1 style="color:SeaGreen;"> Green Dhaka </h1>
                    <h4 style="color:SeaGreen;"> An initiative of Dhaka City Corporation </h4>
                    <p style="color:SeaGreen;"> <b>  </b> </p>
                    
                </td>
                <td >
                <table border="0" align="center">
                    <tr>
                        <td> <img src="../Images/user.png" height="50" width="50" alt="User Logo">
                        </td>
                        <td align="right"> 
                        <a href="cusAccount.php"> <?php echo $_SESSION['email']; ?> <a> <br>
                             <a href="cusDashboard.php"> Dashboard <a>
                             <a href="../Controller/logout.php"> Logout <a>
                        </td>
                    </tr>
                
                </table>
                   
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height ="8%">
                     <a href="cusGardenregistration.php">Garden Registration</a>
                    <a href="cusSolarregistration.php">Solar Panel Request</a>
                    <a href="CusNewsFeed.php">News feed</a>
                    <a href="cusSubsidiarycalculator.php">Subsidiary Calculator</a>
                    <a href="cusEshop.php">E-shop</a>
                    <a href="cusDonation.php">Donation</a>
                    <a href="cusHiringagardener.php">Hire a Gardener</a>
                    <a href="cusExpert.php">Expert opinion</a>
                    <a href="cusHomevisit.php">Schedule a Home Visit</a>
                    <a href="cusSupport.php">Support</a>
                    <a href="cusServiceHistory.php">Service History</a>
                    <a href="cusAboutUS.php">About Us</a>
                    <a href="FAQ.php">FAQ</a>


                </td>
                
            </tr>
            <tr>
            <td>
        
            </td>
                <td align ="center">
                        

                        <div class="container">

                        <section class="products">

                           <h2 style="color:SeaGreen;"">E-Shop</h2><br>
                           <?php include 'header.php'; ?><br>
                           <?php

                        if(isset($message)){
                           foreach($message as $message){
                              echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
                           };
                        };

                        ?>
                          
                           <div class="box-container">

                              <?php
      
                              $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                              if(mysqli_num_rows($select_products) > 0){
                                 while($fetch_product = mysqli_fetch_assoc($select_products)){
                              ?>

                              <form action="" method="post">
                                 <div class="box">
                                    <img src="../Asset/Shop/<?php echo $fetch_product['image']; ?>" alt="">
                                    <h3><?php echo $fetch_product['name']; ?></h3>
                                    <div class="price"><?php echo $fetch_product['price']; ?> bdt</div>
                                    <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
                                    <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
                                    <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
                                    <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                                 </div>
                              </form>

                              <?php
                                 };
                              };
                              ?>

                           </div>

                        </section>

                        </div>

                </td>

                <td>
            </td>
            </tr>
           
            <tr height ="5%" align="center">
                <td>
                </td>
                <td>
                <p style="color:white;background-color:SeaGreen;"> Call now : +88017xxxxxxx Email:greendhaka@gmail.com Address: Kuril,KA,187/0A </p>
                
                </td>
                <td>
                </td>
            </tr>
            

    </table>
<script src="../Asset/shop.js"></script>

</body>
</html>