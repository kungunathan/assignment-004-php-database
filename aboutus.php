<?php
    //1/ database connection
    $server = "localhost";
    $username ="root";
    $password = "";
    $database = "web2";

    $conn = mysqli_connect($server,$username,$password,$database);

    if( isset($_POST["submitButton"]))
    {
        //fetch form data
        $email = $_POST['email'];

        $insertData = mysqli_query($conn, "INSERT INTO 
        subscribers(email)
        VALUES('$email')");
         if($insertData){
            echo "Data submitted successfully";
        }
        else{
            echo "error occured";
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
    <title>About us</title>
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
     <main class="p-5 bg-secondary mb-4">
        <h1>About us</h1>
        <p>
            This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.
        </p>
     </main>
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Our program</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam commodi dolore vero praesentium nisi quaerat culpa ea unde, quos distinctio incidunt, velit ad! Beatae vel a voluptate architecto quaerat saepe commodi, quis in nobis, aliquid corrupti repellendus ab, vero ipsa?
                </p>
            </div>
            <div class="col-lg-6">
                <img src="laptop1.jfif" alt="Laptop image" class="rounded">
            </div>
        </div>
        <div class="row ">
           <div class="col-lg-4">
             <div class="card" style="width: 18rem 18px;">
                 <h1>Skill discovery</h1>
                 <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic delectus officiis nobis accusamus magnam?
                 </p>
                 <button class="btn btn-primary">View details</button>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="card" style="width: 18rem 18px;">
                 <h1>Upskill Program</h1>
                 <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic delectus officiis nobis accusamus magnam?
                 </p>
                 <button class="btn btn-primary">View details</button>
             </div>
           </div>
           <div class="col-lg-4">
             <div class="card" style="width: 18rem 18px;">
                 <h1>Path Finding Program</h1>
                 <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic delectus officiis nobis accusamus magnam?
                 </p>
                 <button class="btn btn-primary">View details</button>
             </div>
           </div>
    <form action="aboutus.php" method = "POST">
        <div class="row">
            <p>Subscribe to get information, latest news about Zalego Academy</p>
            <div class="mb-3 col-lg-6">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" name ="email" class="form-control" placeholder="Your e-mail address">
                <button type="submit" name = "submitButton" class="btn btn-primary">Subscribe</button>
            </div>
        </div>
    </form>
    </div>
    <hr>
    <footer>
        &copy; Zalego academy 2022
    </footer>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

</body>
</html>