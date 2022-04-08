<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="img/logo/logo.png" rel="icon">
    <title>FAAN- Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/logo/logo2.png">
                </div>
                <div class="sidebar-brand-text mx-3">FAAN</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Features
            </div>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Forms</span>
                </a>
                <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Forms</h6>
                        <a class="collapse-item" href="form_basics.html">Form Basics</a>
                        <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true" aria-controls="collapseTable">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span>
                </a>

            </li>



            <hr class="sidebar-divider">
            <div class="version" id="version-ruangadmin"></div>
        </ul>
        <!-- Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- TopBar -->


                <!-- Container Fluid-->
                <div class="container-fluid" id="container-wrapper">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </div>

                    <!-- Row -->
                    <div class="row">
                        <!-- Datatables -->

                        <!-- DataTable with Hover -->
                        <div class="col-lg-12">
                            <div class="card mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">DataTables with Hover</h6>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" id="#modalCenter">Launch Modal Vertically Centered</button>
                                </div>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
                                            </tr>

                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>Customer Support</td>
                                                <td>New York</td>
                                                <td>27</td>
                                                <td>2011/01/25</td>
                                                <td>$112,000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Center -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Modal Vertically Centered</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="az-signup-header">
                                        <!--
    <h2>Personal Information</h2>
    <h4>Fill all form field to go to next step (Boarding Pass, Stamped Page of Passport and recaptcha are required)</h4>
-->
                                        <form id="msform" action="register" method="POST" onsubmit="return validateForm()" enctype="multipart/form-data">
                                            <!-- progressbar -->
                                            <fieldset>
                                                <h2>Personal Information</h2>
                                                <p>Fill all form field to go to next step</p>
                                                <div class="form-group">
                                                    <label>Email Address </label>
                                                    <input type="email" name="username" id="username" class="form-control" placeholder="Enter Your Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Full Name </label>
                                                    <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter Your Full Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone Number </label>
                                                    <input type="text" name="phone_no" class="form-control" placeholder="Enter Your Phone Number" />
                                                </div>
                                                <div class="form-group">
                                                    <label>Address </label>
                                                    <input type="text" name="address" class="form-control" placeholder="Enter Your Residential Adress" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="boarding pass">Country</label>
                                                    <input type="text" name="country" class="form-control" placeholder="Country" />
                                                </div>
                                                <div class="form-group">
                                                    <label for="boarding pass">State</label>
                                                    <input type="text" name="state" class="form-control" placeholder="State" />
                                                </div>
                                                <button class="btn btn-az-primary btn-block next action-button" onclick="nextButton(event)" value="Next Step" id="regBtn">NEXT</button>
                                            </fieldset>
                                            <fieldset style="display:none">
                                                <h2 class="fs-title">Flight And Item Information</h2>
                                                <p>(Boarding Pass, Stamped Page of Passport and recaptcha are required)</p>
                                                <input type="button" name="previous" class="previous action-button-previous btn btn-block btn-outline-indigo" value="Previous" />
                                                <div class="row">
                                                    <div class="form-group col-12">
                                                        <label>Flight Number </label>
                                                        <input type="text" name="flight_no" class="form-control" placeholder="Enter Your Flight Number" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="boarding pass"><strong>Upload your Boarding Pass</strong></label>
                                                        <input type="file" name="data[board]" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="boarding pass"><strong>Upload Stamped Page of Passport</strong></label>
                                                        <input type="file" name="data[stamp]" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-12">
                                                        <label for="boarding pass">Item</label>
                                                        <input type="text" name="item" placeholder="Enter missing Item" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="boarding pass">Item Color</label>
                                                        <input type="text" name="color" placeholder="Enter color of Item" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="boarding pass">Item Weight</label>
                                                        <input type="text" name="weight" placeholder="Enter weight of Item" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="boarding pass">Brand</label>
                                                        <input type="text" name="brand" placeholder="Brand of Item" class="form-control" />
                                                    </div>
                                                    <div class="form-group col-6">
                                                        <label for="boarding pass">Image</label>
                                                        <input type="file" name="data[img]" />
                                                    </div>
                                                    <div class="col-md-12">
                                                        <span class="msg-error error"></span>
                                                        <div class="g-recaptcha" id="recaptcha" data-type="image" data-sitekey="6LcfuYwaAAAAADdkt20AY4ztBJuoGk4gR4ts4k6w"></div>
                                                    </div>
                                                </div>

                                                <input type="submit" class="btn btn-az-primary btn-block action-button" id="post" value="Submit" /><br>
                                            </fieldset>
                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Footer -->

                </div>
            </div>

            <!-- Scroll to top -->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <script src="js/ruang-admin.min.js"></script>
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>