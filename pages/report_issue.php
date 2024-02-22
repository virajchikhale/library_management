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
    Issue Report
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
          <a class="nav-link text-white active bg-gradient-primary" href="report_issue.php">
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Issue Report</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Issue Report</h6>
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
                                  <h3 class="text-center title-2">Books Issued by the Students</h3>
                              </div>
                              <hr>
                              <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Record ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Student Info</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Book Info</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Dates</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Delay</th>
                                    <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fine</th> -->
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Renew</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Return</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                <?php
                                  include ('../../includes/connection.php');
                                  $ur = mysql_fetch_array(mysql_query("select * from admin_reg where email='".$_SESSION["user"]."'"));
                                  $res = mysql_query("select * from issue where status='0'");
                                  $id = 1;
                                  while($row = mysql_fetch_array($res))
                                  {
                                    $book = mysql_query("select * from books where id = '".$row['book_id']."'");
                                    $book1 = mysql_fetch_array($book);
                                    $stud = mysql_query("select * from student where id = '".$row['stud_id']."'");
                                    $stud1 = mysql_fetch_array($stud);

                              ?>
                                  <tr>
                                    <td>
                                      <p class="text-xs font-secondary mb-0"><?php echo $row['id']; ?></p>
                                    </td>
                                    <td>
                                      <p class="text-xs font-secondary mb-0"><b>Enrollment No.: </b><?php echo $stud1['enroll']; ?></p>
                                      <p class="text-xs text-secondary mb-0"><b>Student Name: </b><?php echo $stud1['name']; ?></p>
                                    </td>
                                    <td>
                                      <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                          <h6 class="mb-0 text-sm"><?php echo $book1['name']; ?></h6>
                                          <p class="text-xs text-secondary mb-0"><b>Book ID:</b> <?php echo $book1['id']; ?></p>
                                          <p class="text-xs text-secondary mb-0"><b>Author:</b><?php echo $book1['author']; ?></p>
                                        </div>
                                      </div>
                                    </td>
                                    <td>
                                      <p class="text-xs font-secondary mb-0"><b>Issue Date: </b><?php echo $row['issue_date']; ?></p>
                                      <p class="text-xs text-secondary mb-0"><b>Due Date: </b><?php echo $row['due_date']; ?></p>
                                    </td>
                                    <td class="align-middle text-center">
                                      <span class="text-secondary text-xs font-weight-bold">
                                      <?php

                                        $datetime1 = new DateTime($row['due_date']);
                                        $datetime2 = new DateTime(date("Y-m-d"));

                                        if ($datetime2 >= $datetime1) {
                                        $interval = $datetime1->diff($datetime2);
                                        $daysDifference = max(0, $interval->days);
                                        echo "<p class='text-danger text-sm font-weight-bold'>".$daysDifference . " Days<p>";
                                      } else {
                                        // $date2 has passed $date1, so the difference is 0
                                        $daysDifference = 0;
                                        echo "<p class='text-success text-sm font-weight-bold'>0 days<p>";
                                    }

                                    $fine = $daysDifference*5
                                        ?>
                                    
                                    </span>
                                    </td>
                                    <!-- <td class="align-middle text-center">
                                      <span class="text-info text-xs font-weight-bold">Rs. <?php echo $fine; ?></span>
                                    </td> -->
                                    <td class="align-middle">
                                      <a data-toggle="modal" data-target="#renewModal_<?php echo $row['id'];?>"  class="text-success font-weight-bold text-xs" style="margin-left:40%;" data-toggle="tooltip" data-original-title="Edit user">
                                      <span class="material-symbols-outlined">autorenew</span>
                                      </a>
                                    </td>
                                    <td class="align-middle">
                                       <a data-toggle="modal" data-target="#returnModal_<?php echo $row['id'];?>" class="text-warning font-weight-bold text-xs" style="margin-left:40%;" data-toggle="tooltip" data-original-title="Edit user">
                                        <span class="material-symbols-outlined">laps</span>
                                      </a>
                                  </tr>

                                  <!-- update model -->
                                  <div class="modal fade" id="returnModal_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      
                                      <?php  $query1="SELECT * FROM issue where id='".$row['id']."' ";
                                          $query_run2=mysql_query($query1);
                                          $results = mysql_fetch_array($query_run2);
                                          //echo $results['keyword']; 
                                          // echo $results['question']; 					  
                                      ?>
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Book To Be Returned</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                              </div>
                                          
                                              <div class="modal-body">
                                                  <form  method="POST" enctype="multipart/form-data">
                                          
                                                      <div class="form-group mb-3">
                                                        <h6 class="font-weight-bolder mb-0">ID: <?php echo $results['id']; ?></h6>
                                                        <div class="input-group input-group-outline my-3">
                                                          <label class="form-label">Fine to be take for single day</label><input type="text" id="amount_2_<?php echo $results['id']; ?>" class="form-control" value="2">
                                                          <input type="hidden" id="days_2_<?php echo $results['id']; ?>" class="form-control" value="<?php echo $daysDifference;?>">
                                                        </div> 
                                                      </div>
                                                      <h6 class="font-weight-bolder mb-0 text-danger" id="result_2_<?php echo $results['id']; ?>"></h6>
                                                      <div class="form-group mb-3">
                                                      <button type="button" id="cala_<?php echo $results['id']; ?>" onclick="cal_2_<?php echo $results['id']; ?>()" class="btn btn-warning">Calculet</button>
                                                      <a type="button" id="update_<?php echo $results['id']; ?>" onclick="returned_<?php echo $results['id']; ?>()" class="btn btn-success hidden">update</a>
                                                      </div>

                                                  </form>
                                              </div> 
                                          </div>
                                      </div>
                                  </div>


                                  
                                  <!-- update model -->
                                  <div class="modal fade" id="renewModal_<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                      
                                      <?php  $query1="SELECT * FROM issue where id='".$row['id']."' ";
                                          $query_run2=mysql_query($query1);
                                          $results = mysql_fetch_array($query_run2);
                                          //echo $results['keyword']; 
                                          // echo $results['question']; 					  
                                      ?>
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLongTitle">Book To Be Returned</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <span aria-hidden="true">&times;</span>
                                                      </button>
                                              </div>
                                          
                                              <div class="modal-body">
                                                  <form  method="POST" enctype="multipart/form-data">
                                          
                                                      <div class="form-group mb-3">
                                                        <h6 class="font-weight-bolder mb-0">ID: <?php echo $results['id']; ?></h6>
                                                        <div class="input-group input-group-outline my-3">
                                                          <label class="form-label">Fine to be take for single day</label><input type="text" id="amount_1_<?php echo $results['id']; ?>" class="form-control" value="2">
                                                          <input type="hidden" id="days_1_<?php echo $results['id']; ?>" class="form-control" value="<?php echo $daysDifference;?>">
                                                        </div> 
                                                      </div>
                                                      <h6 class="font-weight-bolder mb-0 text-danger" id="result_1_<?php echo $results['id']; ?>"></h6>
                                                      <div class="form-group mb-3">
                                                      <button type="button" id="cala_1_<?php echo $results['id']; ?>" onclick="cal_1_<?php echo $results['id']; ?>()" class="btn btn-warning">Calculet</button>
                                                      <a type="button" id="update_1_<?php echo $results['id']; ?>" onclick="renew_<?php echo $results['id']; ?>()" class="btn btn-success hidden">update</a>
                                                      </div>

                                                  </form>
                                              </div> 
                                          </div>
                                      </div>
                                  </div>

                                  <script>
                                     function cal_2_<?php echo $results['id']; ?>(){
                                      var amount = $('#amount_2_<?php echo $results['id']; ?>').val();
                                      var days = $('#days_2_<?php echo $results['id']; ?>').val();
                                      document.getElementById("result_2_<?php echo $results['id']; ?>").innerText = "Fine: Rs. " + (amount*days);
                                      document.getElementById("update_2_<?php echo $results['id']; ?>").classList.remove("hidden");
                                      document.getElementById("cala_2_<?php echo $results['id']; ?>").classList.add("hidden");
                                    }

                                    function cal_1_<?php echo $results['id']; ?>(){
                                      var amount = $('#amount_1_<?php echo $results['id']; ?>').val();
                                      var days = $('#days_1_<?php echo $results['id']; ?>').val();
                                      document.getElementById("result_1_<?php echo $results['id']; ?>").innerText = "Fine: Rs. " + (amount*days);
                                      document.getElementById("update_1_<?php echo $results['id']; ?>").classList.remove("hidden");
                                      document.getElementById("cala_1_<?php echo $results['id']; ?>").classList.add("hidden");
                                    }

                                    

                                    function renew_<?php echo $results['id']; ?>() {

                                            var today = new Date();
                                            var year = today.getFullYear();
                                            var month = today.getMonth() + 1; // Note: Months are zero-based, so we add 1
                                            var day = today.getDate();
                                            var formattedDate = year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

                                            
                                            var book_id = <?php echo $results['id']; ?>;
                                            var book = <?php echo $results['book_id']; ?>;
                                            var stud = <?php echo $results['stud_id']; ?>;
                                            var issue_date = formattedDate;
                                            var duration = 7;
                                            var due_date = addDaysToDate(issue_date, duration);
                                            var amount = $('#amount_<?php echo $results['id']; ?>').val();
                                            // alert(issue_date);
                                            // alert(due_date);


                                            
                                            $.ajax({
                                                type:'POST',
                                                url:'../sqloperations/issue_book.php',
                                                data:{book:book,
                                                  stud:stud,
                                                  issue_date:issue_date,
                                                  due_date:due_date
                                            },
                                            success:function(return_data) {
                                          // alert(return_data);
                                              if(return_data == "1"){
                                                alert('Someting went wrong!!!');
                                              }  else{
                                            // alert('Book Issued....');
                                          }
                                      } 
                                          });

                                            $.ajax({
                                                type:'POST',
                                                url:'../sqloperations/return_book.php',
                                                data:{book_id:book_id,
                                                  book:book,
                                                  amount:amount
                                            },
                                            success:function(return_data) {
                                          // alert(return_data);
                                              if(return_data == "1"){
                                                alert('Someting went wrong!!!');
                                              }  else{
                                            alert('Book Renewed....');
                                            window.location.href="report_issue.php";
                                          }
                                      } 
                                          });
                                          
                                      }

                                      function returned_<?php echo $results['id']; ?>() {
                                            
                                            var book_id = <?php echo $results['id']; ?>;
                                            var book = <?php echo $results['book_id']; ?>;
                                            var amount = $('#amount_<?php echo $results['id']; ?>').val();
                                            // alert(book_id);
                                            // alert(date);

                                            $.ajax({
                                                type:'POST',
                                                url:'../sqloperations/return_book.php',
                                                data:{book_id:book_id,
                                                  book:book,
                                                  amount:amount
                                            },
                                            success:function(return_data) {
                                          // alert(return_data);
                                              if(return_data == "1"){
                                                alert('Someting went wrong!!!');
                                              }  else{
                                            alert('Book Returned....');
                                            window.location.href="report_issue.php";
                                          }
                                      } 
                                          });
                                          
                                      }

                                  </script>

                                  <?php
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