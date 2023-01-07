<?php include "./includes/header.php" ?>
    <!-- Navigation -->
<?php include "./includes/navigation.php" ?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            
            <!-- Blog Entries Column -->
            <div class="col-md-8">
                
                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>
                
                <!-- First Blog Post -->
                
                <?php 
                    if(isset($_POST['submit'])){
                        $search = $_POST['search'];
                        $result = $mysqli->query("SELECT * FROM posts WHERE post_tags LIKE '%{$search}%'");
                    }else{
                        $result = $mysqli->query("SELECT * FROM posts");  
                    }
                    if(!$result->num_rows){
                        echo "<h1>No result Founded</h1>";
                    }else{         
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
                ?>
                
            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include "./includes/sidebar.php" ?>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
<?php include "./includes/footer.php" ?>