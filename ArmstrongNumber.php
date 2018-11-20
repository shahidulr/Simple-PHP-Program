<?php
 

$number=$result=$sum=$temp=$flag="";

if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    if(!empty($_POST['number']))
    {
        $flag=1;
         $number=$_POST['number'];
        $result=(int)$number;
        $sum=0;
      
         while($result!=0)
         {
             
           $temp=$result%10;
            $sum=$sum+$temp*$temp*$temp;
            $result=$result/10;
             
         }
          
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
  <title>Armstrong Number or Not</title>
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
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Click Here for Check Armstrong Number or Not</button>
</form> 
   <?php 
    
    if($flag==1)
{
   if($number==$sum)
   {
       echo "<h3 style=\"text-align:center\">Armstrong Number</h3> "; 
   }
 else
 {
      echo "<h3 style=\"text-align:center\">Not Armstrong Number</h3> ";
     
 }
       
             
    
}
   
    ?>
         
</div>

</body>
</html>
