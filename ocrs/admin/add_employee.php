
<?php require('inc/toppart.php'); ?>

<div class="container1">
    
    <!-- sidebar menu section start here -->
    <?php require('inc/sidebar.php'); ?>
    <!-- sidebar menu section end here -->

    <!-- main dashboard section start -->
    <div class="main-section1 ">
        <!-- navabar section start here -->
        <?php require('inc/navbar.php'); ?>
        <!-- navabar part section end here -->
        <header>
            <h2> <i class="fa-solid fa-gauge" style="margin-right:13px;"></i>Add Employee </h2>
        </header>

        <?php
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $access = $_POST['access'];
            $gender = $_POST['gender'];
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $cpassword = md5($_POST['cpassword']);

            if($name != "" && $email != "" && $phone != "" && $password !="" ){
                if($password == $cpassword){
                    $select_query = "INSERT INTO employees(name, surname, email, phone,access, gender,username, password) 
                    VaLUE('$name', '$surname', '$email', '$phone', '$access','$gender','$username', '$password')";
                    $result_query = mysqli_query($conn, $select_query);

                }else{
                    ?>
                   <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Incorrect!</strong> Password must be same in both field.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <?php
                }
                }else{
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                     <strong>Incorrect!</strong> All fields are required.
                     <button type="button" class="btn-close " data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>
                     <?php

            }
            
            if($result_query){
             echo '<meta http-equiv="refresh" content="0; URL=manage_employee.php?msg=asuccess"/>';
            }

        }

            ?>
        <div class="panel panel-default sammacmedia shadow-lg px-5 py-2 mb-5 bg-body rounded">
            <div class="panel-heading"> <h3 class="fw-bold">Add Employee</h3></div>
            <div class="panel-body">
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];  ?>" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" pattern="[A-Za-z]{3,}" required>
                        </div>
                        <div class="col-lg-6">
                            <label>Surname</label>
                            <input type="text" class="form-control" name="surname" pattern="[A-Za-z]{3,}" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="col-lg-6">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone"
                                 placeholder="9875832463" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Access Level</label>
                            <select class="form-control" name="access">
                                <option  value="1" >1</option>
                                <option  value="2" >2</option>
                                <option  value="3" >3</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label>Gender</label>
                            <select class="form-control" name="gender">
                                <option value="f" > F</option>
                                <option value="m">M</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-lg-6">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" pattern="[A-Za-z]{3,}">
                        </div>
                        <div class="col-lg-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" >
                        </div>
                        <div class="col-lg-3">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="cpassword">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6 col-sm-6 ">
                            <button type="submit" name="submit" class="btn btn-success btn-block"><span
                                    class="fa fa-plus"></span> Process</button>
                        </div>
                    
                        <div class="col-md-6 col-sm-6 ">
                             <button type="reset" class="btn btn-warning btn-block"><span class="fa fa-times">
                                </span>Cancel</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- footer part  -->
        <?php require('inc/footer.php'); ?>

 