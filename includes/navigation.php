<?php include "db.php" ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target="#bs-example-navbar-collapse-1"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php 
      if($result = $mysqli->query("SELECT * FROM categories")){
        while($row = $result->fetch_assoc()){
          echo "<li><a href='../categories.php?cat_id={$row['cat_id']}'>{$row['cat_title']}</a></li>";
        }
      }else{
        echo "Unable to fetch categories";
      }

      
      
      ?>
      
      </ul>

<!--  

        <li>
          <a href="#">Services</a>
        </li>
        <li>
          <a href="#">Contact</a>
        </li>
      -->
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container -->
</nav>
