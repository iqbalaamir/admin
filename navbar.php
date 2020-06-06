<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#home").click(function(){
    $("a").removeClass("current");
    $("#home").addClass("current");
  });
});
$(document).ready(function(){
  $("#emp").click(function(){
    $("a").removeClass("current");
    $("#emp").addClass("current");
  });
});
$(document).ready(function(){
  $("#child").click(function(){
    $("a").removeClass("current");
    $("#child").addClass("current");
  });
});
$(document).ready(function(){
  $("#act").click(function(){
    $("a").removeClass("current");
    $("#act").addClass("current");
  });
});
$(document).ready(function(){
  $("#bill").click(function(){
    $("a").removeClass("current");
    $("#bill").addClass("current");
  });
});
$(document).ready(function(){
  $("#meal").click(function(){
    $("a").removeClass("current");
    $("#meal").addClass("current");
  });
});
$(document).ready(function(){
  $("#doct").click(function(){
    $("a").removeClass("current");
    $("#doct").addClass("current");
  });
});
$(document).ready(function(){
  $("#supp").click(function(){
    $("a").removeClass("current");
    $("#supp").addClass("current");
  });
});
</script>


<nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">DayCare</a>
              <div class="bottom-border pb-3">
                <img src="images/aamir.jpg" width="50" class="rounded-circle mr-3">
                <a href="profile.php" class="text-white">Name</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="index.php" id="home" class="nav-link text-white p-3 mb-2 sidebar-link "><i class="fas fa-home text-light fa-lg mr-3"></i>Home</a></li>
                <li class="nav-item"><a href="employee.php" id="emp"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Employee</a></li>
                <li class="nav-item"><a href="child.php" id="child"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-child text-light fa-lg mr-3"></i>Child</a></li>
                <li class="nav-item"><a href="activity.php" id="act" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-volleyball-ball  text-light fa-lg mr-3"></i>Activities</a></li>
                <li class="nav-item"><a href="bill.php" id="bill" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fa fa-credit-card text-light fa-lg mr-3"></i>Bills</a></li>
                <li class="nav-item"><a href="meal.php" id="meal"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-utensils text-light fa-lg mr-3"></i>Meals</a></li>
                <li class="nav-item"><a href="doctor.php" id="doct" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-briefcase-medical text-light fa-lg mr-3"></i>Doctor</a></li>
                <li class="nav-item"><a href="supplier.php" id="supp"class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-dolly text-light fa-lg mr-3"></i>Supplier</a></li>
				<hr>
              </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-primary fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
                <div class="col-md-5">
                 <!--  <form>
                    <div class="input-group">
                      <input type="text" class="form-control search-input" placeholder="Search...">
                      <button type="button" class="btn btn-white search-button"><i class="fas fa-search text-danger"></i></button>
                    </div>
                  </form> -->
                </div>
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item ml-md-auto"><a href="#" class="nav-link" data-toggle="modal" data-target="#sign-out"><i class="fas fa-sign-out-alt text-danger fa-lg"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->