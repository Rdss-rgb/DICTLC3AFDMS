
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #002642">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand my-5 d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                <img src="img/logodict.png" width = "100" height = "90">
                </div>
                <div class="sidebar-brand-text">DICT LC3<br>
                <small class ="text-warning">Admin and Finance DMS</small>
                
            </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- <li class="nav-item active">
                <a class="nav-link" href="mlist.php">
                <i class="fas fa-globe"></i>
                    <span>Web Services</span></a>
            </li> -->

              <!-- Divider -->
              <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
               Document Management 
            </div>

           <!-- Nav Item - Pages Collapse Menu -->
           <li class="nav-item active">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2"
                    aria-expanded="true" aria-controls="collapseTwo2">
                          <i class="fa fa-folder-open" aria-hidden="true"></i>
                    <span>Document Storage</span>
                </a>
                <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Admin & Finance Storage</h6>
                        <a class="collapse-item" href="all.php"><strong>All Documents</strong></a>
                        <a class="collapse-item" href="type-storage.php"><strong>Document Type Storage</strong></a>

                    </div>
                </div>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-file"></i>
                    <span>Documents</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Modify Documents</h6>
                        <a class="collapse-item" href="add.php"><strong>Add a Document</strong></a>
                        <a class="collapse-item" href="archive.php"><strong>Archive Documents</strong></a>
                    </div>
                </div>
              
            </li>

               <!-- Divider -->
               <hr class="sidebar-divider">

             <!-- Heading -->
        <div class="sidebar-heading">
          Detailed logs
        </div>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#activity">
            <i class="fa fa-history" aria-hidden="true"></i>
            <span>Activity logs</span></a>
        </li>

            


            <!-- <li class="nav-item">
                <a class="nav-link" href="form.php">
                <i class="fas fa-users"></i>
                    <span>Form Try</span></a>
            </li> -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

    
        </ul>
        <!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
        
   
        <ul class="navbar-nav ml-auto">

			
			<script type="text/javascript">                       //Time
   tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
   tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

      function GetClock(){
            var d=new Date();
            var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
                if(nyear<1000) nyear+=1900;
                     var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;
                           if(nhour==0){ap=" AM";nhour=12;}
                           else if(nhour<12){ap=" AM";}
                           else if(nhour==12){ap=" PM";}
                           else if(nhour>12){ap=" PM";nhour-=12;}

                     if(nmin<=9) nmin="0"+nmin;
                     if(nsec<=9) nsec="0"+nsec;

                           document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
                        }

                     window.onload=function(){ 
                        GetClock(); 
                        setInterval(GetClock,1000);
                        }
</script>
           <small class =" text-dark mt-4 mx-2">  <div class="toggle" onclick="toggleMenu();"></div>
        <div class="time"><div id="clockbox"></div></div></small> <small class = " text-dark mt-4" id='ct7' ></small>
            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
                   <P class = "my-2"> <?php $sr= $_SESSION['Uname'];
                   echo ''.$sr.'';
                   ?></p>

                   </span>
                   <?php 
                        $sr=$_SESSION['Uname'];
                        $query="SELECT * FROM users WHERE username='$sr'";
       $query_run=mysqli_query($connection,$query);
       
      foreach($query_run as $row)
      {

      
  
     
  }?>
                        <?php echo '<img src="Avatar/'.$row['avatar'].'" width="38px;" height="38px"; " style="border-radius: 50%;">' ?>
                 
                   
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="register.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                    </a>
                    <!-- <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                    </a> -->
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout 
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#">
        <i class="fas fa-angle-up"></i>
    </a>

        <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="logout.php" method="POST">
                    <button type = "submit" name = "logout_btn" class="btn btn-primary">Logout</button>
                    </form>


                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
<div class="modal fade" id="History" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-address-book" aria-hidden="true"></i> History</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">View All</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="activity" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-history" aria-hidden="true"></i> Activity</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
      </div>
      <div class="modal-body">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">View All</button>
      </div>
    </div>
  </div>
</div>