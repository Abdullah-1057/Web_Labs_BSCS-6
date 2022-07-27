<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    welcome to php
    <?php
    define('PI',3.14);
    $myVar = 2;
    $myvar2 = "abc";
    echo $myVar;
    echo $myvar2;
    echo var_dump($myVar);
    echo  "Hello world $myVar PI ";
    echo  PI;
    $myArr = array("array",20,'ac');
    echo "$myArr[0] ",count($myArr);
    foreach($myArr as $values)
    {
        echo "<br>";
        echo $values;
       
    }
    function print5($number)
    {
        echo "abdullah $number";
        //strlen
        //str_word_count
        //strrev
        //strpos($str,"is")
        //str_replace("is","at",$str)
    }
    print5(50);
    
    ?>
    </div>
   
</body>
</html>
