<?php include "./includes/header.php" ?>
    <!-- Navigation -->
<?php include "./includes/navigation.php" ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                
                <!-- First Blog Post -->
                
                <?php 
                    if(isset($_GET['cat_id'])){
                      $post_id = (int) $_GET['cat_id'];
                        if($result = Post::showAPostByCat($post_id)){
                            while($row = $result->fetch_assoc()){
                                                   
                     ?>
                <h2>
                    <a href="./post.php?post_id=<?=$row['post_id']?>"><?=$row['post_title']?></a>
                </h2>
                <p class="lead">
                    by <a href="index.php"><?=$row['post_author']?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Posted on <?=$row['post_date']?></p>
                <hr>
                <img class="img-responsive" src="./admin/images/<?=$row['post_image']?>" alt="fake-img">
                <hr>
                <p><?=$row['post_content']?></p>
                <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                    
                    <?php
                        
                    }
                }
                
              }
                ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include "./includes/footer.php" ?>