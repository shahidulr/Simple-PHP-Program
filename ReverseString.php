<?php
 

 $name=$rev=$flag="";
 

if($_SERVER['REQUEST_METHOD']=='POST')
{
    if(!empty($_POST['name']))
    {
      $flag=1;
        $name=$_POST['name'];
    }
    
    
   
         else
     {
         
          echo "<script>alert(\"Please Enter String\")</script>";
     }
    
   
    
}

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reverse String</title>
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
    <h2 style="text-align:center">Enter String</h2>
    <input type="text" class="form-control"  name="name"  value="<?php echo $name?>">
  </div>
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Click Here for Reverse String</button>
</form> 
   <?php 
    
 if($flag==1)
 {
     
    
     $rev=strrev($name);
       
  
       echo "<h3 style=\"text-align:center\">Reverse String is:  $rev</h3> "; 
 

             
    
}    
    

   
    ?>
         
</div>

</body>
</html>
