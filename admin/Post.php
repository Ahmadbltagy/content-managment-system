<?php 
class Post{
  static function showAllPosts(){
    global $mysqli;
    return $mysqli->query("SELECT * FROM posts");  
  }

  static function showAPost($postId){
    global $mysqli;
    return $mysqli->query("SELECT * FROM posts WHERE post_id=$postId"); 
  }

  static function showAPostByCat($cat_id){
    global $mysqli;
    return $mysqli->query("SELECT * FROM posts WHERE post_category_id = $cat_id");
  }

  static function addPost(array $postData){
    global $mysqli;
    $postData['post_content'] = addslashes($postData['post_content']); 
    $mysqli->query("INSERT INTO posts (post_title, post_author, post_category_id, post_status,post_image, post_tags, post_content, post_date, post_comment_count) VALUES('{$postData['post_title']}', '{$postData['post_author']}', '{$postData['post_category_id']}', '{$postData['post_status']}', '{$postData['post_image']}','{$postData['post_tags']}','{$postData['post_content']}','{$postData['post_date']}','{$postData['post_comment_count']}')");
  
  }

  static function editPost(array $postData, int $postId){
    global $mysqli;
    $mysqli->query("UPDATE posts SET post_title='{$postData['post_title']}', post_author= '{$postData['post_author']}', post_category_id = '{$postData['post_category_id']}', post_status = '{$postData['post_status']}' ,post_image = '{$postData['post_image']}', post_tags = '{$postData['post_tags']}', post_content = '{$postData['post_content']}', post_date = '{$postData['post_date']}', post_comment_count = '{$postData['post_comment_count']}' WHERE post_id={$postId}");
    header("Location: posts.php");
  }

  static function deletePost(int $postId){
    global $mysqli;
    $mysqli->query("DELETE FROM posts WHERE post_id=$postId");
    header("Location: posts.php");
  }


}

?>