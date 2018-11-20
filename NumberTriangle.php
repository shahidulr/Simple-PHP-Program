<?php
 
 $n=$flag="";

 if($_SERVER['REQUEST_METHOD']=='POST' )
{
     if(!empty($_POST['number1']))
     {
         $flag=1;
            $n=(int)$_POST['number1'];
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
  <title>  Triangle</title>
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
     <h2 style="text-align:center">Enter Number of row you want</h2>
    <input type="number" class="form-control"  name="number1"  value="<?php echo $n?>">
  </div>
 
  
  <button type="submit" class="btn btn-default" style="width:100%">Click here for Triangle</button>
</form> 

  <?php
 



 if($flag==1)
{
    
     
    
     
      for($row=1;$row<=$n;$row++)
{
    for($col=$n;$col>=$row;$col--)
    {
        echo "*";
    }
     

    for($col=1;$col<=$row;$col++)
    {
          echo $col; 
    }
      
    

     for($col=2;$col<=$row;$col++)
    {
          echo $row-$col+1; 
    }
    echo "<br>";
}

         
    
    
     
   
    
}

  

?>
           
</div>

</body>
</html>
