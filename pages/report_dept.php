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
    Department Report
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <style>
        .hidden {
            display: none;
        }
    </style>
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
          <a class="nav-link text-white" href="add_stud.php">
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
          <a class="nav-link text-white active bg-gradient-primary" href="report_dept.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Department Report</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Department Report</h6>
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
                                  <h3 class="text-center title-2">Books Issued Departmentwise</h3>
                              </div>
                              <hr>
                              <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deparment</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Count of Books</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                <?php
                                  include ('../../includes/connection.php');
                                  $ur = mysql_fetch_array(mysql_query("select * from admin_reg where email='".$_SESSION["user"]."'"));
                                  $res = mysql_query("select * from issue where status='0'");
                                  $id = 1;
                                  $en_1=0;
                                  $en_2=0;
                                  $en_3=0;
                                  $cs_1=0;
                                  $cs_2=0;
                                  $cs_3=0;
                                  $it_1=0;
                                  $it_2=0;
                                  $it_3=0;
                                  $el_1=0;
                                  $el_2=0;
                                  $el_3=0;
                                  $cv_1=0;
                                  $cv_2=0;
                                  $cv_3=0;
                                  $me_1=0;
                                  $me_2=0;
                                  $me_3=0;
                                  $au_1=0;
                                  $au_2=0;
                                  $au_3=0;
                                  while($row = mysql_fetch_array($res))
                                  {
                                    $book = mysql_query("select * from books where id = '".$row['book_id']."'");
                                    $book1 = mysql_fetch_array($book);
                                    $stud = mysql_query("select * from student where id = '".$row['stud_id']."'");
                                    $stud1 = mysql_fetch_array($stud);
                                    $department=$stud1['department'];
                                    $year=$stud1['year'];
                                    if($department==1 && $year==1){
                                      $en_1=$en_1+1;
                                    }else if($department==1 && $year==2){
                                      $en_2=$en_2+1;
                                    }else if($department==1 && $year==3){
                                      $en_3=$en_3+1;
                                    }else if($department==2 && $year==1){
                                      $cs_1=$cs_1+1;
                                    }else if($department==2 && $year==2){
                                      $cs_2=$cs_2+1;
                                    }else if($department==2 && $year==3){
                                      $cs_3=$cs_3+1;
                                    }else if($department==3 && $year==1){
                                      $it_1=$it_1+1;
                                    }else if($department==3 && $year==2){
                                      $it_2=$it_2+1;
                                    }else if($department==3 && $year==3){
                                      $it_3=$it_3+1;
                                    }else if($department==4 && $year==1){
                                      $el_1=$el_1+1;
                                    }else if($department==4 && $year==2){
                                      $el_2=$el_2+1;
                                    }else if($department==4 && $year==3){
                                      $el_3=$el_3+1;
                                    }else if($department==5 && $year==1){
                                      $cv_1=$cv_1+1;
                                    }else if($department==5 && $year==2){
                                      $cv_2=$cv_2+1;
                                    }else if($department==5 && $year==3){
                                      $cv_3=$cv_3+1;
                                    }else if($department==6 && $year==1){
                                      $me_1=$me_1+1;
                                    }else if($department==6 && $year==2){
                                      $me_2=$me_2+1;
                                    }else if($department==6 && $year==3){
                                      $me_3=$me_3+1;
                                    }else if($department==7 && $year==1){
                                      $au_1=$au_1+1;
                                    }else if($department==7 && $year==2){
                                      $au_2=$au_2+1;
                                    }else if($department==7 && $year==3){
                                      $au_3=$au_3+1;
                                    }

                                    $id++; } 
                                    // echo $stud1['department'];
                                    // echo $it;
                              ?>
                                  <tr>
                                    <td>
                                      Electrnics and Telecommunication
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $en_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Electrnics and Telecommunication
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $en_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Electrnics and Telecommunication
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $en_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Computer
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $cs_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Computer
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $cs_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Computer
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $cs_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Information Technology
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $it_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Information Technology
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $it_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Information Technology
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $it_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Electronics
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $el_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Electronics
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $el_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Electronics
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $el_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Civil
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $cv_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Civil
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $cv_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Civil
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $cv_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Mechanical
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $me_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Mechanical
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $me_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Mechanical
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $me_3;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Automobile
                                    </td>
                                    <td>
                                      First Year
                                    </td>
                                    <td>
                                      <?php echo $au_1;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Automobile
                                    </td>
                                    <td>
                                      Second Year
                                    </td>
                                    <td>
                                      <?php echo $au_2;?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      Automobile
                                    </td>
                                    <td>
                                      Third Year
                                    </td>
                                    <td>
                                      <?php echo $au_3;?>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <?php include('footer.php');?>
  </main>
  
<?php

		if(isset($_POST['sign'])){
      session_destroy();
      
      echo "<script> alert('Signed Out Successfully....'); </script>";
      echo "<script> window.location.href='sign-in.html'; </script>";
                  
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

  function addDaysToDate(inputDateString, daysToAdd) {
            // Convert input string to Date object
            var inputDate = new Date(inputDateString);

            // Add specified number of days
            inputDate.setDate(inputDate.getDate() + daysToAdd);

            // Format the result as "YYYY-MM-DD"
            var year = inputDate.getFullYear();
            var month = ('0' + (inputDate.getMonth() + 1)).slice(-2);
            var day = ('0' + inputDate.getDate()).slice(-2);

            return year + '-' + month + '-' + day;
        }

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