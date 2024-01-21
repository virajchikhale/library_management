<?php
  // Start the session
  session_start();
  if($_SESSION["user"]==""){
    echo "<script> alert('Please login....');</script>";
    echo '<script>window.location.href="index.php";</script>';
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
          <a class="nav-link text-white active bg-gradient-primary" href="issue_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Issue Book</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_issue.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Issue Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_stud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Add Student</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="add_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Add Books</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_book.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Books Report</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="report_stud.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Students Report</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <span class="btn btn-nooutline-primary mt-4 w-100"><?php echo  $ur['name'];?></span>
        <a class="btn bg-gradient-primary w-100" href="index.html" type="button">Logout</a>
      </div>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="../pages/sign-in.html" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign Out</span>
              </a>
            </li>
          </ul>
        </div>
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
                                  <h3 class="text-center title-2">Add Book in the System</h3>
                              </div>
                              <hr>                                
                              <div class="input-group input-group-outline my-3">
                                <label class="form-label">Search for Book</label>
                                <input type="text" id="search_book" class="form-control">
                              </div>
                              
                              <div class="input-group input-group-outline my-3">
                              <select class="form-control" id="Book_search" name="book"></select>
                              </div>

                              <div class="input-group input-group-outline my-3">
                                <label class="form-label">Search for Student</label>
                                <input type="text" id="search_stud" class="form-control">
                              </div>
                              
                              <div class="input-group input-group-outline my-3">
                                <select class="form-control" id="Stud_search" name="student"></select>
                              </div>

                              
                              <div class="input-group input-group-outline my-3">
                                <label class="form-label">Issue Date</label>
                                <input type="date" name="date" id="date" class="form-control">
                              </div>

                              <div class="input-group input-group-outline my-3">
                                <label class="form-label">Duration</label>
                                <input type="number" name="duration" id="duration" class="form-control" value = 7 >
                              </div>
                              <Button onclick=response() class="btn bg-gradient-primary w-100" type="button">Issue</Button>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>



    <div class="container-fluid py-4">
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
      </div>
    </div>
  </div>


  <?php

include('../includes/connection.php');
		if(isset($_POST['Submit'])){
      $name=$_POST['name'];
      $author=$_POST['author'];
      $category=$_POST['category'];
      $publication_year=$_POST['publication_year'];
      $publisher=$_POST['publisher'];
      $available_copies=$_POST['available_copies'];
      $total_copies=$_POST['total_copies'];
      $shelf=$_POST['shelf'];
      $price=$_POST['price'];

      $sqlinsert="insert into books(name, author, category, publication_year, publisher, available_copies, total_copies, shelf, price) 
      values('".$name."' , '".$author."', '".$category."', '".$publication_year."', '".$publisher."', '".$available_copies."', '".$total_copies."', '".$shelf."', '".$price."')";
      mysql_query($sqlinsert);
      
      echo "<script> alert('Signed Up Successfully....'); </script>";
      echo "<script> window.location.href='add_book.php'; </script>";
                  
		}
  // if($_POST['submit']=="submit"){



  //   // $i="select * from hod_reg where department_id='".$department."'";
  //   // $x=mysql_fetch_array(mysql_query($i));
  //   $sqlinsert="insert into student(roll, enroll, name, phone, email, year, department) 
  //   values('".$roll."' , '".$enroll."', '".$name."', '".$phone."', '".$email."', '".$year."', '".$department."')";

  //   echo($sqlinsert);

  //   // $res=mysql_query($sqlinsert);
  // }
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



    function response() {
        
        var book = $('#Book_search').val();
        var stud = $('#Stud_search').val();
        var issue_date = $('#date').val();
        var duration = parseInt($('#duration').val());
        var due_date = addDaysToDate(issue_date, duration);
        var return_date = addDaysToDate(issue_date, duration);
        // alert(issue_date);
        // alert(due_date);

      	$.ajax({
            type:'POST',
            url:'../sqloperations/issue_book.php',
            data:{book:book,
              stud:stud,
              issue_date:issue_date,
              return_date:return_date,
              due_date:due_date
      	},
        success:function(return_data) {
			// alert(return_data);
          if(return_data == "1"){
            alert('Someting went wrong!!!');
          }  else{
				alert('Book Issued....');
			}
	} 
      });
	}

        $(document).ready(function(){
            $("#search_book").on("keyup", function(){
                var searchText = $(this).val();
                if(searchText !== ''){
                    $.ajax({
                        url: '../sqloperations/search_book.php',
                        method: 'post',
                        data: {query: searchText},
                        success: function(response){
                            var books = response.split("~");
                            var dropdown = $("#Book_search");
                            dropdown.empty(); // Clear previous options
                            
                            for (var j = 0; j < books.length-1; j++) {
                                var bookInfo = books[j].split("|");
                                var title = bookInfo[2]; // Assuming the book title is the second part
                                
                                var option = $('<option/>', {
                                    value: title,
                                    text: bookInfo[2]+": "+bookInfo[0]
                                });
                                dropdown.append(option);
                            }
                        }
                    });
                } else {
                    $("#Book_search").empty(); // Clear dropdown if no search text
                }
            });
        });


        
        $(document).ready(function(){
            $("#search_stud").on("keyup", function(){
                var searchText = $(this).val();
                if(searchText !== ''){
                    $.ajax({
                        url: '../sqloperations/search_stud.php',
                        method: 'post',
                        data: {query: searchText},
                        success: function(response){
                            var books = response.split("~");
                            var dropdown = $("#Stud_search");
                            dropdown.empty(); // Clear previous options
                            
                            for (var j = 0; j < books.length-1; j++) {
                                var bookInfo = books[j].split("|");
                                var title = bookInfo[2]; // Assuming the book title is the second part
                                
                                var option = $('<option/>', {
                                    value: title,
                                    text: bookInfo[1]+": "+bookInfo[0]
                                });
                                dropdown.append(option);
                            }
                        }
                    });
                } else {
                    $("#Stud_search").empty(); // Clear dropdown if no search text
                }
            });
        });
    </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  <script src="../js/main.js"></script>
</body>

</html>