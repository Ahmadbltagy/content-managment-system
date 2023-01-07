<?php
if(isset($_GET['delete'])){
  Post::deletePost((int)$_GET['delete']);
}
?>
<table class="table table-borderd table-hover">

<thead>
  <tr>
    <th>Id</th>
    <th>Author</th>
    <th>Title</th>
    <th>Category</th>
    <th>Post status</th>
    <th>Image</th>
    <th>Tages</th>
    <th>Comment</th>
    <th>Date</th>
    <th>Delete</th>
    <th>Edit</th>
  </tr>
</thead>
<tbody>
  <td>
  <?php
  
  if($result = Post::showAllPosts()){
    while($row = $result->fetch_assoc()){
      $cat_title = Category::showACategory((int)$row['post_category_id'])->fetch_assoc()['cat_title'];
      echo <<< tr
      <tr>
        <td>{$row['post_id']}</td>
        <td>{$row['post_author']} </td>
        <td>{$row['post_title']} </td>
        <td>{$cat_title}</td>
        <td>{$row['post_status']}</td>
        <td><img src='./images/{$row['post_image']}' height='100rem'> </td>
        <td>{$row['post_tags']} </td>
        <td>{$row['post_comment_count']} </td>
        <td>{$row['post_date']} </td>
        <td><a href="posts.php?delete={$row['post_id']}">Delete<a> </td>
        <td><a href="posts.php?source=edit_post&edit={$row['post_id']}"> Edit <a> </td>

      </tr>
      tr;
    }
  }
?>
</td>
</tbody>

</table>