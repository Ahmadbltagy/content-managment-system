<div class="col-md-4">
                <!-- Blog Search Well -->
               


                <div class="well">
                    <h4>Blog Search</h4>
                    <form action="" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                          <button class="btn btn-default" type="submit" name="submit">
                                <span class="glyphicon glyphicon-search"></span>
                          </button>
                        </span>
                    </div>
                    </form>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                      
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                            <?php 
                                if($result = $mysqli->query("SELECT * FROM categories")){
                                while($row = $result->fetch_assoc()){
                                  echo "<li><a href='../categories.php?cat_id={$row['cat_id']}'>{$row['cat_title']}</a></li>";   
                                }
                            }   
                            ?>
                            </ul>
                        </div>

                        
                      </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>

            </div>
