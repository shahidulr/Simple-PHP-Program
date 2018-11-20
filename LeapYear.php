<?php
 

 $year=$flag="";

 if($_SERVER['REQUEST_METHOD']=='POST' )
{
     
     if(  !empty($_POST['number1']))
     {
         $flag=1;
         $year=(int)$_POST['number1'];
     }
    
    
     else
     {
         
         
             
        
         echo "<script>alert(\"Please Enter Year\")</script>";
    
     
     }
        
   
     
    
     
   
    
}

  

?>
       


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Leap Year</title>
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
     <h2 style="text-align:center">Enter Year  (e.g:2015)</h2>
    <input type="number" class="form-control"  name="number1"  value="<?php echo $year?>">
  </div>
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Check Leap Year or Not</button>
</form> 

  <?php
 



 if($flag==1)
{
    
    
     if($year%4==0 && $year%100!=0  ||   $year%400==0)
     {
         
         echo "<h3 style=\"text-align:center\">$year  is leap year</h3>";
         
         
     }
     else
           {
         
         echo "<h3 style=\"text-align:center\">$year  is not leap year</h3>";
         
         
     }
         
    
    
     
   
    
}

  

?>
           
</div>

</body>
</html>
