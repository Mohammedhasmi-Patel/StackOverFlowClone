<div class="container">
 <h1 class="heading">Question Details</h1>

 <div class="col-6">
 <?php
 
 include "./utils/db.php";


 $questionId = $_GET["questionId"];

 $query =  "SELECT * FROM questions WHERE id=$questionId";
 $result = $conn->query($query);
 $row = $result->fetch_assoc();

 echo "<h4 class='margin-bottom-15'>Question:".$row['title']."</h4>
 <p class='margin-bottom-15'>".$row['description']."</p>";
 ?>



 <textarea class="form-control margin-bottom-15" placeholder=" Your Answer" id=""></textarea>
 <button class="btn btn-primary margin-bottom-15">Submit Answer</button>
 </div>
</div>