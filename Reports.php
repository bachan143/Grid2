<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Namekart Project</title








 <!-- Font Awesome -->
 <!-- Latest compiled and minified CSS -->


        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.css">

      <link rel="stylesheet" href="css/demo.css" />
      <link rel="stylesheet" href="css/reset.css" />
      <link rel="stylesheet" href="css/text.css" />
      <link rel="stylesheet" href="css/960.css" />
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
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
                  <h3  style="padding-top:20px;color:#0d78a9; font-size:30px;">Reports Detalis</h3>




                    <div class="mainpart_table" style="padding-top:10px">
                                             <div class="container">
                                                <div class="row justify-content center">



                                                         <table class="table table-bordered table-striped table-hover table-sm" id="example1">
                                                         <thead id="table_anchor">
                                                           <tr >
                                                             <th></th>


                                                             <th>   <a href="#">Domain</a></th>
                                                             <th>  <a href="#">Action</a></th>
                                                             <th> <a href="#">  output</a> </th>
                                                             <th>  <a href="#">Last Update Time</a></th>


                                                           </tr>
                                                         </thead>
                                                            <tbody>

                                                               <tr id="table_anchor1">
                                                                  <td></td>
                                                                  <td>  </td>
                                                                  <td>  </td>
                                                                  <td> </td>
                                                                  <td> </td>
                                                                  

                                                               </tr>

                                                            </tbody>

                                                         </table>




                                                </div>

                                             </div>

                               </div>










              </div>

      </div>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
                $(document).ready(function()
                {
                var table=$('#example1').DataTable(
                    {

                    });
                });

       </script>






       <!-- jQuery library -->

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>

</body>
</html>
