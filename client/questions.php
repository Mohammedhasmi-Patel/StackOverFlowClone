<div class="container">
  <h1 class="heading question-heading">Questions</h1>


  <div class="col-6">
  <?php

  include "./utils/db.php";
  
  $query = "SELECT * FROM questions";
  $result = $conn->query($query);

  foreach ($result as $row) {
    $title = $row['title'];
    $id = $row['id'];

    echo "<div class='row question-list '>
    <h4><a href='?questionId=$id'>$title</a></h4>
    </div>";
  }
  
  
  
  
  ?>
</div>

</div>