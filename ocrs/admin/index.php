
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel </title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="background-color: #0BE0FD">
    <div class="container">
        <h1>Crime Reporting Login</h1>
        <div class="form-section"> 

            <form action="process/login_process.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" id="username" placeholder=" Username"><br>
                <input type="password" name="password" id="password" placeholder="Enter Password"><br>
                <button type="submit" name="submit">login</button>
            </form>
        </div>
    </div>
</body>

</html>