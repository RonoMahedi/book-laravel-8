<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Book Sharing</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('backend')}}/assets/css/bootstrap.min.css" rel="stylesheet">


  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300i,400,400i,600" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link href="{{asset('backend')}}/assets/css/custom.css" rel="stylesheet">

</head>
<body>

  <div class="top-header">
    <div class="container">
      <div class="dropdown float-right">
        <a class="dropdown-toggle pointer top-header-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i> My Account
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="profile.html">Profile</a>
          <a class="dropdown-item" href="dashboard.html">Dashboard</a>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </div>
      <div class="float-right">
        <a href="" class="top-header-link"><span class="item">10</span> items in wishlist</a>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <div class="main-navbar">
   <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand mr-5" href="index.html">
        <img src="{{asset('backend')}}/assets/images/logo.jpg" class="logo-image">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="top-books.html">Top Books</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter Books By</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Filter By Top Borrowed</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Upload Books</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="upload.html">Upload Now</a>
              <a class="dropdown-item" href="rules.html">Upload Rules</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 search-form" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-secondary my-2 my-sm-0 search-button" type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </nav>
</div>

<div class="main-content">
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide main-slider" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('backend')}}/assets/images/sliders/slider1.png" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to your Book Sharing Platform</h3>
          <p>
            <a href="register.html" class="btn btn-primary slider-link">
              Get Start Now
            </a>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('backend')}}/assets/images/sliders/slider2.png" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to your Book Sharing Platform</h3>
          <p>
            <a href="" class="btn btn-primary slider-link">
              New Account
            </a>
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{asset('backend')}}/assets/images/sliders/slider3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3>Welcome to your Book Sharing Platform</h3>
          <p>
            <a href="" class="btn btn-primary slider-link">
              Borrow Now
            </a>
          </p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel -->


  <div class="top-body pt-4 pb-4">
    <div class="container">
      <div class="row">

        <div class="col-md-3">
          <div class="card card-body single-top-link" onclick="location.href='login.html'">
            <h4>Sign In</h4>
            <i class="fa fa-sign-in-alt"></i>
            <p>
              Sign In To Start Sharing Your Books
            </p>
          </div> <!-- Single Item -->
        </div> <!-- Single Col -->

        <div class="col-md-3">
          <div class="card card-body single-top-link"  onclick="location.href='register.html'">
            <h4>Create New</h4>
            <i class="fa fa-user"></i>
            <p>
              Create New Account
            </p>
          </div> <!-- Single Item -->
        </div> <!-- Single Col -->

        <div class="col-md-3">
          <div class="card card-body single-top-link">
            <h4>Borrow Book</h4>
            <i class="fa fa-cart-plus"></i>
            <p>
              Borrow your needed books
            </p>
          </div> <!-- Single Item -->
        </div> <!-- Single Col -->

        <div class="col-md-3">
          <div class="card card-body single-top-link">
            <h4>Top Searched</h4>
            <i class="fa fa-search"></i>
            <p>
              Top Searched Book Lists
            </p>
          </div> <!-- Single Item -->
        </div> <!-- Single Col -->

      </div>
    </div>
  </div> <!-- End Top Body Links -->

  <div class="advance-search">
    <div class="container">
      <h3>Advance Search</h3>
      <form>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
                <label for="exampleInputEmail1">Book Title/Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Title/Description">
              </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                <label for="exampleInputEmail1">Author</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Author">
              </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
                <label for="exampleInputEmail1">Publication</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Book Publication">
              </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Book Category</label>
                <select class="form-control">
                  <option>Select a category</option>
                  <option>Java Programming</option>
                  <option>C Programming</option>
                  <option>C++ Programming</option>
                </select>
              </div>
          </div>
          <div class="col-md-1">
               <button type="submit" class="btn btn-success btn-lg" name="">
                <i class="fa fa-search"></i> Search
               </button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="book-list-sidebar">
    <div class="container">
      <div class="row">

        <div class="col-md-9">
          <h3>Recent Uploaded Books</h3>

          <div class="row">

            <div class="col-md-4">
              <div class="single-book">
                <img src="{{asset('backend')}}/assets/images/books/book.jpg" alt="">
                <div class="book-short-info">
                  <h5>Java Programming</h5>
                  <p>
                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                  </p>
                  <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

                </div>
              </div>
            </div> <!-- Single Book Item -->
            <div class="col-md-4">
              <div class="single-book">
                <img src="{{asset('backend')}}/assets/images/books/book2.jpg" alt="">
                <div class="book-short-info">
                  <h5>C Programming</h5>
                  <p>
                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                  </p>
                  <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

                </div>
              </div>
            </div> <!-- Single Book Item -->

            <div class="col-md-4">
              <div class="single-book">
                <img src="{{asset('backend')}}/assets/images/books/book1.jpg" alt="">
                <div class="book-short-info">
                  <h5>C++ Programming</h5>
                  <p>
                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                  </p>
                  <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

                </div>
              </div>
            </div> <!-- Single Book Item -->
            <div class="col-md-4">
              <div class="single-book">
                <img src="{{asset('backend')}}/assets/images/books/book3.jpg" alt="">
                <div class="book-short-info">
                  <h5>Java Programming</h5>
                  <p>
                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                  </p>
                  <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

                </div>
              </div>
            </div> <!-- Single Book Item -->
            <div class="col-md-4">
              <div class="single-book">
                <img src="{{asset('backend')}}/assets/images/books/book4.jpg" alt="">
                <div class="book-short-info">
                  <h5>Java Programming</h5>
                  <p>
                    <a href="" class=""><i class="fa fa-upload"></i> Polash Rana</a>
                  </p>
                  <a href="book-view.html" class="btn btn-outline-primary"><i class="fa fa-eye"></i> View</a>
                  <a href="" class="btn btn-outline-danger"><i class="fa fa-heart"></i> Wishlist</a>

                </div>
              </div>
            </div> <!-- Single Book Item -->


          </div>

          <div class="books-pagination mt-5">
            <nav aria-label="...">
              <ul class="pagination">
                <li class="page-item disabled">
                  <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    2
                    <span class="sr-only">(current)</span>
                  </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div> <!-- Book List -->

        <div class="col-md-3">
          <div class="widget">
            <h5 class="mb-2 border-bottom pb-3">
              Categories
            </h5>

            <div class="list-group mt-3">
              <a href="#" class="list-group-item list-group-item-action">
                Programming
              </a>
              <a href="#" class="list-group-item list-group-item-action">Arts</a>
              <a href="#" class="list-group-item list-group-item-action">Banking</a>
              <a href="#" class="list-group-item list-group-item-action">Others</a>
            </div>

          </div> <!-- Single Widget -->

        </div> <!-- Sidebar -->

      </div>
    </div>
  </div>

</div>

<div class="footer-area">
  <div class="container">
    <div class="row">

      <div class="col-md-3">
        <img src="{{asset('backend')}}/assets/images/logo.jpg" class="logo-image">
        <p>
          <address>
            Farmgate, Dhaka-1200
            <br>
            Dhaka
          </address>
          <a href="mailto:support@booksharing.com">support@booksharing.com</a>
        </p>
      </div>

      <div class="col-md-3">
        <h4>Top Links</h4>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Login</a></li>
          <li><a href="">Create New Account</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>


      <div class="col-md-3">
        <h4>Top Links</h4>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Login</a></li>
          <li><a href="">Create New Account</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>


      <div class="col-md-3">
        <h4>Top Links</h4>
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="">Login</a></li>
          <li><a href="">Create New Account</a></li>
          <li><a href="">Privacy Policy</a></li>
        </ul>
      </div>

    </div>

    <p class="text-center">
      &copy; 2019 all rights reserved
    </p>
  </div>
</div>

<script src="{{asset('backend')}}/assets/js/jquery-3.3.1.min.js"></script>
<script src="{{asset('backend')}}/assets/js/popper.min.js"></script>
<script src="{{asset('backend')}}/assets/js/bootstrap.min.js"></script>

</body>
</html>
