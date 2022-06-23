<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="index.css"> -->
</head>
<body>
    <section class="vh-100" style="background-color: #508bfc;">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 h-100">
              <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center ">
      
                  <h3 class="mb-5">User Sign in</h3>
      
                  <div class="form-outline mb-5 ">
                    <input type="email" id="typeEmailX-2" class="form-control form-control-lg rounded-pill" placeholder="email address" />
               
                  </div>
      
                  <div class="form-outline mb-5">
                    <input type="password" id="typePasswordX-2" class="form-control form-control-lg rounded-pill" placeholder="password" />
                   
                  </div>
      
                  <!-- Checkbox -->
                  <div class="form-check d-flex justify-content-start mb-4">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                    <label class="form-check-label" for="form1Example3"> Remember password </label>
                  </div>
                  
                  <button class="btn btn-primary btn-lg btn-block rounded-pill" type="submit">Login</button>
                  <p class="mt-2">Don't have an account? <a href="register.html" class="link-info">Register here</a></p>
                  <hr class="my-2">
      
                  <!-- <button class="btn btn-md btn-inline-block py-2 btn-primary rounded-pill" style="background-color: #f3331a;"
                    type="submit"><i class="fab fa-google me-2"></i> Sign in with google</button>
                  <button class="btn btn-md btn-inline-block btn-primary mb-2  py-2 rounded-pill" style="background-color: #1c56d4;"
                    type="submit"><i class="fab fa-facebook-f me-2"></i>Sign in with facebook</button>
       -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    
</body>
</html>