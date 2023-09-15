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
                  <a class="dropdown-item" href="../../logout.php">Log out</a>
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
          History
        </h2>
    </div>
  




          <?php 



          $query=mysqli_query($connection,"select count(id) from `phonedetails`");
    $row = mysqli_fetch_row($query);

    $rows = $row[0];
    
    $page_rows = 50;

    $last = ceil($rows/$page_rows);

    if($last < 1){
        $last = 1;
    }

    $pagenum = 1;

    if(isset($_GET['pn'])){
        $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
    }

    if ($pagenum < 1) { 
        $pagenum = 1; 
    } 
    else if ($pagenum > $last) { 
        $pagenum = $last; 
    }

    $limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
    
    $nquery=mysqli_query($connection,"select * from `phonedetails` $limit");

    $paginationCtrls = '';

    if($last != 1){
        
    if ($pagenum > 1) {
        $previous = $pagenum - 1;
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'" class="btn btn- myA">Previous</a> &nbsp; &nbsp; ';
        
        for($i = $pagenum-4; $i < $pagenum; $i++){
            if($i > 0){
                $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default myA">'.$i.'</a> &nbsp; ';
            }
        }
    }
    
    $paginationCtrls .= ''.$pagenum.' &nbsp; ';
    
    for($i = $pagenum+1; $i <= $last; $i++){
        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'" class="btn btn-default myA">'.$i.'</a> &nbsp; ';
        if($i >= $pagenum+4){
            break;
        }
    }

    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a  href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'" class="btn myA">Next</a> ';
    }
    }










            $count = 0;
                $query = "SELECT * FROM phonedetails WHERE status=1";

                $result = mysqli_query($connection, $query);
               if(mysqli_num_rows($result) > 0){
                // if ($result) {
                  echo "<table class='table table-bordered table-striped'>
                        <tr>
                          <th>
                              S/N
                            </th>
                            <th>
                             Place of IT
                            </th>
                          <th>
                              Day
                            </th>
                            <th>
                              Work Done
                            </th>
                            <th>
                              Data and Time
                            </th>
                        </tr>";
                   while($arr = mysqli_fetch_array($nquery)){
                    $id = $arr['id'];
                    $nameandprice = $arr['nameandprice'];
                    $no = $arr['no'];
                    $dateandtime = $arr['dateandtime'];
                    $branch = $arr['branch'];
                    $count+=1;


                    

                  // echo "<option class='form-control' value='$phonename ($price)'>
                  //            $phonename ($price)  
                  //       </option>";


                    echo "<tr>
                        <td>
                            $count
                        </td>
                        <td>
                            $branch
                        </td>
                        <td>
                            $nameandprice
                        </td>
                        <td>
                            $no
                        </td>
                        <td>
                           $dateandtime
                      </td>
                    </tr>

                    ";

                   }
                   // echo" <tr>
                   //    <td></td>
                   //    <td></td>
                   //    <td></td>
                   //    <td><a href='updatedetails.php?branch=$branch' class='btn btn-primary'>Submit</a></td>
                   //  </tr>";
                }else{
                  echo "No Record Available";
                }

          ?>
        
      
    </table>

     <div id="pagination_controls"><?php echo "<span style='background-color: ; padding: 8px;'>". $paginationCtrls."</span>"; ?></div>
</div>



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
  
  $(document).ready(function(){
    $('#addBtn').on('click', function(e){
      e.preventDefault()


      // alert('it is working');
      var phonename = $('#phonename').val();
      var quantity = $('#quantity').val();

      // alert(phonename + quantity);

      $.ajax({
        url: "addphone.php",
        method: "POST",
        data:{
          phonename:phonename,
          quantity:quantity
        }
      }).done(function(response){
        if (response == 'success') {
          // $('#message').text(response);
          alert('Phone Added');
          location.reload();
        }else{
          // $('#message').text(response);
          alert('Error in Adding Phone, Please, Try Again!');

        }
      })
    })
  })
</script>
