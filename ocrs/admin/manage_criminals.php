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
            <h2> <i class="fa-solid fa-gauge" style="margin-right:13px;"></i>Manage Criminals </h2>
        </header>
     <div class="  panel panel-default sammacmedia shadow-lg px-5 py-2 mb-5 bg-body rounded border border-secondary">
      <div class="panel-heading">
        <h3>All Criminals</h3>
      </div>
        <div class="panel-body">
            <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Height </th>
                        <th>weight</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Province </th>
                        <th>District </th>
                        <th> City </th>
                        <th> Photo </th>
                    </tr>
                </thead>
                <?php 
                $select_query = "SELECT * FROM criminals";
                $result_query = mysqli_query($conn, $select_query);
                while($data = mysqli_fetch_assoc($result_query)){
                    // print_r($data);
              ?>
                <tr>
                    <td><?php echo $data['id']?></td>
                    <td><?php echo $data['name']?></td>
                    <td><?php echo $data['surname']?></td>
                    <td><?php echo $data['height']?></td>
                    <td><?php echo $data['weight']?></td>
                    <td><?php echo $data['gender']?></td>
                    <td><?php echo $data['email']?></td>
                    <td><?php echo $data['phone']?></td>
                    <td><?php echo $data['province']?></td>
                    <td><?php echo $data['district']?></td>
                    <td><?php echo $data['city']?></td>
                    <td> <img src="uploads/<?php echo $data['photo']?>" alt="" height="70px" width="70px" ></td>
                    <td>
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                    <a class="btn btn-sm btn-warning mx-2" href="edit_criminals.php?id=<?php echo $data['id']; ?>" role="button">Edit</a>
                    <a class="btn btn-sm btn-danger" href="process/delete_criminals.php?id=<?php echo $data['id']; ?>" role="button">Delete</a>
                    </div>
                    </td>
                </tr>
                <?php
                }?>
               
            </table>
        </div>
      </div>

             <!-- footer part  -->
     <?php require('inc/footer.php'); ?>
    </div>
</div>

   