<?php

require ('includes/database.php');

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $sql = "insert into article(title, content, published_at)
                           values(' ".$_POST['title'] . " ','"
                                    .$_POST['content'] . " ','"
                                    .$_POST['published_at'] . " ')" ;


  //desc use kiya hoon id ko reerse krne ke liye

  $results = mysqli_query($conn, $sql);

  if($results === false){
    echo mysqli_error($conn);
  }else{
    $id = mysqli_insert_id($conn);
    echo "Inserted with ID: $id";


  }
}

 ?>

<!--header -->


<?php require('includes/header.php') ?>



<!-- end header-->

<div class="submit-form">
     <h3>Submit Yours </h3>

     <form method ="post">
       <div class="form-group">
     <label class="label" for ='title'>Name</label>
     <input class= "form-control" type="text" name ='title' id = 'title' placeholder="It won't be displayed">
   </div>

    <div class="form-group">
     <label class= "label" for = "content">Your secret </label>
     <textarea class="form-control" name ="content" row="10" cols="40" id ="content" placeholder="Don't use offensive words  Write whatever yu want to share"></textarea>
     </div>

     <div class="form-group">
       <label class="label" for="published_at">Date</label>
       <input class="form-control" type="date" name ="published_at" id ="published_at">
     </div>

     <button class="btn btn-dark">Submit</button>

    </form>
    <a href="post.php"><p>Back to Secrets page</p></a>



  </div>

  <!--header -->


  <?php require('includes/footer.php') ?>



  <!-- end header-->
