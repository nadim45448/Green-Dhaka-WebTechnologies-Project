<?php
    session_start();
    if(!isset($_SESSION['valid'])){
        header('location: login.php');
    }
        $conn = mysqli_connect('localhost','root','','greendhaka') or die('connection failed');

        if(isset($_POST['order_btn'])){

           $name = $_POST['name'];
           $number = $_POST['number'];
           $email = $_POST['email'];
           $method = $_POST['method'];
           $flat = $_POST['flat'];
           $street = $_POST['street'];
           $city = $_POST['city'];
           $state = $_POST['state'];
           $country = $_POST['country'];
           $pin_code = $_POST['pin_code'];

           $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
           $price_total = 0;
           if(mysqli_num_rows($cart_query) > 0){
              while($product_item = mysqli_fetch_assoc($cart_query)){
                 $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
                 $product_price = number_format($product_item['price'] * $product_item['quantity']);
                 $price_total += $product_price;
              };
           };

           $total_product = implode(', ',$product_name);
           $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, flat, street, city, state, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$state','$country','$pin_code','$total_product','$price_total')") or die('query failed');

           if($cart_query && $detail_query){
              echo "
              <div class='order-message-container'>
              <div class='message-container'>
                 <h3>thank you for shopping!</h3>
                 <div class='order-detail'>
                    <span>".$total_product."</span>
                    <span class='total'> total : $".$price_total."/-  </span>
                 </div>
                 <div class='customer-details'>
                    <p> your name : <span>".$name."</span> </p>
                    <p> your number : <span>".$number."</span> </p>
                    <p> your email : <span>".$email."</span> </p>
                    <p> your address : <span>".$flat.", ".$street.", ".$city.", ".$state.", ".$country." - ".$pin_code."</span> </p>
                    <p> your payment mode : <span>".$method."</span> </p>
                    <p></p>
                 </div>
                    <a href='cusEshop.php' class='btn'>continue shopping</a>
                 </div>
              </div>
              ";
           }

        }

?>


        <head>
          <link rel="stylesheet" href="../Asset/shop.css">
        </head>
        <body>

        <?php include 'header.php'; ?>

        <div class="container">

        <section class="checkout-form">

           <h1 class="heading">complete your order</h1>

           <form action="" method="post">

           <div class="display-order">
              <?php
                $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
                $grand_total = 0;

                if (mysqli_num_rows($select_cart) > 0) {
                    while ($fetch_cart = mysqli_fetch_assoc($select_cart)) {
                        $total_price = floatval($fetch_cart['price']) * floatval($fetch_cart['quantity']);
                        $grand_total += $total_price;
                        ?>
                        <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
                        <?php
                    }
                }

                // Format the grand total with two decimal places
                $grand_total_formatted = number_format($grand_total, 2);
                ?>

                <span class="grand-total"> grand total : <?= $grand_total_formatted; ?> bdt </span>



           </div>

              <div class="flex">
                 <div class="inputBox">
                    <span>your name</span>
                    <input type="text"  name="name" required>
                 </div>
                 <div class="inputBox">
                    <span>your number</span>
                    <input type="number"  name="number" required>
                 </div>
                 <div class="inputBox">
                    <span>your email</span>
                    <input type="email" readonly="readonly" name="email" value="<?= $_SESSION['email'] ?>">
                 </div>
                 <div class="inputBox">
                    <span>payment method</span>
                    <select name="method">
                       <option value="Cash On Delivery" selected>Select Payment Method</option>
                       <option value="Credit or Debit card">Credit or Debit card</option>
                       <option value="bKash">bKash</option>
                       <option value="Nagad">Nagad</option>
                    </select>
                 </div>
                 <div class="inputBox">
                    <span>Address line 1</span>
                    <input type="text"  name="flat" required>
                 </div>
                 <div class="inputBox">
                    <span>Address line 2</span>
                    <input type="text"  name="street" required>
                 </div>
                 <div class="inputBox">
                    <span>city</span>
                    <input type="text"  name="city" required>
                 </div>
                 <div class="inputBox">
                    <span>state</span>
                    <input type="text"  name="state" required>
                 </div>
                 <div class="inputBox">
                    <span>country</span>
                    <input type="text"  name="country" required>
                 </div>
                 <div class="inputBox">
                    <span>pin code</span>
                    <input type="text"  name="pin_code" required>
                 </div>
              </div>
              <input type="submit" value="order now" name="order_btn" class="btn">
           </form>

        </section>

        </div>
        <script src="../Asset/shop.js"></script>
   
        </body>
        </html>