<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="Admin.css">
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">   
   <form action="" method="post" enctype="multipart/form-data"><!-----specifies how form data should be encoded----->
      <h3 class="title">update the order</h3>
      <input type="int" class="box" name="order_id" value="">
      <input type="int" class="box" name="user_id" value="">
      <input type="double" class="box" name="order_amount" value="">
      <select type="text" class="box" name="order_status">
            <option></option>
            <option value="Pending">Pending</option>
            <option value="Paid">Paid</option>
            <option value="Delivered">Delivered</option>
       </select><br>
      <select type="text" class="box" name="payment_type">
            <option></option>
            <option value="M-Pesa">M-Pesa</option>
            <option value="Bank Account">Bank Account</option>
            <option value="Cash on Delivery">Cash on Delivery</option>
      </select><br>
      <input type="submit" value="update order" name="update_order" class="btn">
      <a href="admin_page(Orders).php" class="btn">go back!</a>
   </form>

</div>

</div>

</body>
</html>