<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
        <!-- nav bar section start here -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark z-index-1 position-sticky">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Online Crime Reporting System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.html">Blogs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact_us.html">Contact Us</a>
                  </li>
             
                  <li class="nav-item">
                    <a class="nav-link" href="about_us.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="complaints.html">Complaints </a>
                  </li>
                  
                <!-- <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
              </div>
            </div>
          </nav>
        <!-- nav bar section end  here -->


    <div class="container-fluid h-100 z-index-2 " style="max-height: 100vh;">
        <div class="row h-100 position-relative">
            <img class="img-fluid" src="img/crime_banner.jpg" alt="" srcset="" style="max-height: 100vh;">
            <div class=" position-absolute top-50 start-10  col-md-6 px-5 pb-5 pt-3 rounded" style="background-color:rgb(255, 241, 241) ;">
                <h1 class="text-center">Have a Complaint ?</h1>
                <div class=" row gx-5 mt-3">
                  <div class="col-md-4">
                    <a class="btn btn-secondary btn-xl px-5 py-3  " href="login.html" role="button"> Normal Complaints</a> </a> 

                  </div>
                  <div class="col-md-4 offset-md-3">
                    <a class="btn btn-secondary btn-xl  px-5 py-3" href="#" role="button">Emergency complaints </a> 
                  </div>
                </div>

            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>