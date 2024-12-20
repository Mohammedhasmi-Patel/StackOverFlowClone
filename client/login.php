<div class="container">
  <h1 class="heading">Login</h1>
</div>

<form action="./server/requests.php" method="post">
 
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="email"  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" >
  </div>
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="password"  class="form-label">Email</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" >
  </div>

  
  <div class=" col-6 offset-sm-3 ">
  <button type="submit"  name="login" class="btn btn-primary">Login</button>
  </div>
</form>