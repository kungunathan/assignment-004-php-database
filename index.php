 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
     <title>Homepage</title>
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
    <main class="p-5 bg-light mb-4 " >
        <h1>Welcome, Nathaniel Kung'u</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam ipsa maxime nisi deserunt pariatur. Voluptatum esse corporis est soluta, necessitatibus, nobis blanditiis corrupti libero praesentium alias repudiandae distinctio nemo architecto!</p>
        <button class="btn btn-primary"> Learn more</button>
    </main>
     <div class="container ">
         <div class="row">
             <div class="col-lg-4 col-md-6 col-sd-12">
                 <h1>Header 1</h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque incidunt impedit minus totam, vero cumque doloribus, quidem fuga sed autem cupiditate commodi ab libero, cum deserunt expedita corporis tempora pariatur!</p>
                 <button class="btn btn-primary">View details</button>
             </div>
             <div class="col-lg-4 col-md-6 col-sd-12">
                 <h1>Header 2</h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque incidunt impedit minus totam, vero cumque doloribus, quidem fuga sed autem cupiditate commodi ab libero, cum deserunt expedita corporis tempora pariatur!</p>
                 <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sd-12">
                 <h1>Header 3</h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque incidunt impedit minus totam, vero cumque doloribus, quidem fuga sed autem cupiditate commodi ab libero, cum deserunt expedita corporis tempora pariatur!</p>
                 <button class="btn btn-primary">View details</button>
            </div>
            <div class="col-lg-4 col-md-6 col-sd-12">
                 <h1>Header 4</h1>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque incidunt impedit minus totam, vero cumque doloribus, quidem fuga sed autem cupiditate commodi ab libero, cum deserunt expedita corporis tempora pariatur!</p>
                 <button class="btn btn-primary">View details</button>
           </div>
         </div>
         <div class="row pt-5">
            <!-- Contact us form  -->
            <h1>Contact Us</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo reiciendis excepturi veniam eveniet perferendis nemo quos vero doloremque aspernatur enim hic rerum beatae sed, mollitia omnis, quibusdam expedita accusamus a.</p>
            <form>
                <div class="row">
                     <div class="mb-3 col-lg-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter your first name">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" placeholder="Enter your last name">
                    </div>
                </div>
                <div class="row">
                     <div class="mb-3 col-lg-6">
                        <label for="phoneNumber" class="form-label">Phone number</label>
                        <input type="tel" class="form-control" placeholder="Enter your Telephone number">
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" placeholder="Enter your e-mail">
                    </div>
                </div>
                 <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="mesage" class="form-label">Your message</label>
                        <textarea cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
               <button type="submit" class="btn btn-primary">Send a messsage</button> 
            </form>
         </div>
         <!-- Contact us form ends -->
         <hr>
         <footer>
            &copy; Zalego  Academy 2022
         </footer>
     </div>

     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
     <!-- <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>

 </body>
 </html>