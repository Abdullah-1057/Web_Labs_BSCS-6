<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link rel="icon" type="image/x-icon" href="National_Textile_University_Logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/StyleSheetMid.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="JS/custom.js" type="text/js"></script>

    <script>
        $(document).ready(function(){
            $("p#CardID1").hide();
            $("p#CardID2").hide();
       $("#btnCard").click(function(){
        $("#CardID1").toggle();      
       });
       $("#btnCard2").click(function(){
        $("p#CardID2").toggle();      
       });
     });
     
     
         </script>

<script>
    $(document).ready(function(){
   $("#abc").mouseenter(function(){
     $("#xyz").show();
   });
     $("#abc").mouseleave(function(){
     $("#xyz").hide();
     
   });
 
 });
     </script>
 





    <title>Mid Evaluation</title>
  </head>
  <body>
  <?php
    if(isset($_GET['uid']))
    {
        print("User Id = ");
        print($_GET['uid']);
            print('<div class="alert alert-success">
            <strong>Sign In Sucessful!</strong> 
          </div>
          ');
      
    }
    ?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">Abdullah</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">NtuSite</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">about us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">contact us</a>
              </li>
              <li class="nav-item dropdown" id="abc">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu" id="xyz">
                  <li><a class="dropdown-item" href="#">Link</a></li>
                  <li><a class="dropdown-item" href="#">Another link</a></li>
                  <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
  
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="nts_gat_test_fall22.png" alt="Los Angeles" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="slider02.jpg" alt="Chicago" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="slider03.jpg" alt="New York" class="d-block w-100">
      </div>
    </div>
  
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  <h3>Student Form</h3>
  <div class="row ">
    <div class="col-lg-5 ">
  <div id= "Formdiv">
   
  </div>
</div>
<div class="col-lg-7 ">
<div class="row ">
    <div class="col-sm-5 ">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <h4 class="card-title" ">Abdullah</h4>
              <p class="card-text" id="CardID1">Some example text some example text. Jane Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary" id="btnCard">See Profile</a>
            </div>
            <img class="card-img-bottom" src="img_avatar1.png" alt="Card image" style="width:100%">
          </div>
    </div>
    <div class="col-sm-5 ">
        <div class="card" style="width: 100%;">
            <div class="card-body">
              <h4 class="card-title" ">Namir</h4>
              <p class="card-text" id="CardID2">Some example text some example text. Jane Doe is an architect and engineer</p>
              <a href="#" class="btn btn-primary" id="btnCard2">See Profile</a>
            </div>
            <img class="card-img-bottom" src="img_avatar1.png" alt="Card image" style="width:100%">
          </div>
    </div>
        
    </div>
</div>
   
</div>
<div class="row ">
<div class="col-sm-3 p-4">
    <h2>Other Links</h2>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar bg-dark">

        <div class="container-fluid">
            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#objectives">Objectives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Ispum">Ispum</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#eligible">Eligible</a>
                </li>
               
            </ul>
        </div>

    </nav>
</div>
<div class="col-sm-8 m-4 mt-5 ">
    <div class="table-responsive">
    <table class="table  table-danger table-striped table-hover table-bordered">

        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>First</th>
                <th>last</th>
                <th>handle</th>
            </tr>
            


        </thead>
        
        <tbody>
            <tr class="table-info">
                <td>1</td>
                <td>First</td>
                <td>last</td>
                <td>handle</td>
            </tr>
            <tr>
                <td>2</td>
                <td>First</td>
                <td>last</td>
                <td>handle</td>
            </tr>
            <tr>
                <td>3</td>
                <td>First</td>
                <td>last</td>
                <td>handle</td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>
<div id="Ispum">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
        eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
        sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore 
            eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
            sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<div id="objectives">
    <h1>University Objectives</h1>
    <p>The objective of the program is to prepare students for successful careers and for advanced graduate study in computer science, by giving them the following qualities:

        Depth: Deep understanding of fundamentals theoretical and practical Computer Science, and the ability to adapt to an ever-changing technological landscape.
        
        Breadth: Knowledge of a broad range of Computer Science skills, tools, and mathematical techniques, and the capability of applying them to analyze and design complex systems.
        
        Reasoning: Capability of solving a wide variety of problems by applying principles of computational thinking.
        
        Teamwork: Habits of working effectively and professionally on diverse projects teams.
        
        Clarity: Ability to communicate technical information clearly and effectively, both orally and in writing.
        
        Integrity: Understanding how to approach social effects of computing ethically and responsibly, and being committed to doing so.
        
        Learning: Interest in life-long learning, to adapt and shape an evolving world.</p>
</div>


<div id="eligible">
    <h1>Eligibility criteria</h1>
  <p>At least 50% marks in the following:

    Intermediate or equivalent (Must have Mathematics as elective subject) or (Pre-Medical as discipline)*
    
    * All such students must pass deficiency courses of Mathematics of 6 credit hours within one year of their regular studies.
    
    Merit Criteria:
    
    Admissions to the Computer Science Programs of the University are decided on the basis of candidates’ marks in:
    
    Marks of Matriculation (35% weightage)
    Marks of Intermediate (65% weightage)
    Note: No Test Required</p>
</div>

<div>
<form method="post" action="SignUp.php">
        <div class="form-group">
          <label for="email">Email address:</label>
          <input type="text" class="form-control" id="email" name="csemail">
        </div>
        <div class="form-group">
          <label for="pwd">Password:</label>
          <input type="text" class="form-control" id="pwd" name="cspwd">
        </div>
       
        <button type="submit" class="btn btn-default">Sign Up</button>
      </form>
</div>

<div>
<form action="SignIn.php" method = "POST">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="csename" placeholder="Your name..">
      <br>
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="cspwd" placeholder="Your last name..">
      <br>
      <label for="country">Country</label>
      <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
      </select>
      <br>
      <input type="submit" value="Submit">
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>



</html>
