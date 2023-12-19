<?php
include "../Login/koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $gender = isset($_POST['gender']) ? mysqli_real_escape_string($conn, $_POST['gender']) : 'Female';
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);

    // Set the default level to 'user'
    $default_level = 'user';

    // Insert the new user into the database
    $insert_user = mysqli_query($conn, "INSERT INTO tb_login (first_name, last_name, gender, email, username, password, phone_number, level) VALUES ('$first_name', '$last_name', '$gender', '$email', '$username', '$password', '$phone_number', '$default_level')");

    if ($insert_user) {
        echo "<script>alert('Registration successful. You can now login.');
        document.location='../login/index.php';
        </script>";
    } else {
        echo "<script>alert('Registration failed. Please try again later.');
        document.location='registration.php';
        </script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Registration Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper p-t-130 p-b-100 font-poppins" style="background-image: url('kaws9.jpg');">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" name="first_name" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" name="last_name" autocomplete="off">
                                </div>
                            </div>
                        </div>
<!-- ... (previous HTML code) ... -->

<!-- ... (sebelumnya HTML code) ... -->

<div class="col-2">
    <div class="input-group">
        <label class="label">Gender</label>
        <div class="p-t-10">
            <label for="male" class="radio-container m-r-45">Male
                <input type="radio" id="male" value="male" checked="checked" name="gender">
                <span class="checkmark"></span>
            </label>
            <label for="female" class="radio-container">Female
                <input type="radio" id="female" value="female" name="gender">
                <span class="checkmark"></span>
            </label>
        </div>
    </div>
</div>

<!-- ... (sesudahnya HTML code) ... -->


<!-- ... (remaining HTML code) ... -->

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" >
                                </div>
                                <div class="input-group">
                                    <label class="label">Username</label>
                                    <input class="input--style-4" type="text" name="username" autocomplete="off">
                                </div>
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="password" autocomplete="off">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone_number" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                        <div class="p-t-15">
                        <a class="btn btn--radius-2 btn--blue" style="text-decoration:none" href="../index.php" role="button">Back</a>
                        </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->