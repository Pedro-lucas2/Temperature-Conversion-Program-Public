<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>

<?php
   $date = date("l");
   
    switch($date){
        case 'Monday':
            echo"$date";
            break;
        case 'Tuesday':
            echo"$date";
            break;
        case 'Weednesday':
            echo"$date!";
            break;  
        case 'Thursday':
            echo"$date!";
            break;    
        default:
            echo"$date!";
            break;  
   }
   
?>