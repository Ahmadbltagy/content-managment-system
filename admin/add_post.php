<?php

if(isset($_POST['create_post'])){
  $post = [
    'post_title' => $_POST['title'],
    'post_author' => $_POST['author'],
    'post_category_id' => (int)$_POST['category_id'],
    'post_status' => $_POST['status'],

    'post_image' => $_FILES['image']['name'],
    'post_image_temp' => $_FILES['image']['tmp_name'],

    'post_tags' => $_POST['tags'],
    'post_content'=> $_POST['content'],
    'post_date' => date('y-m-d'),
    'post_comment_count' => 4

  ];

  //Built-in method to upload file
  move_uploaded_file($post['post_image_temp'], "./images/{$post['post_image']}");
  Post::addPost($post);
}

?>

<form action="" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Post Title</label>
    <input id="title" type="text" class="form-control" name="title" required>
  </div>


  <div class="form-group">

    <select name="category_id" id="category_id" class="">
    <option selected>Categories</option>
      <?php
        $result= Category::findAllCategories();
          while($r = $result->fetch_assoc()){
            echo "<option value={$r['cat_id']}>{$r['cat_title']}</option>";
        }?>
    </select>
  
  </div>
  
  <div class="form-group">
    <label for="author">Post Author</label>
    <input id="author" type="text" class="form-control" name="author" required>
  </div>
  
  <div class="form-group">
    <label for="status">Post Status</label>
    <input id="status" type="text" class="form-control" name="status" required>
  </div>

  <div class="form-group">
    <label for="image">Post Image</label>
    <input id="image" type="file" name="image" required>
  </div>

  <div class="form-group">
    <label for="tags">Post Tags</label>
    <input id="tags" type="text" class="form-control" name="tags" required>
  </div>

  <div class="form-group">
    <label for="content">Post Content</label>
    <textarea name="content" id="content" cols="30" rows="10" class="form-control" required></textarea>
  </div>

  <div class="form-group">
    <input type="submit" class="btn btn-primary d-block" name="create_post" value="Publish post">
  </div>

</form>