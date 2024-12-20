<div class="container">
  <h1 class="heading">Ask A Question</h1>
</div>

<form action="./server/requests.php" method="post">
 
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="title"  class="form-label">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Question" >
  </div>
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="description"  class="form-label">Description</label>
    <textarea name="description" class="form-control" name="email" id="description" placeholder="Enter Question" ></textarea>
  </div>
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="category"  class="form-label">Category</label>
    <select class="form-control" name="category" id="category">
    <option >Select Category</option>
      <option value="mobile">Mobile</option>
      <option value="general">General</option>
      <option value="coding">Coding</option>
      <option value="gaming">Gaming</option>
    </select>
  </div>
  
  
  
  <div class=" col-6 offset-sm-3 ">
  <button type="submit"  name="login" class="btn btn-primary">Submit</button>
  </div>
</form>