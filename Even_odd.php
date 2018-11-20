<?php
 

 $number=$result=$flag="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    if(!empty($_POST['number']))
    {
       $flag=1;
       $number=$_POST['number'];
        $result=(int)$number;
         
    }
    
   else
         {
          
           echo "<script>alert(\"Please Enter a Number \")</script>";
      }
 
             
    
}

  

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Even Or Odd</title>
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
    <input type="number" class="form-control" id="number" name="number"  value="<?php echo $number?>">
  </div>
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Click Here for Check  Even Or Odd</button>
</form> 

    <?php 
    
   if($flag==1)
{
    
         if($result%2==0)
    {
        echo "<h1 style=\"text-align:center;\">NUMBER IS EVEN</h1>";
    }
    else
    {
        
        echo "<h1 style=\"text-align:center;\">NUMBER IS ODD</h1>";
    }
        
 
             
    
}
   
    ?>
           
</div>

</body>
</html>
