<select class="form-control" name="category_id" id="category">
<option >Select Category</option>

<?php

include "./utils/db.php";

$query = "SELECT * FROM category";
$result = $conn->query( $query );

foreach ($result as  $row) {

  $name = $row['name'];
  $category_id = $row['id'];

  echo "<option value='$category_id'>$name</option>";
}

?>

</select>