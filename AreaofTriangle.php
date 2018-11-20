<?php
 
$base=$height=$area=$flag1=$flag2="";

 if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    
     
        
   
      if(!empty($_POST['number1']))
    {
        $flag1=1;
       
           $base=(float)$_POST['number1'];
      
    }
    
      
   
     
    
     else{
         
         
         echo "<script>alert(\"Please Enter Base\");</script>";
     }
     
        if( !empty($_POST['number2']))
    {
      $flag2=2;  
       
        $height=(float)$_POST['number2'];
    }
    
      
   
     
    
     else{
         
         
         echo "<script>alert(\"Please Enter Height\");</script>";
     }
   
    
     
   
    
}

  

?>
       


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Area of Triangle</title>
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
     <h2 style="text-align:center">Enter number 1</h2>
    <input type="number" class="form-control"  name="number1"  value="<?php echo $base?>">
  </div>
  <div class="form-group">
     <h2 style="text-align:center">Enter  number 2</h2>
    <input type="number" class="form-control"  name="number2"  value="<?php echo $height?>">
  </div>
  
  <button type="submit" class="btn btn-default" style="width:100%">Area of Triangle</button>
</form> 

  <?php
 



 if($flag1==1 && $flag2==2 )
{
    
    
     $area=(0.5)*$base*$height;
    
   
      echo "<h3 style=\"text-align:center\">Area of Triangle $area</h3>";
    
    
     
   
    
}

  

?>
           
</div>

</body>
</html>
