<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('calculasTitle')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/32dcd4a478.js" crossorigin="anonymous"></script>
    <style type="text/css">
        body{
            width:100%;
        }
        .sidebar {
            height: 100vh;
        }
        .list-group a{
            text-decoration:none;
        }
        .fill { 
            min-height: 100%;
            height: 100%;
        }
        
        @media print
           {
              p.bodyText {font-family:georgia, times, serif;}
              .noprint
              {
                display:none
              }
                tbody, td, tfoot, th, thead, tr {
                    padding: 0.2em !important;
                }
           }
    </style>
  </head>
  <body class="bg-light">
    <div class="p-2">
        <div class="row g-0"> 
            <div class="col-md-3 d-none d-md-block bg-success">
                <div class="bg-white row g-0 sidebar">
                    <div class="col-10 col-md-6 mx-auto mt-4 text-center">
                        <img class="w-50" src="https://iconape.com/wp-content/files/az/151369/png/151369.png">
                    </div>
                    <div class="col-12 text-center">
                        <h3>Dutch Bangla Bank PLC</h3>
                        <h4>Burichong Bazar, Cumilla</h4>
                        <h5>01678909091</h5>
                    </div>
                    <ul class="list-group rounded-0">
                      <li class="list-group-item h5"><a class="text-success" href="#"><i class="fa-solid fa-gauge"></i> Dashboard </a></li>
                      <li class="list-group-item h5"><a class="text-success" href="{{ route('accountCreation') }}"><i class="fa-duotone fa-solid fa-address-card"></i> Create Account </a></li>
                      <li class="list-group-item h5"><a class="text-success" href="{{ route('acList') }}"><i class="fa-duotone fa-solid fa-users"></i> Account List </a></li>
                      <li class="list-group-item h5"><a class="text-success" href="#"><i class="fa-solid fa-calculator-simple"></i> Debit/Credit</a></li>
                      <li class="list-group-item h5"><a class="text-success" href="#"><i class="fa-solid fa-file-chart-column"></i> Report Generate</a></li>
                      <li class="list-group-item h5"><a class="text-success" href="#"><i class="fa-solid fa-gears"></i> Settings</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-9 row">
                <div class="col-12 noprint">
                    <div class="card rounded-0 border-0">
                        <div class="card-body row align-items-center">
                            <div class="col-12 col-md-4">
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1"><i class="fa-sharp fa-thin fa-magnifying-glass"></i></span>
                                    <input type="text" class="form-control" placeholder="Search......" aria-label="lgoinId" name="loginId" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="col-12 col-md-8 text-end">
                                  <!-- Example split danger button -->
                                    <div class="btn-group">
                                      <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-circle-user"></i>
                                      </button>
                                      <ul class="dropdown-menu rounded-0">
                                        <li><a class="dropdown-item" href="#"><i class="fa-thin fa-key"></i> Change Password</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-thin fa-user"></i> Profile</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-thin fa-server"></i> Server Configuration</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item" href="#"><i class="fa-thin fa-right-from-bracket"></i> Logout</a></li>
                                      </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-12">
                    @yield('calculasBody')
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>