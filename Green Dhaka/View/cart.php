<?php
session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
$conn = mysqli_connect('localhost','root','','greendhaka') or die('connection failed');

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
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

                    <section class="shopping-cart">

                       <h1 class="heading">shopping cart</h1>
                       

                       <table>

                          <thead>
                             <th>image</th>
                             <th>name</th>
                             <th>price</th>
                             <th>quantity</th>
                             <th>total price</th>
                             <th>action</th>
                          </thead>

                          <tbody>

                             <?php 
         
                             $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                            $grand_total = 0;

                            if (mysqli_num_rows($select_cart) > 0) {
                                while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                                    $sub_total = $fetch_cart['price'] * $fetch_cart['quantity'];
                                    $grand_total += $sub_total;
                            ?>
                                    <tr>
                                        <td><img src="../Asset/Shop/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
                                        <td><?php echo $fetch_cart['name']; ?></td>
                                        <td><?php echo $fetch_cart['price']; ?> bdt</td>
                                        <td>
                                            <form action="" method="post">
                                                <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_cart['id']; ?>">
                                                <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_cart['quantity']; ?>">
                                                <input type="submit" value="update" name="update_update_btn">
                                            </form>
                                        </td>
                                        <td><?php echo $sub_total; ?> bdt</td>
                                        <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i> remove</a></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                            <tr class="table-bottom">
                                <td><a href="cusEshop.php" class="option-btn" style="margin-top: 0;">continue shopping</a></td>
                                <td colspan="3">grand total</td>
                                <td><?php echo $grand_total; ?> bdt</td>
                                <td><a href="cart.php?delete_all" onclick="return confirm('are you sure you want to delete all?');" class="delete-btn"> <i class="fas fa-trash"></i> delete all </a></td>
                            </tr>

                          </tbody>

                       </table>

                       <div class="checkout-btn">
                          <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
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