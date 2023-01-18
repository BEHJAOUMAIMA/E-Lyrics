<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="./dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #204c7b;">
        <div class="container-fluid">
            <!-- offcanvas trigger start -->
            <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
            </button>
            <!-- offcanvas trigger end -->
          <a class="navbar-brand fw-bold text-white text-uppercase me-auto" href="#">E-lyrics</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
            <form class="d-flex ms-auto" role="search">
                <div class="input-group my-3 my-lg-0">
                    <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-light me-lg-3" type="button" id="button-addon2"><i class="bi bi-search"></i></button>
                  </div>
            </form>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#"><span><i class="bi bi-music-note-beamed me-1"></i></span> Songs</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><span><i class="bi bi-box-arrow-right me-1"></i></span> Logout</a></li>
                  </ul>
                </li>
              </ul>
          </div>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- offcanvas start -->
    <div class="offcanvas offcanvas-start sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-body p-0">
            <nav>
                <ul class="navbar-nav">
                    <li>
                        <div class="text-white small fw-bold text-uppercase px-3">
                             CORE
                        </div>
                    </li>
                    <li class="">
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="my-4">
                        <hr class="line dropdown-divider"/>
                    </li>
                    <li>
                        <div class="text-white small fw-bold text-uppercase px-3">
                             Interface
                        </div>
                    </li>
                    <li>
                        <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <span class="me-2"><i class="bi bi-layout-split"></i></span>
                            <span>Layouts</span>
                            <span class="right-icon ms-auto"><i class="bi bi-chevron-down"></i></span>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="navbar-nav ps-3">
                                <li>
                                  <a href="#" class="nav-link px-3">
                                    <span class="me-2"
                                      ><i class="bi bi-speedometer2"></i
                                    ></span>
                                    <span>Dashboard</span>
                                  </a>
                                </li>
                              </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-3">
                          <span class="me-2"><i class="bi bi-book-fill"></i></span>
                          <span>Pages</span>
                        </a>
                      </li>
                      <li class="my-4"><hr class="line dropdown-divider bg-light" /></li>
                      <li>
                        <div class="text-white small fw-bold text-uppercase px-3 mb-3">
                          Addons
                        </div>
                      </li>
                      <li>
                        <a href="#" class="nav-link px-3">
                          <span class="me-2"><i class="bi bi-graph-up"></i></span>
                          <span>Charts</span>
                        </a>
                      </li>
                      <li>
                        <a href="#" class="nav-link px-3">
                          <span class="me-2"><i class="bi bi-table"></i></span>
                          <span>Tables</span>
                        </a>
                      </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- offcanvas end -->
    <main class="mt-5 py-4">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 fw-bold fs-3">
                    Dashboard
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 fw-bold fs-5 my-3">
                    Statistics
                </div>
            </div>
            <!-- Cards statistics start -->
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                        <div class="card-body py-5">Primary Card</div>
                        <div class="card-footer d-flex">
                          View Details
                          <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                          </span>
                        </div>  
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                      <div class="card-body py-5">Warning Card</div>
                      <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                          <i class="bi bi-chevron-right"></i>
                        </span>
                      </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card bg-dark text-white h-100">
                      <div class="card-body py-5">Success Card</div>
                      <div class="card-footer d-flex">
                        View Details
                        <span class="ms-auto">
                          <i class="bi bi-chevron-right"></i>
                        </span>
                      </div>
                    </div>
                </div>
            </div>
            <!-- cards statistics end -->
            <div class="row mt-5 pt-3" style="width: 90%; margin:auto;">
            <!-- Button ADD start -->
                <div class="row">
                  <div class="col-md-11 mb-4 pb-4">
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <span><i class="bi bi-plus"></i></span> Add new Song
                    </button>
                  </div>
                </div>
            <!-- Button ADD end -->
            <!-- Modal start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <form action="">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Song</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" value="" id="hideId" name="hideId">
                          <div class="mb-3">
                            <label for="songTitle" class="form-label">Song Title</label>
                            <input type="text" class="form-control" id="songTitle">
                          </div>
                          <div class="mb-3">
                            <label for="artist" class="form-label">Artist</label>
                            <input type="text" class="form-control" id="artist">
                          </div>
                          <div class="mb-3">
                            <label for="album" class="form-label">Album</label>
                            <input type="text" class="form-control" id="album">
                          </div>
                          <div class="mb-3">
                            <label for="year" class="form-label">Year of Creation</label>
                            <input type="number" class="form-control" id="year">
                          </div>
                          <div class="mb-3">
                            <label for="lyrics" class="form-label">Song Lyrics</label>
                            <textarea type="Text" class="form-control" name="lyrics" id="lyrics" rows="4"></textarea>
                          </div>
                          
                        </div>
                        <div class="another-div">
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success" id="addMore" name="addMore">Add</button>
                          <button type="button" class="btn btn-danger me-auto">Remove</button>
                          <button type="button" class="btn btn-primary">Save</button>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>  
                        </div>
                      </div>
                </div>
              </form> 
            </div>
            <!-- Modal end -->
                <!-- DataTable start -->
                <div class="row table-responsive">
                  <table id="dataTableId" class="table table-light table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Album</th>
                        <th scope="col"> Date</th>
                        <th scope="col">Song Lyrics</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- DataTable end -->
            </div>
        </div>
    </main>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dataTableId').DataTable();
    });
</script>
<script src="./script.js"></script>
</html>