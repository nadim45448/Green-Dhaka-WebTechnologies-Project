<?php

$conn = mysqli_connect('localhost','root','','greendhaka') or die('connection failed');
if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = '../Asset/Shop/'.$p_image;
   $id=$_POST['pid'];
   $insert_query = mysqli_query($conn, "INSERT INTO `products`(id,name, price, image) VALUES('$id','$p_name', '$p_price', '$p_image')") or die('query failed');

   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      header('location:adminEshop.php');
      $message[] = 'product add succesfully';

   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:adminEshop.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:adminEshop.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = '../Asset/Shop/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:adminEshop.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:adminEshop.php');
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
                        <td align="right"> <br>
                             <a href="adminDashboard.php">Dashboard</a>
                             <a href="login.php"> Logout <a>
                        </td>
                    </tr>
                
                </table>
                   
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center" height ="8%">
                  

                </td>
                
            </tr>
            <tr>
            <td>
        
            </td>
                <td align ="center"> 
               
                


                <div class="container">

                <section>
               <h1 style="color:SeaGreen;"> E-Shop </h1><br>
                <a href="adminOrderList.php"> <h3> Order List</h3></a><br><br><br>
                <?php

                if(isset($message)){
                   foreach($message as $message){
                      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
                   };
                };

                ?>
                <form action="" method="post" class="add-product-form" enctype="multipart/form-data">
                   <h2>add a new product</h2>
                   <input type="number" name="pid" placeholder="Product ID" class="box" required>
                   <input type="text" name="p_name" placeholder="Product name" class="box" required>
                   <input type="number" name="p_price" min="0" placeholder="Product price" class="box" required>
                   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>
                   <input type="submit" value="Add the product" name="add_product" class="btn">
                </form>

                </section>

                <section class="display-product-table">

                   <table>

                      <thead>
                         <th>product image</th>
                         <th>product name</th>
                         <th>product price</th>
                         <th>action</th>
                      </thead>

                      <tbody>
                         <?php
         
                            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
                            if(mysqli_num_rows($select_products) > 0){
                               while($row = mysqli_fetch_assoc($select_products)){
                         ?>

                         <tr>
                            <td><img src="../Asset/Shop/<?php echo $row['image']; ?>" height="100" alt=""></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?> bdt</td>
                            <td>
                               <a href="adminEshop.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
                               <a href="adminEshop.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
                            </td>
                         </tr>

                         <?php
                            };    
                            }else{
                               echo "<div class='empty'>no product added</div>";
                            };
                         ?>
                      </tbody>
                   </table>

                </section>

                <section class="edit-form-container">

                   <?php
   
                   if(isset($_GET['edit'])){
                      $edit_id = $_GET['edit'];
                      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
                      if(mysqli_num_rows($edit_query) > 0){
                         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
                   ?>

                   <form action="" method="post" enctype="multipart/form-data">
                      <img src="../Asset/Shop/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
                      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
                      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
                      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
                      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
                      <input type="submit" value="update the product" name="update_product" class="btn">
                      <a href="adminEshop.php"> <div id="close-edit" class="option-btn"> Cancel</div></a>
                   </form>

                   <?php
                            };
                         };
                         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
                      };
                   ?>

                    </section>

                    </div>

                    <script src="../Asset/shop.js"></script>

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
  