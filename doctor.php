<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <?php include('navbar.php');?>
 <br><br><br>
     <!-- tables -->
    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="col-lg-12 mb-4">
                  <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                          <b>
                        Doctor Details
                          </b></div>
                          <br>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Add Doctor
                          </button>
                          <!-- Modal -->
                          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLongTitle">Add Doctor</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <form action="" method="POST" enctype="multipart/form-data">

                                <div class="modal-body">
                                  <div class="form-group ">
                                    <label for="">Name</label>
                                      <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Enter Name">
                                    </div>
                                    <div class="form-group ">
                                      <label for="">Contact 1</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Enter Contact" required>
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Contact 2</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Enter Contact">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Email</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Enter Email">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Flat Number</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Flat Number">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Street</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Street">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">City</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="City">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">State</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="State">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Country</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Country">
                                      </div>
                                    <div class="form-group ">
                                      <label for="">Pincode</label>
                                        <input type="text" name="bnum1"required class="form-control" id="exampleFirstName" placeholder="Pincode">
                                      </div>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Add</button>
                                </div>
                              </div>
                            </div>
                          </div>
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Doctors</h3>
                <table class="table table-striped bg-light text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Contact No1</th>
                      <th>Contact No1</th>
                      <th>Email</th>
                      <th>Flat No.</th>
                      <th>Street</th>
                      <th>City</th>
                      <th>State</th>
                      <th>Country</th>
                      <th>Pincode</th>
                      
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th>1</th>
                      <td>John</td>
                      <td>123456789</td>
                      <td>123456789</td>
                      <td>example@gmaik.com</td>
                      <td>20</td>
                      <td>XYZ,Alabwa</td>
                      <td>XXX</td>
                      <td>YZX</td>
                      <td>UAE</td>
                      <td>123456</td>
                      
                    </tr>
                   
                  </tbody>
                </table>

                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- end of pagination -->

              </div>
              <!-- end of pagination -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>
