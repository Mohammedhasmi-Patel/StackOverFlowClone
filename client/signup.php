<div class="container">
  <h1 class="heading">SignUp</h1>
</div>

<form action="./server/requests.php" method="post">
  <div class="col-6 offset-sm-3 margin-bottom-15 ">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" >
  </div>
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" >
  </div>
  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" >
  </div>

  <div class=" col-6 offset-sm-3 margin-bottom-15">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" >
  </div>
  
  <div class=" col-6 offset-sm-3 ">
  <button type="submit" name="signup" class="btn btn-primary">Signup</button>
  </div>
</form>