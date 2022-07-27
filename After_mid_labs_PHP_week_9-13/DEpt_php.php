!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Departments at NTU</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Acronym</th>
      <th scope="col">Full Name</th>
     
    </tr>
  </thead>
  <tbody>
<?php
$ass_Demo = [
    "DCS" => "dEPT OF cOMPUTER SCIENCE StringStore",
    "das" => "DEPT OF das StringStore",
    "das2" => "DEPT OF das StringStore2",
    "das3" => "DEPT OF das StringStore3"
    ];
    $ass_Demo[] = "My var NumStore";

for($i=0;$i<=count($ass_Demo);$i++)
{
    print(
        "<tr>
          <th scope='row'>$i</th>
          <td></td>
          <td>".current($ass_Demo)."</td>
            
        </tr>");
        reset($ass_Demo);
        next($ass_Demo); 
}
/*    
$inc = 1;
foreach($ass_Demo as $k => $v){
    
print(
    "<tr>
      <th scope='row'>$inc</th>
      <td>$k</td>
      <td>$v</td>
      
    </tr>");
    print(
        "<tr>
          <th scope='row'>.next($ass_demo)</th>
          <td>$k</td>
          <td>$v</td>
         
        </tr>");
       
    $inc++;
    if($inc==3)
    {
        reset($ass_Demo);
    }   
}
*/
    ?>
    
  </tbody>
</table>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
  </body>
</html>