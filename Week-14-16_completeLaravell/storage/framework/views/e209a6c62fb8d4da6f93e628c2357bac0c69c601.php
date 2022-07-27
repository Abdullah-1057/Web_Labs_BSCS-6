
<?php $__env->startSection('title','All students'); ?>
<?php $__env->startSection('navbar'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page one</a></li>
      <li><a href="#">Page two</a></li>
      <li><a href="#">Page three</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Basic Navbar Example</h3>
  <p>A navigation bar is a navigation header that is placed at the top of the page.</p>
</div>
<?php $__env->startSection('mainContent'); ?>
<h1>Namir Don</h1>
  <h2>Ubaid Pro</h2>
  <h3>Rafiq saab</h3>
 
<?php $__env->stopSection(); ?>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laravelProjects\bscs\resources\views/All.blade.php ENDPATH**/ ?>