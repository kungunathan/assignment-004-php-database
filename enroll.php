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
                <ul>
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
                <p class="p-5">
                    Looking for a place to kickstrat your career in technolgy? Whether you are a local, new in town or just crusing through we've got loads of great tips and events for you.
                </p>
            </div>
            <div class="card">
                <h1>Sign up today?</h1>
                <form action="">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fullname" class="form-label">Full Name:</label>
                            <input type="text" class="form-control" placeholder="Enter your full name">
                        </div>
                        <div class="col-lg-6">
                            <label for="phonenumber" class="form-label">Phone Number:</label>
                            <input type="email" class="form-control" placeholder="+2547.....">
                        </div>
                        <div class="col-lg-6">
                            <label for="email" class="form-label">E-mail Address:</label>
                            <input type="email" class="form-control" placeholder="Your e-mail address">
                        </div>
                        <div class="col-lg-6">
                            <label for="gender" class="form-label">What's your gender?</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>--Select your gender--</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                    </div>
                    <p class=" p-5">
                        Inorder to complete your registration to the bootcamp, you are required to select one course you will be undertaking. Please NOTE that this will be your learning track during the two weeks immersion.
                    </p>
                    <label for="course" class= "form-label">What's your preffered course?</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>--Select your course--</option>
                        <option value="1">Web Design</option>
                        <option value="2">Data analysis</option>
                        <option value="3">Cyber security</option>
                    </select>
                </form>
        </div>
    </body>        
</html>