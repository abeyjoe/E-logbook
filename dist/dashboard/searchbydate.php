<?php
session_start();

$branch = $_SESSION['branch'];
  include('includes/db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Add Phone | Femtech Information Technology Institute
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
  <?php include('includes/header.php'); ?>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
  

<style type="text/css">
  .lab{
    color: purple;
    font-weight: bolder;
    font-family: Tahoma;
    font-size: 20px;

  }
</style>








<!-- <button type="button" class="btn btn-primary" >Small modal</button> -->







<div class="container" style="margin-top: 70px;">
    <div>
        <h2 style="color: purple; font-weight: bolder; border-bottom: 3px solid teal;">
         Print by Date
        </h2>
    </div>
  





    <div class="container col-6">
        <div class="card" style="background-color: teal; padding: 30px;">
          <form action="searchbydate.php" method="post">
            <label style="color: white; font-weight: bolder;">Date</label>
              <input type="date" name="date" class="form-control" style="color: white;">
              <input type="submit" name="search" class="btn btn-primary mt-3" value="Search">
          </form>
          
        </div>
    </div>





    <?php
        if (isset($_POST['search'])) {
            $date = $_POST['date'];

            // echo $date;
            $count = 0;
            $query = "SELECT * FROM phonedetails WHERE DATE(dateandtime)='$date'";
            $result = mysqli_query($connection, $query);
            if ($result) {
              echo "<table class='table table-bordered table-striped'>
                        <tr>
                          <th>
                             S/N
                            </th>
                          <th>
                             Day
                            </th>
                            <th>
                              Work Done
                            </th>
                            <th>
                              Place of IT
                            </th>
                            <th>
                              DATE AND TIME
                            </th>
                        </tr>";
              while ($arr=mysqli_fetch_array($result)) {
                
                $id = $arr['id'];
                $nameandprice = $arr['nameandprice'];
                $no = $arr['no'];
                $branch = $arr['branch'];
                $dateandtime = $arr['dateandtime'];
                $count +=1;


                echo "<tr>
                        <td>
                            $count
                        </td>
                        <td>
                            $nameandprice
                        </td>
                        <td>
                            $no
                        </td>
                        <td>
                           $branch
                         </td>
                         <td>
                           $dateandtime
                         </td>
                    </tr>";


              }



                 echo"  
                    <div>
                      <button class='btn btn-primary' onclick='window.print()'>Print this page</button>
                    </div>";
            }else{
             echo "No record Match";
            }

  }
?>

</table>

          



   <!--    <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer> -->
    </div>
  </div>




<?php

  include('includes/footer.php');
?>


<script type="text/javascript">
  
   

</script>
