<!-- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$dep[] = "dept of CS"; 
$dep[] = "dept of SE";
$dep[] = "dept of IT";
$dep['fd'] = "dept of FD";
$dep['TX'] = "dept of Textile";
$dep[5] = "dept of Textile 2";
$dep[] = "dept of Textile3";
$c_style = ["1","2",3,"DCS"];//only numeric

// only associative
// only associative
$ass_Demo = [
    "DCS" => "dEPT OF cOMPUTER SCIENCE StringStore",
    "das" => "DEPT OF das StringStore"
    ];
$ass_Demo[] = "My var NumStore";

print_r($ass_Demo);
//unset($ass_Demo);
//print_r($ass_Demo);
    foreach($ass_Demo as $v){
        print("<h2>$v");
    }

    foreach($dep as $v){
        print("<h2>$v");
    }
    foreach($c_style as $v){
        print("<h2>$v");
    }
?>
</body>
</html>


