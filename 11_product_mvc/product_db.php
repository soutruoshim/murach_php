<?php

function get_products_by_category($category_id){
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.categoryID = :category_id
              ORDER BY productID';
    $statement = $db-> prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->excecute();
    $products= $statement->fetchAll();
    $statement->closeCursor();
    return $products;         
}
function get_product($product_id){
    global $db;
    $query = 'SELECT * FROM products
              WHERE products.productID = :product_id';
    $statement = $db-> prepare($query);
    $statement->bindValue(":product_id", $product_id);
    $statement->excecute();
    $products= $statement->fetch();
    $statement->closeCursor();
    return $products;         
}