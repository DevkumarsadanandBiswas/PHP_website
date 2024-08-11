<!DOCTYPE html>
<html>
    <head>
        <title>
        Life style
        </title>
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type = "text/css" href = "css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  
    </head>

    <body>

    <!--Nav bar section -->
    <?php include 'navbar.php'; ?>
<!--nav bar section ends -->

<!-- Hero section -->
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Technical Developer</h1>
    <p>I am Devkumar S. Biswas, a fourth-year Bachelor of Engineering student specializing in Artificial Intelligence and Data Science at Dr.
 D.Y. Patil Institute of Engineering, Management, and Research, Akurdi, Pune. With a solid foundation in computer science principles,
 demonstrated by my GATE CS/IT 2024 qualification (score: 430/1000, AIR: 9568), I have honed practical skills in various domains
 including web development, Python, C++, data science, and machine learning.</p>
  </div>
</div>
<!-- hero section ends-->

 <!-- contact Form section start --> 
<sections class="my-5">
    <div class="py-5">
        <h2 class="text-center">
           Contact Form
        </h2>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
        <div class="form-group">
           <label for="username">Username:</label>
           <input type="text" class="form-control" placeholder="Enter username" name="user">
        </div>
        <div class="form-group">
           <label for="email">Email address:</label>
           <input type="text" class="form-control" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
           <label for="mobile">Mobile Number:</label>
           <input type="text" class="form-control" placeholder="Enter mobile number" name="mobile">
        </div>
        <div class="form-group">
           <label for="text">Comments:</label>
           <textarea type="text" class="form-control" placeholder="Enter comments" name="comment">
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        </form>
    </div>
</sections>
<!-- contact Form section ends --> 

   <!-- Footer section start -->
<footer>
    <h4 class="p-3 bg-dark text-white text-center">@WebDev</h4>
</footer>
<!-- Footer section start -->
 
 </body>
 </html>