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
    Student Report 
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
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

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
          <a class="nav-link text-white active bg-gradient-primary" href="report_stud.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Student Report</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Student Report</h6>
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
                                  <h3 class="text-center title-2">Students Present in the system</h3>
                              </div>
                              <hr>
                              <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Details</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Year</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Department</th>
                                    <th class="text-secondary opacity-7"></th>
                                    <th class="text-secondary opacity-7"></th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                <?php
                                  include ('../../includes/connection.php');
                                  $ur = mysql_fetch_array(mysql_query("select * from admin_reg where email='".$_SESSION["user"]."'"));
                                  $res = mysql_query("select * from student");
                                  $id = 1;
                                  while($row = mysql_fetch_array($res))
                                  {
                              ?>
                                  <tr>
                                    <td>
                                      <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $row['name']; ?></h6>
                                          <p class="text-xs text-secondary mb-0"><b>Roll No.:</b> <?php echo $row['roll']; ?></p>
                                          <p class="text-xs text-secondary mb-0"><b>Enrollment No.r:</b><?php echo $row['enroll']; ?></p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="text-xs font-secondary mb-0"><b>Phone No.:</b><?php echo $row['phone']; ?></p>
                                      <p class="text-xs text-secondary mb-0"><b>Email :</b><?php echo $row['email']; ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                      <span class="text-secondary text-xs font-weight-bold">
                                      <?php if($row['year']=='1'){
                                        echo "First Year";
                                      }else if($row['year']=='2'){
                                        echo "Second Year";
                                      }else if($row['year']=='3'){
                                        echo "Third Year";
                                      }else if($row['year']=='0'){
                                        echo "Not Defiend";
                                      } ?>
                                    </span>
                                    </td>
                                    <td class="align-middle text-center">
                                      <span class="text-secondary text-xs font-weight-bold">
                                      <?php if($row['department']=='1'){
                                        echo "Computer";
                                      }else if($row['department']=='2'){
                                        echo "Information Tecnology";
                                      }else if($row['department']=='3'){
                                        echo "EnTC";
                                      }else if($row['department']=='4'){
                                        echo "Electric";
                                      }else if($row['department']=='0'){
                                        echo "Not Defiend";
                                      } ?></span>
                                    </td>
                                    <td class="align-middle">
                                      <a data-toggle="modal" data-target="#returnModal_<?php echo $row['id'];?>" class="text-info font-weight-bold text-xs" style="margin-left:40%;" data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                      </a>
                                    </td>
                                    <td class="align-middle">
                                      <a data-toggle="modal" data-target="#delete_<?php echo $row['id'];?>" class="text-danger font-weight-bold text-xs" style="margin-left:40%;" data-toggle="tooltip" data-original-title="Edit user">
                                        Delete
                                      </a>
                                    </td>
                                  </tr>

                                  <!-- update model -->
                                  <div class="modal fade" id="returnModal_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      
                                      <?php  $query1="SELECT * FROM student where id='".$row['id']."' ";
                                          $query_run2=mysql_query($query1);
                                          $results = mysql_fetch_array($query_run2);
                                          //echo $results['keyword']; 
                                          // echo $results['question']; 					  
                                      ?>
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Edit Student Info</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                              </div>
                                          
                                              <div class="modal-body">
                                                <form  method="POST" enctype="multipart/form-data">
                                        
                                                    <div class="form-group mb-3">
                                                    <label for="">ID: <?php echo $results['id']; ?></label><br>
                                                    <label for="">Roll No.</label><input type="text" name="roll" class="form-control" value="<?php echo $results['roll']; ?>">
                                                    <label for="">Enrollment No.</label><input type="text" name="enroll" class="form-control" value="<?php echo $results['enroll']; ?>">
                                                    <label for="">Name</label><input type="text" name="name" class="form-control" value="<?php echo $results['name']; ?>">
                                                    <label for="">Phone Number</label><input type="text" name="phone" class="form-control" value="<?php echo $results['phone']; ?>">
                                                    <label for="">Email</label><input type="email" name="email" class="form-control" value="<?php echo $results['email']; ?>">

                                                    </div>
                                                    <div class="form-group mb-3">
                                                    <button type="submit" name="update_<?php echo $row['id']; ?>" class="btn btn-success">update</button>
                                                    </div>

                                                </form>
                                              </div> 
                                          </div>
                                      </div>
                                  </div>

                                  <?php if(isset($_POST['update_'.$row['id']]))
                                    {		
                                    $roll=$_POST['roll'];
                                    $enroll=$_POST['enroll'];
                                    $name=$_POST['name'];
                                    $phone=$_POST['phone'];
                                    $email=$_POST['email'];

                        
                                        $que="UPDATE `student` SET `roll`='".$roll."',`enroll`='".$enroll."' ,`name`='".$name."',`phone`='".$phone."' ,`email`='".$email."'  WHERE id='".$row['id']."'" ;
                                        mysql_query($que);
                                        
                                        echo "<script> alert('Updated Successfully....');</script>";
                                        echo '<script>window.location.href="report_stud.php";</script>';
                                    }?>


                                    <div class="modal fade" id="delete_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-danger" id="exampleModalLongTitle" style="text-align: center;font-size: 25px;">DELETE</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure want to delete this Student......? </p>
                                        </div>
                                        <div class="modal-footer">
                                        <form  method="POST" enctype="multipart/form-data">
                                            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                                            <button type="submit" name="delete_<?php echo $row['id']; ?>" class="btn btn-success">Delete</button>
                                        </form>
                                        </div>
                                    </div>
                                      </div>
                                  </div>
                                  
                                      <?php if(isset($_POST['delete_'.$row['id']]))
                                    {		 
                                      $que = "delete from student where id = '".$row['id']."' ";
                                    mysql_query($que);
                                              echo "<script> alert('Deleted Successfully....');</script>";
                                    echo '<script>window.location.href="report_stud.php";</script>';
                                  }
                                  $id++; }
                                    ?>
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