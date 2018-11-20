<?php
 

 $number=$result=$flag=$in="";

if($_SERVER['REQUEST_METHOD']=='POST' )
{
    if(!empty($_POST['number']))
    {
        $in=1;
           $number=$_POST['number'];
        $result=(int)$number;
       
    $flag=0;
    for($i=2;$i<$result;$i++)
    {
       
       
        if($result % $i ==0)
        {
           $flag=1;
            break;
            
        }
        
    }
    }
    else
        {
        
         echo "<script>alert(\"Please Enter Number\")</script>";
    }
    
    
          
      
    
             
    
}

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Prime or Not</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
       <form action="" method="post">
  <div class="form-group">
    <h2 style="text-align:center">Enter a number</h2>
    <input type="number" class="form-control"  name="number"  value="<?php echo $number?>">
  </div>
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Click Here for Check Prime or Not</button>
</form> 
   <?php 
    
    if($in==1)
{
    if($flag==1)
    {
       echo "<h3 style=\"text-align:center;\">Number Not Prime </h3> "; 
    }
    else
        
        {
        
        echo "<h3 style=\"text-align:center;\">Number Is Prime </h3> ";
    } 
 
             
    
}
   
    ?>
         
</div>

</body>
</html>
