<?php
  // Start the session
  session_start();
  if($_SESSION["user"]==""){
    echo "<script> alert('Please login....');</script>";
    echo '<script>window.location.href="sign-in.html";</script>';
  }
?>
<!DOCTYPE html>
<html lang="en">


<?php
			include ('../includes/connection.php');
			$ur = mysql_fetch_array(mysql_query("select * from admin_reg where email='".$_SESSION["user"]."'"));
?>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Add Student 
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Labrary Manangement</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="issue_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <span class="material-symbols-outlined">task_alt</span>
            </div>
            <span class="nav-link-text ms-1">Issue Book</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="add_stud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">engineering</span>            
          </div>
            <span class="nav-link-text ms-1">Add Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">book</span>
            </div>
            <span class="nav-link-text ms-1">Add Books</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="search_stud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <span class="material-symbols-outlined">search</span>
            </div>
            <span class="nav-link-text ms-1">Search Record</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_dept.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">lab_profile</span>
            </div>
            <span class="nav-link-text ms-1">Department Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_issue.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">lab_profile</span>
            </div>
            <span class="nav-link-text ms-1">Issue Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_return.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">lab_profile</span>
            </div>
            <span class="nav-link-text ms-1">Return Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_stud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">lab_profile</span>
            </div>
            <span class="nav-link-text ms-1">Students Report</span>
          </a>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <span class="material-symbols-outlined">lab_profile</span>
            </div>
            <span class="nav-link-text ms-1">Books Report</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <span class="btn btn-nooutline-primary mt-4 w-100">Signed-in as: <?php echo  $ur['name'];?></span>
        <form method="post" novalidate="novalidate">
            <button class="btn bg-gradient-primary w-100"  type="Submit" name="sign">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign Out</span></a>
            </button>
        </form>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Add Student</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Add Student</h6>
        </nav>
      </div>
    </nav>
    <!-- End Navbar -->

    

    
    <div class="section__content section__content--p30">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                          <div class="card-body">
                              <div class="card-title">
                                  <h3 class="text-center title-2">Add Student in the system</h3>
                              </div>
                              <hr>
                              <form method="post" novalidate="novalidate">
                                
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Roll No.</label>
                                    <input type="text" name="roll"  id="roll" class="form-control">
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">En. Roll No.</label>
                                    <input type="text" name="enroll"  id="enroll" class="form-control">
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <select class="form-control" id="year" name="year" onchange=selectnone(this.id)>
                                        <option value="none">Select Your Year</option>
                                        <option value="1">First Year</option>
                                        <option value="2">Second Year</option>
                                        <option value="3">Third Year</option>
                                    </select>
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <select class="form-control" id="department" name="department" onchange=selectnone(this.id)>
                                        <option value="none">Select Your Department</option>
                                        <option value="1">Electronics and Telecommunication</option>
                                        <option value="2">Computer</option>
                                        <option value="3">Information Technology</option>
                                        <option value="4">Electrical</option>
                                        <option value="5">Civil</option>
                                        <option value="6">Mechanical</option>
                                        <option value="7">Automobile</option>
                                    </select>
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name"  id="name" class="form-control">
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Phone Number</label>
                                    <input onchange=phonevalid() type="number" name="phone"  id="phone" class="form-control">
                                  </div>
                                  <div class="input-group input-group-outline my-3">
                                    <label class="form-label">Email</label>
                                    <input onchange=emailvalid() type="email" name="email"  id="emmail" class="form-control">
                                  </div>
                                  <div>
                                      <button  id="payment-button" type="Submit" name="Submit" class="btn bg-gradient-primary w-100">
                                          <i class="fa fa-plus fa-lg"></i>&nbsp;
                                          <span id="payment-button-amount">ADD</span>
                                      </button>
                                  </div>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



      <?php include('footer.php');?>
  </main>

  <?php

include('../includes/connection.php');
		if(isset($_POST['sign'])){
      session_destroy();
      
      echo "<script> alert('Signed Out Successfully....'); </script>";
      echo "<script> window.location.href='sign-in.html'; </script>";
                  
		}
    
		if(isset($_POST['Submit'])){
      $name=$_POST['name'];
      $roll=$_POST['roll'];
      $enroll=$_POST['enroll'];
      $email=$_POST['email'];
      $phone=$_POST['phone'];
      $department=$_POST['department'];
      $year=$_POST['year'];

      $sqlinsert="insert into student(roll, enroll, name, phone, email, year, department) 
      values('".$roll."' , '".$enroll."', '".$name."', '".$phone."', '".$email."', '".$year."', '".$department."')";
      mysql_query($sqlinsert);
      
      echo "<script> alert('Signed Up Successfully....'); </script>";
      echo "<script> window.location.href='add_stud.php'; </script>";
                  
		}
?>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  
  <script src="vendor/jquery-3.2.1.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="../js/main.js"></script>
</body>

</html>