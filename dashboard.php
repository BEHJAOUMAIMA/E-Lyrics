<?php
  include("./Classes/songClasses.php");
?>
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
    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->
    <!-- BEGIN jquery js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END jquery js-->
    <!-- BEGIN parsley js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- END parsley js-->
    <link rel="stylesheet" href="./CSS/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #0b2036;">
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
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-fill"></i>
                    <?php if(isset($_SESSION["admin"])){
                        echo $_SESSION["admin"];
                      }
                    ?>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <form action="./Classes/login-inc.php" method="GET" name="logout">
                      <li><button class="dropdown-item" type="submit" name="logoutBtn" id="logoutBtn"><span><i class="bi bi-box-arrow-right me-1"></i></span> Logout</button></li>
                    </form>
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
                <ul class="navbar-nav mt-5">
                    <li class=" mb-3">
                        <a href="#" class="nav-link px-3 active">
                            <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    
                      <li class="mb-3">
                        <a href="#charts" class="nav-link px-3">
                          <span class="me-2"><i class="bi bi-graph-up"></i></span>
                          <span>Statistics</span>
                        </a>
                      </li>
                      <li class=" mb-3">
                        <a href="#dataTableId" class="nav-link px-3">
                          <span class="me-2"><i class="bi bi-music-note-list"></i></i></span>
                          <span>Songs</span>
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
            <div class="row" id="charts">
                <div class="col-md-4 mb-3">
                    <div class="card text-white h-100 analytics">
                        <div class="card-body py-5">
                          <h6 class="card-title mb-4 fs-6 fw-bold text-white">Total Admins</h6>
                          <p class="card-text text-end fs-6 fw-semibold text-white">
                            <?php
                              $analytics = new Song;
                              echo $analytics->statistics('Admins');
                            ?>
                          </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white h-100 analytics">
                      <div class="card-body py-5">
                          <h6 class="card-title mb-4 fs-6 fw-bold text-white">Total Titles Songs</h6>
                          <p class="card-text text-end fs-6 fw-semibold text-white">
                            <?php
                              $analytics = new Song;
                              echo $analytics->statistics('Titles');
                            ?>
                          </p>
                      </div>   
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-white h-100 analytics">
                      <div class="card-body py-5">
                        <h6 class="card-title mb-4 fs-6 fw-bold text-white">Total Artists</h6>
                        <p class="card-text text-end fs-6 fw-semibold text-white">
                          <?php
                            $analytics = new Song;
                            echo $analytics->statistics('Artists');
                          ?>
                        </p>
                      </div>
                    </div>
                </div>
            </div>
            <!-- cards statistics end -->
            <div class="row mt-5 pt-3" style="width: 97%; margin:auto;">
            <!-- Button ADD start -->
                <div class="row">
                  <div class="col-md-11 mb-4 pb-4">
                    <button onclick="addNew();" type="button" id="addNew" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                     <span><i class="bi bi-plus"></i></span> Add new Song
                    </button>
                  </div>
                </div>
            <!-- Button ADD end -->
            <!-- Modal start -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <form action="./Classes/song-inc.php" method="post" id="form" data-parsley-validate>
                <div class="modal-dialog modal-dialog-centered modal-lg">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Add Song</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" value="" id="hideId" name="Id">
                          <div class="mb-3">
                            <label for="songTitle" class="form-label">Song Title</label>
                            <input type="text" name="title[]" class="form-control" id="songTitle" required data-parsley-minlength="6" data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3">
                            <label for="artist" class="form-label">Artist</label>
                            <input type="text" name="artist[]" class="form-control" id="artist" required data-parsley-minlength="6" data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3">
                            <label for="album" class="form-label">Album</label>
                            <input type="text" name="album[]" class="form-control" id="album" required data-parsley-minlength="6" data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3">
                            <label for="year" class="form-label">Year of Creation</label>
                            <input type="number" name="year[]" class="form-control" id="year" required data-parsley-maxlength="4" data-parsley-type="integer" data-parsley-trigger="keyup">
                          </div>
                          <div class="mb-3">
                            <label for="lyrics" class="form-label">Song Lyrics</label>
                            <textarea type="Text" class="form-control" name="lyrics[]" id="lyrics" rows="4"></textarea>
                          </div>
                          
                        </div>
                        <div class="another-div">
                        </div>
                        <div class="modal-footer">

                          <button type="button" class="btn btn-success me-auto" id="addMore" name="addMore">Add</button>
                          <button type="submit" class="btn btn-warning" id="updateBtn" name="updateBtn">Update</button>
                          <button type="submit" class="btn btn-primary px-3" id="saveBtn" name="saveBtn">Save</button> 
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="closeBtn">Close</button>
                          <button type="submit" class="btn btn-danger px-3" id="deleteBtn" name="deleteBtn">Delete</button>                                                  </div>
                      </div>
                </div>
              </form> 
            </div>
            <!-- Modal end -->
                <!-- DataTable start -->
                <?php
                $song = new Song;
                $melodies = $song->readSong();
                ?>
                <div class="row table-responsive">
                  <table id="dataTableId" class="table table-light table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Artist</th>
                        <th scope="col">Album</th>
                        <th scope="col"> Date</th>
                        <th scope="col">Song Lyrics</th>
                        <th scope="col">Actions</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        foreach ($melodies as $melodie) {
                      ?>
                      <tr id="<?php echo $melodie["id"]?>" title="<?php echo $melodie["titre"]?>" artist="<?php echo $melodie["artiste"]?>" 
                      album="<?php echo $melodie["album"]?>" year="<?php echo $melodie["annee"]?>" lyrics="<?php echo $melodie["paroles"]?>">
                        <th scope="row"><?php echo $melodie["titre"]?></th>
                        <td><?php echo $melodie["artiste"]?></td>
                        <td><?php echo $melodie["album"]?></td>
                        <td><?php echo $melodie["annee"]?></td>
                        <td><?php echo $melodie["paroles"]?></td>
                        <td class="d-flex">
                            <button onclick="edit(<?php echo $melodie['id']?>)" type="button" class="btn btn-warning mx-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                            <button onclick="deletebtn(<?php echo $melodie['id']?>);" type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash3"></i></button>
                        </td>
                      </tr>
                    <?php
                      }
                    ?>
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
<script src="./JS/dashboard.js"></script>
</html>