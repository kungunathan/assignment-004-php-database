<?php
    //1 database connection
        $server = "localhost";
        $username ="root";
        $password = "";
        $database = "web2";

    $conn = mysqli_connect($server,$username,$password,$database);

    if( isset($_POST["submitApplication"]))
    {
        //fetch form data
        $fullname = $_POST['fullname'];
        $phonenumber = $_POST['phonenumber'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $course = $_POST['course'];

        $insertData = mysqli_query($conn, "INSERT INTO 
        enrollment(fullname,phonenumber,email,gender,course)
        VALUES('$fullname','$phonenumber','$email','$gender','$course')");
         if($insertData){
            echo "Data submitted successfully";
        }
        else{
            echo "Error occured";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="font-awesome\css\font-awesome.min.css">
        <title>Enroll now</title>
    </head>
    <body>
        <!-- Navbar design begins -->
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
             <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Zalego Academy</a>
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menus">
                    <div class="navbar-nav">
                        <a href="index.php" class="nav-link active">Home</a>
                        <a href="aboutus.php" class="nav-link">About us</a>
                        <a href="enroll.php" class="nav-link btn btn-primary">Register now</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Navbar design ends here -->
        <div class="container">
            <main class="p-5 bg-secondary mb-4">
                <h1>JULY SOFTWARE ENROLLMENT CAMP</h1>
                <ul style="list-style-type:none">
                    <li>
                        <span><i class="fa fa-calendar" aria-hidden="true"></i></span>
                        <span>20th July 2022 </span>
                    </li>
                    <li>   
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                        <span>Zalego academy,<br>Devan plaza</span>
                    </li>
                </ul>
            </main>
            <div class="row">
                <p class=" p-5">
                    Looking for a place to kickstrat your career in technolgy? Whether you are a local, new in town or just crusing through we've got loads of great tips and events for you.
                </p>
            </div>
            <div class="card p-5">
                <h1 class="text-primary">Sign up today?</h1>
                <form action="enroll.php" method = "POST">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label"><b>Full Name:</b></label>
                            <input type="text" name = "fullname" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="col-lg-6">
                            <label for="phonenumber" class="form-label"><b>Phone Number:</b></label>
                            <input type="tel" name = "phonenumber" class="form-control" placeholder="+2547.....">
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label"><b>E-mail Address:</b></label>
                            <input type="email" name = "email" class="form-control" placeholder="Your e-mail address">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label"><b>What's your gender?</b></label>
                            <select class="form-select" aria-label="Default select example" name = "gender">
                                <option selected>--Select your gender--</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <p class=" p-5">
                        Inorder to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the two weeks immersion.
                    </p>
                    <label for="course" class= "form-label">What's your preffered course?</label>
                    <select class="form-select" aria-label="Default select example" name = "course">
                        <option selected>--Select your course--</option>
                        <option value=">Web Design">Web Design</option>
                        <option value="Data analysis">Data analysis</option>
                        <option value="Cyber security">Cyber security</option>
                    </select>
                    <p>
                        You agree by providing your information you understand allour data privacy and protection policy outlined in our Terms & conditions and the privacy policy statements.
                    </p>
                    <div class="row">
                        <div class="col-lg-8">
                            <input type="checkbox" name="agreement" id="Agree to terms and conditions">Agree to terms and conditions</input>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" name ="submitApplication" class = "btn btn-primary">Submit application</button>
                         </div>
                    </div>
                    </form>
            </div>  
            <form action="aboutus.php" method = "POST">
                <div class="row">
                    <p class = "text-secondary">Subscribe to get information, latest news about Zalego Academy</p>
                    <label for="email" class="form-label"><b>E-mail:</b></label>
                    <div class="mb-3 col-lg-8">
                        <input type="email" name ="email" class="form-control" placeholder="Your e-mail address">
                    </div>
                    <div class="mb-3 col-lg-4">
                        <button type="submit" name = "submitButton" class="btn btn-primary">Subscribe</button>
                    </div>
                </div>
            </form>
        
            <hr>
            <footer>
                &copy; Zalego academy 2022
            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
    </body>        
</html> 