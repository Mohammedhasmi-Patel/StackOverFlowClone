<select class="form-control" name="category" id="category">
<option >Select Category</option>

<?php

include "./utils/db.php";

$query = "SELECT * FROM category";
$result = $conn->query( $query );

foreach ($result as  $row) {

  $name = $row['name'];
  $id = $row['id'];

  echo "<option value='$id'>$name</option>";
}



?>

</select>