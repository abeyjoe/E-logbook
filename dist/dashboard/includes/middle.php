    <?php
          // session_start();
          ob_start();

          include('includes/db.php');
    ?>
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_copy</i>
                  </div>
                  <p class="card-category">Available Users</p>
                  <h3 class="card-title"><?php 

                  $query = "SELECT COUNT(id) FROM users";
                  $result = mysqli_query($connection, $query);
                  if ($result) {
                    while ($arr = mysqli_fetch_array($result)) {
                     // print_r($arr);
                      $id = $arr['COUNT(id)'];
                      echo $id;
                    }
                  }

                  ?>
                    <small>Users</small>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons ">info_outline</i>
                    <a href="javascript:;">Users of this system</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">store</i>
                  </div>
                  <p class="card-category">Number of Days</p>
                  <h3 class="card-title"><?php 

                  $query = "SELECT COUNT(id) FROM phonename";
                  $result = mysqli_query($connection, $query);
                  if ($result) {
                    while ($arr = mysqli_fetch_array($result)) {
                     // print_r($arr);
                      $id = $arr['COUNT(id)'];
                      echo $id;
                    }
                  }

                  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> as at last updated time
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Total entry</p>
                  <h3 class="card-title"><?php 

                  $query = "SELECT COUNT(id) FROM phonedetails";
                  $result = mysqli_query($connection, $query);
                  if ($result) {
                    while ($arr = mysqli_fetch_array($result)) {
                     // print_r($arr);
                      $id = $arr['COUNT(id)'];
                      echo $id;
                    }
                  }

                  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i> Tracked from Github
                  </div>
                </div>
              </div>
            </div>
  <!--           <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <p class="card-category">Followers</p>
                  <h3 class="card-title">+245</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">update</i> Just Updated
                  </div>
                </div>
              </div>
            </div> -->
          </div>

        </div>
      </div>