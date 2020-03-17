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
                      <h3 style="color:#0d78a9; font-size:40px">Platform Settings</h3>
                      <form action="#" method="post" class="Platform_settings">

                                  <label>Choose Platform:</label>
                                  <select>
                                    <option selected>Choose...</option>
                                    <option value="1">GoDaddy</option>
                                    <option value="2">Namejet</option>
                                    <option value="3">SnapNames</option>
                                    <option value="4">DropCatch</option>
                                    <option value="5">Dynadot</option>
                                  </select>

                                <div class="form-group">
                                  <label for="username">UserName:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                  <input type="text" name="" value="" >

                                </div>
                                <div class="form-group">
                                  <label for="username">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                  <input type="text" name="" value="" >

                                </div>
                                <div class="form-group">
                                  <label for="username">API Key:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                  <input type="text" name="" value="" >

                                </div>
                                <button type="button" name="button">SAVE</button>

                          </form>
                          <h3 style="color:#0d78a9; font-size:40px">Display Setting</h3>
                             <div class="col-m-12"  >
                                <form class="display_setting" action="#" method="post">
                                  <div class="form-group">
                                    <label class="mr-sm-2" for="inlineFormCustomSelect">Domain Per Page:</label>
                                    <select class="custom-select mr-sm-2 w-50"  id="inlineFormCustomSelect">
                                      <option selected>Choose...</option>
                                      <option value="1">25</option>
                                      <option value="2">50</option>
                                      <option value="3">100</option>
                                      <option value="4">200</option>

                                    </select>
                                  </div>
                                    <button type="button" name="button">Save Change</button>



                                </form>

                             </div>
                             <h3 style="color:#0d78a9; font-size:40px">Time Stamp Format</h3>
                                      <div class="col-m-12"  id="platform-setting1">
                                         <form class="time_stamp" action="#" method="post">
                                           <div class="form-group">
                                             <label class="radio-inline">
                                              <input type="radio" name="optradio" checked>dd/hh/mm &nbsp;&nbsp;&nbsp;&nbsp;
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="optradio" style="font-size:20px;">mm/dd/yy 00:00:00 PM
                                            </label>

                                           </div>
                                             <button type="button" name="butto">Save Change</button>



                                         </form>

                                      </div>


              </div>

      </div>


      <!--JQuery Proper Bootstrap -->
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>
</html>
