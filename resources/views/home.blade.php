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
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
                <div class="sidebar-brand-icon">
                    <img src="image/faan.png">
                </div>
                <div class="sidebar-brand-text mx-3">FAAN</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link collapsed" href="/" aria-expanded="true" aria-controls="collapseForm">
                    <i class="fab fa-fw fa-wpforms"></i>
                    <span>Inventories</span>
                </a>

            </li>
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
                                @include('flash.flash')
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Total Inventories</h6>
                                    <form action="{{ route('search') }}" method="post" class="form-inline">
                                        @csrf
                                        <input class="form-control mr-sm-2" style="width: 70%" name="search"
                                            type="search" placeholder="Search By Item Or Category" aria-label="Search">
                                        <button class="btn btn-outline-primary my-2 my-sm-0"
                                            type="submit">Search</button>
                                    </form>
                                    <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter" id="#modalCenter">Add Inventories</button>
                                </div>
                                <div class="table-responsive p-3">
                                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Items</th>
                                                <th>Colour</th>
                                                <th>Area</th>
                                                <th>Content</th>
                                                <th>Category</th>
                                                <th>Status</th>
                                                <th>Date found</th>
                                                <th>Time</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @if (isset($inventories) && count($inventories) > 0)
                                                @foreach ($inventories as $inventory)
                                                    <tr>
                                                        <td>{{ $inventory->id }}</td>
                                                        <td>{{ $inventory->item }}</td>
                                                        <td>{{ $inventory->colour }}</td>
                                                        <td>{{ $inventory->area }}</td>
                                                        <td>{{ $inventory->content }}</td>
                                                        <td>{{ $inventory->category }}</td>
                                                        <td>{{ $inventory->status }}</td>
                                                        <td>{{ $inventory->date_found }}</td>
                                                        <td>{{ $inventory->time }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                            @if (isset($results) && count($results) > 0)
                                                @foreach ($results as $result)
                                                    <tr>
                                                        <td>{{ $result->id }}</td>
                                                        <td>{{ $result->item }}</td>
                                                        <td>{{ $result->colour }}</td>
                                                        <td>{{ $result->area }}</td>
                                                        <td>{{ $result->content }}</td>
                                                        <td>{{ $result->category }}</td>
                                                        <td>{{ $result->status }}</td>
                                                        <td>{{ $result->date_found }}</td>
                                                        <td>{{ $result->time }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Row-->

                    <!-- Modal Center -->
                    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalCenterTitle">Add Inventories
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="az-signup-header">
                                        <form action="{{ route('home') }}" method="POST">
                                            @csrf
                                            <h5>Fill The Form Below</h5>
                                            <div class="form-group">
                                                <input type="text" name="item" id="item" class="form-control"
                                                    placeholder="Item">
                                                <span class="text-danger">
                                                    @error('item')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="colour" class="form-control" id="colour"
                                                    placeholder="Colour">
                                                <span class="text-danger">
                                                    @error('colour')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="area" class="form-control"
                                                    placeholder="Area" />
                                                <span class="text-danger">
                                                    @error('area')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="content" class="form-control"
                                                    placeholder="Content" />
                                                <span class="text-danger">
                                                    @error('content')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <select name="category" id="roomfeatures" class="form-control">
                                                    <option value="">Category</option>
                                                    <option value="category">Category1</option>
                                                    <option value="category">Category2</option>
                                                    <option value="category">Category3</option>
                                                </select>
                                                <span class="text-danger">
                                                    @error('category')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="status" class="form-control"
                                                    placeholder="Status" />
                                                <span class="text-danger">
                                                    @error('status')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="date_found" class="form-control"
                                                    placeholder="Date Found" />
                                                <span class="text-danger">
                                                    @error('date_found')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="time" class="form-control"
                                                    placeholder="Time" />
                                                <span class="text-danger">
                                                    @error('time')
                                                        {{ $message }}
                                                    @enderror
                                                </span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-primary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>
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
