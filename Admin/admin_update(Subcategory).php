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
   <form action="" method="post" enctype="multipart/form-data">
      <h3>update subcategory</h3>
      <input type="text" placeholder="enter subcategory name" name="subcategory_name" value="" class="box">

      <input type="text" placeholder="enter category id" name="category_id" value="" class="box">

      <input type="submit" class="btn" name="update_subcategory" value="update subcategory">
      <a href="admin_page(Subcategory).php" class="btn">go back!</a>
  </form>
</div>

</div>

</body>
</html>