<?php

session_start();


require'includes/database.php';

$sql= "select * from article order by id desc";
//desc use kiya hoon id ko reerse krne ke liye

$results = mysqli_query($conn, $sql);

if($results === false){
  echo mysqli_error($conn);
}else{
  $articles = mysqli_fetch_all($results, MYSQLI_ASSOC);


}



?>

<!--header -->


<?php require('includes/header.php') ?>



<!-- end header-->



   <!-- <div class="sticky-top button">

    <a href="logout.php"><button class= "btn btn-light btn-sm">Logout</button></a>
    <a href="insert.php"><button class="btn btn-light btn-sm">Submit a secret</button></a>

  </div> -->

<div class="sticky-top nav">
  <a href="logout.php"><button class= "btn btn-outline-light btn-sm nav-button">Logout</button></a>
  <a href="insert.php"><button class="btn btn-outline-light btn-sm nav-button">Submit a secret</button></a>

</div>


    <ul>

      <?php foreach ($articles as $article): ?>
      <li>
        <div class = "content">
            <!-- <h2><?= $article['title']; ?></h2> -->
            <h5><?= $article['content']; ?></h5>
            <div class="published">
            <p>Published on → <?= $article['published_at']; ?> </p>
          </div>
        </div>
      </li>
    <?php endforeach; ?>

  </ul>

    <!--header -->


    <?php require('includes/footer.php') ?>



    <!-- end header-->
