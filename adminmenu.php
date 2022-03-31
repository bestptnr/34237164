
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <!-- Just an image -->

  <a class="navbar-brand" href="#">
    <img src="img/logo.png" width="30" height="30" alt="">
  </a>

  <a class="navbar-brand" href="index.php">ระบบจองห้องประชุม</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">


      <li class="nav-item ">
        <a class="nav-link href="#" >
          Dashboard
        </a>
 
      </li>


      <li class="nav-item  ">
        <a class="nav-link  " href="addmeet.php">
         จองห้องประชุม
        </a>

 
      </li>
      <li class="nav-item ">
        <a class="nav-link " href="calendar.php" >
          ค้นหาห้องประชุม
        </a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="addroom.php">
            เพิ่มห้องประชุม
        </a>
      </li>
      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ยืนยันการจองห้องประชุม  
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">เมนูที่ 3.1</a>
          <a class="dropdown-item" href="#">เมนูที่ 3.2</a>
        </div>
      </li> -->

    </ul>

    <div class="ml-md-2 my-lg-0">
	  
  <?php 

      echo "<p style='color:white'>ยินดีต้อนรับ "; 
      echo $_SESSION['user']; 
      echo "</p>";
   
  ?>

      <a href="logout.php" class="btn btn-primary" role="button">ออกจากระบบ</a>
    </div>
	
  </div>
  </div>
</nav>