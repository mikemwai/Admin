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
      <h3>update category</h3>
      <input type="text" placeholder="enter category name" name="category_name" value="" class="box">

      <input type="submit" class="btn" name="update_category" value="update category">
      <a href="admin.php" class="btn">go back!</a>
  </form>
</div>

</div>

</body>
</html>