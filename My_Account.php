<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Namekart Project</title




 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

 <!-- Font Awesome -->

      <link rel="stylesheet" href="css/demo.css" />
      <link rel="stylesheet" href="css/reset.css" />
      <link rel="stylesheet" href="css/text.css" />
      <link rel="stylesheet" href="css/960.css" />
</head>
<body>
      <div class="container_12">
          <div class="grid_3">
            <nav class="navbar navbar-expand-lg navbar-dark">
                              <img src="namekart.png" class="img-thumbnail" alt="">

                              </nav>



          </div>
           <div class="grid_9">
             <nav class="navbar navbar-expand-lg navbar-dark mainnav" style="background-color:#0d78a9;">
                                <!-- <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu"> -->
                                 <span class="navbar-toggler-icon"></span>
                                   </button>
                                   <div class="collapse navbar-collapse" id="myMenu">
                                         <ul class="navbar-nav pl-5 custom-nav ml-auto">
                                           <li class="nav-item custom-nav ">
                                             <a href="Auctions.php" class="nav-link ">Auction</a>
                                           </li>
                                           <li class="nav-item">
                                             <a href="Backorder.php" class="nav-link ">Backorders</a>
                                           </li>
                                           <li class="nav-item">
                                             <a href="Settings.php" class="nav-link">Settings</a>
                                           </li>

                                           <li class="nav-item">
                                             <a href="My_Account.php" class="nav-link">MyAccount</a>
                                           </li>


                                         </ul>
                                         </div>

                                    </nav>
                                    <div class="container_12">
                                      <div class="grid_12">
                                        <form class="form_input_search" action="/action_page.php">
                                                 <input class="form-control w-25" type="text" placeholder="Search Domains">
                                                    <button class="btn btn-success" type="submit">Search</button>
                                                     </form>
                                          </div>
                                          <div class="account_info">
                                            <a href="MyAccount.php">Create an Account | </a>
                                            <a href="MyAccount.php">Log In</a>

                                          </div>




                                    </div>







           </div>
           <div class="grid_12">
               <hr/>


           </div>
              <div class="grid_3">
                <div class="sidenav">
                                           <a href="scheduler.php">Scheduler</a>
                                           <a href="Watchlist.php">WatchList</a>
                                           <a href="Bidding.php">Bidding</a>
                                           <a href="Bulk_Actions.php">BulkActions</a>
                                             <a href="Reports.php">Reports</a>
                                               <a href="Logs.php">Logs</a>
                                         </div>

              </div>
              <div class="grid_9">
                            <h1 style="color:black; font-size:40px">MyAccount Detalis</h1>
                            <div class="myaccount_detalis">
                                <button type="button" name="button">
                                  <a href="#" style="color:white;text-decoration:none;">Manage User</a>
                                </button>
                                <button type="button" name="button">
                                  <a href="#" style="color:white;text-decoration:none;">Add new</a>
                                </button>


                              </div>
                              <div class="col-md-12">
                                    <table class="table1" >
                                             <thead>
                                               <tr>
                                                 <th scope="col">#</th>
                                                 <th scope="col">Email</th>
                                                 <th scope="col">Password</th>
                                                 <th scope="col">Role</th>
                                                  <th scope="col">Update</th>
                                                  <th scope="col">Edit</th>

                                               </tr>
                                             </thead>
                                             <tbody>
                                               <tr>
                                                 <th scope="row"></th>
                                                 <td></td>
                                                 <td></td>
                                                 <td></td>
                                               </tr>

                                             </tbody>
                                            </table>


                                  </div>
                                  <h1 style="color:black; font-size:40px;">Change Detalis</h1>
                                                <form class="change_detalis" action="#" method="post">
                                                  <div class="form-group">
                                                    <label for="">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" name="" value="" class="form-control w-50">

                                                  </div>
                                                  <div class="form-group">
                                                    <label for="">Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" name="" value="" class="form-control w-50">

                                                  </div>
                                                  <div class="form-group">
                                                    <label for="">Primary Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                    <input type="text" name="" value="" class="form-control w-50">

                                                  </div>
                                                  <div class="form-group">
                                                    <label for="">Secondary Password:</label>
                                                    <input type="text" name="" value="" class="form-control w-50">

                                                  </div>
                                                  <button type="button" name="button">Submit</button>

                                                </form>

              </div>

      </div>


      <!--JQuery Proper Bootstrap -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
