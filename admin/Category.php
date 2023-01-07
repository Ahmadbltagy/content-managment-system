<?php

class Category {
  static function insertCategory(){
    global $mysqli;
  
    if(isset($_POST['submitCat'])){
      $cat_title = $_POST['cat_title'];
      if($cat_title){
      $mysqli->query("INSERT INTO categories(cat_title) VALUE('{$cat_title}')");
      header("Location: categories.php");
      }else{
        echo "<p style='font-size: 2rem; color:red;'>You should type a category name </p>";
        // header("Location: categories.php");
      
      }
    }
  }

  static function deleteCategory(){
    global $mysqli;
  
    if(isset($_GET['delete'])){
      $selectedItemId = $_GET['delete']; 
      $mysqli->query("DELETE FROM categories WHERE cat_id = {$selectedItemId}");
      header("Location: categories.php");
    }
  }

  static function editCategory(){
    global $mysqli;
    if(isset($_POST['updateCat'])){
      $editId = $_GET['edit'];
      $newCatTitle = $_POST['new_cat_title'];
      $mysqli->query("UPDATE categories SET cat_title ='{$newCatTitle}' WHERE cat_id = {$editId}");
      header("Location: categories.php");
    }
  }
    
  


  static function getEditCatTitle(){
    global $mysqli;
  
    if(isset($_GET['edit'])){
      $editId = $_GET['edit'];
      $result = $mysqli->query("SELECT * FROM categories WHERE cat_id = $editId");
      global $cat_title; 
      $cat_title =  $result->fetch_assoc()['cat_title']; 
      return 1;
    }
  
  }
  
  static function findAllCategories(){
    global $mysqli;
    return $mysqli->query("SELECT * FROM categories");
  
  }
  
  static function showACategory($id){
    global $mysqli;
    return $mysqli->query("SELECT * FROM categories WHERE cat_id=$id");
  }

}





