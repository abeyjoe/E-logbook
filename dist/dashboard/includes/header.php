        <?php 
    // session_start();


      if (!isset($_SESSION['username'])) {
          header("Location: ../../index.php");
      }else{


    ?>


    <style type="text/css">
      .menu-item{
            color:  black;
             font-weight: bolder;"
      }
    </style>

    <div class="logo"><a href="index.php" class="simple-text logo-normal">
          Dashboard
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./index.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">
              <i class="material-icons">person</i>
              <p class="menu-item">User Profile</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./phone.php">
              <i class="material-icons">content_paste</i>
              <p class="menu-item">Add Day</p>
            </a>
          </li>
           <li class="nav-item ">
            <a class="nav-link" href="./addeddetails.php">
              <i class="material-icons">bubble_chart</i>
              <p class="menu-item">View Users' Logbook</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./searchbydate.php">
              <i class="material-icons">print</i>
              <p class="menu-item">Print Logbook by Date</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./availableusers.php">
              <i class="material-icons">people</i>
              <p class="menu-item">Available Users</p>
            </a>
          </li>
         <!--  <li class="nav-item ">
            <a class="nav-link" href="./typography.php">
              <i class="material-icons">library_books</i>
              <p>Typography</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./icons.php">
              <i class="material-icons">bubble_chart</i>
              <p>Icons</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./map.php">
              <i class="material-icons">location_ons</i>
              <p>Maps</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./notifications.php">
              <i class="material-icons">notifications</i>
              <p>Notifications</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./rtl.php">
              <i class="material-icons">language</i>
              <p>RTL Support</p>
            </a>
          </li> -->
          <li class="nav-item active-pro ">
            <a class="nav-link" href="../../logout.php">
              <i class="material-icons">unarchive</i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">


      <?php

        }
      ?>