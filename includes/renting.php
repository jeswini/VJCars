<?php
    include_once 'conn.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body style="background-color:#ADD8E6">
<nav class="navbar navbar-expand-lg navbar-inverse navbar-dark d-none d-lg-block bg-dark navbar-fixed-top" style="z-index: 2000;">
      <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand" target="_blank" >
          <strong>VJCARs</strong>
        </a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
          aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarExample01">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" rel="nofollow" href = "renting.php"
                target="_blank">rent a car</a>
            </li>
            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          queries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">query1</a>
          <a class="dropdown-item" href="query2.php">query2</a>
        </div>
        <li class="nav-item">
              <a class="nav-link" rel="nofollow" href = "loginactual.php"
                target="_blank">logout</a>
            </li>
          </ul>
          
        </div>
      </div>
    </nav>
<section class="text-center" >
        <h4 class="mb-5"><strong>miscellany</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/audi.jpg" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">AUDI</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/bmw.webp" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">BMW</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">8</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/chevrolet.webp" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">chevrolet</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/ford.jpg" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">ford</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/honda.jpg" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">honda</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/hyundai.webp" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Hyundai</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/kia.webp" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">kia</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">9</a>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/mercedes.webp" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">mercedes</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/nissan.png" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Nissan</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/toyota.avif" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">toyota</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="/images/tesla.avif" class="img-fluid" class="img-fluid" alt="Responsive image">
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">tesla</h5>
                <p class="card-text">
                   Available number of cars:
                </p>
                <a href="#!" class="btn btn-primary">7</a>
              </div>
            </div>
          </div>
        </div>
      </section>
        <hr/>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-8">
                    <div>
                        <div class="card" alignment="center">
                            <div class="card-body">
                                <h5 class="card-title">Rent Card</h5>
                                <p class="card-text">
                                    Choose your Kind of Car
                                </p>
                                <form action="rentingactual.php" method = "POST" >
                                    <div class="form-group">
                                    <label for="cars">Please provide username:</label>
                                    <input class="form-control" type="text" name="username" placeholder="Username">
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="cars">Choose a car:</label>
                                    <select class="form-control" id="cars" name="carmake" placeholder = "car">
                                        <option value="" disabled selected hidden>Choose car</option>
                                        <option value="chevrolet">chevrolet</option>
                                        <option value="Honda">Honda</option>
                                        <option value="Hyundai">Hyundai</option>
                                        <option value="audi">Audi TT</option>
                                        <option value="BMW">BMW</option>
                                        <option value="ford">ford</option>
                                        <option value="kia">Kia</option>
                                        <option value="Nissan">Nissan</option>
                                        <option value="mercedes">mercedes</option>
                                    </select>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="cars">Choose a car model name:</label>
                                    <select class="form-control" id="cars" name="carmodelname">
                                        <option value="" disabled selected hidden>Choose model</option>
                                        <option value="Bolt">Bolt</option>
                                        <option value="Civic">Civic</option>
                                        <option value="Accord">Accord</option>
                                        <option value="Elantra">Elantra</option>
                                        <option value="AB">AB</option>
                                        <option value="Sprinter">Sprinter</option>
                                        <option value="Sienna">Sienna</option>
                                    </select>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="cars">Choose a car type:</label>
                                    <select class="form-control" id="cars" name="carmodeltype">
                                        <option value="" disabled selected hidden>Choose car type</option>
                                        <option value="Small">Small</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Luxury">Luxury</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="Large">Large</option>
                                        <option value="Van">Van</option>
                                    </select>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="cars">Number of days:</label>
                                    <input class="form-control" type="text" name="days" placeholder="Select Days">
                                    <br>
                                    </div>
                                    <div class="form-group">
                                    <label for="cars">Choose a pickup location:</label>
                                    <select class="form-control" id="cars" name="carlocation">
                                        <option value="" disabled selected hidden>Choose location</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                    </div>
                                    <br>

                                    <div class="form-group">
                                    <label for="cars">Choose from Date</label>
                                    <input class="form-control" type="date" name="from" placeholder="from" required pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])/(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])/(?:30))|(?:(?:0\[13578\]|1\[02\])-31))" >
                                    </div>
                                        <br>

                                    <div class="form-group">
                                    <label for="cars">Choose to Date</label>
                                    <input class="form-control" type="date" name="to" placeholder="to" required pattern="(?:19|20)\[0-9\]{2}-(?:(?:0\[1-9\]|1\[0-2\])/(?:0\[1-9\]|1\[0-9\]|2\[0-9\])|(?:(?!02)(?:0\[1-9\]|1\[0-2\])/(?:30))|(?:(?:0\[13578\]|1\[02\])-31))" />
                                    </div>
                                        <br>

                                    <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="submit">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
</body>
