<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <img style="height:75px;w:300px" src="./public/logo.svg" />
      
    </a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active"  href="/stackOverFlowClone">Home</a>
        </li>
        <?php
        
          if(isset($_SESSION['user']['username'])){ ?>
              <li class="nav-item">
              <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
              </li>

         <?php } ?>


         <?php
         if(!isset($_SESSION['user']['username'])){ ?>
          <li class="nav-item">
          <a class="nav-link" href="?login=true">Login</a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="?signup=true">SignUp</a>
         </li>

         <?php } ?>
         
        <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="#">Latest Questions</a>
        </li>
      </ul>
    </div>
  </div>
</nav>