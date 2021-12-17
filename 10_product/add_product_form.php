<?php
   require('database.php');
   $query = 'SELECT * FROM categories ORDER BY categoryID';
   $statement = $db->prepare($query);
   $statement->execute();
   $categories = $statement->fetchAll();
   $statement->closeCursor();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="main.css" />
   <title>Add product</title>
</head>
<body>
   <header><h1>Product Manager</h1></header>
   <main>
      <h1>Add Product</h1>
   <form action="add_product.php" method="POST" id="add_product_form">
       <label>Category:</label>
       <select name="category_id">
          <?php foreach($categories as $category): ?>
            <option value="<?php echo $category['categoryID'];?>">
                 <?php echo $category['categoryName'];?>
            </option>
            <?php endforeach; ?>
       </select><br>
       <label>Code:</label>
       <input type="text" name="code"><br>
       <label>Name:</label>
       <input type="text" name="name"><br>
       <label>Price:</label>
       <input type="text" name="price"><br>
       <label>&nbsp;</label>
       <input type="submit" value="Add Product"><br>
     </form>
      <p><a href="index.php">View Product List</a></p>
  

   </main>
      <footer>
   <p>&copy; <?php echo date("Y"); ?> My Shop, Inc.</p>
 </footer>
</body>
</html>