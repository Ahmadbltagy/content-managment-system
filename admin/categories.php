<?php include "./includes/header.php" ?>
<?php include "./Category.php"; ?>
<div id="wrapper">

        <!-- Navigation -->
<?php include "./includes/navigation.php" ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Weclome to admin page
                            <small>Author</small>
                        </h1>

                        
                <div class="col-xs-6">
                <?php 
                  Category::insertCategory();                 
                  Category::deleteCategory();  
                  Category::editCategory();
                ?>                    
                  
                <form action="" method="post">
                  
                  <div class="form-group">
                      <label for="cat_title">Category title</label>
                      <input class="form-control" type="text" name="cat_title" >
                    </div>
                    
                    <div class="form-group">
                      <input class="btn btn-primary" type="submit" name="submitCat" value="Add a new category">
                    </div>
                </form>

                
                <?php if(Category::getEditCatTitle()){  ?>      
                <form action="" method="post">
                  <div class="form-group">
                      <label for="cat_title">Edit category</label>
                          <input class="form-control" type="text" name="new_cat_title" value="<?=$cat_title?>">
                          
                        </div>
                        <div class="form-group">
                          <input class="btn btn-primary" type="submit" name="updateCat" value="Update category">
                        </div>
                      </form>
                <?php } ?>
              </div>
              <div class="col-xs-6">
                  <table class="table">
                    <thead>
                      <th>Id</th>
                      <th>Title</th>
                      <th>Delete Category</th>
                      <th>Edit Category</th>
                    </thead>
                    <tbody>
                      <?php 
                        if($result= Category::findAllCategories()){
                          while($row = $result->fetch_assoc()){
                            echo <<< data
                            <tr>
                              <td>{$row['cat_id']}</td>
                              <td>{$row['cat_title']}</td>
                              <td> <a href='categories.php?delete={$row['cat_id']}'>DELETE</a></td>
                              <td> <a href='categories.php?edit={$row['cat_id']}'> Edit </a> </td>
                            </tr>
                            data;
                          }
                        }
                      ?>
                    </tbody>
                  </table>
                </div>

                <!-- /.row -->
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    
<?php include "./includes/footer.php" ?>