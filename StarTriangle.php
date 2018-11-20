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
   

  <?php
 




    
     
    
     
      for($row=1;$row<=5;$row++)
{
    for($col=5;$col>=$row;$col--)
    {
        echo "*";
    }
          
          echo "<br>";
      }
           
      echo "Triange 2"   ;
            echo "<br>";
           
               for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=$row;$col++)
    {
        echo "*";
    }
                   
                    echo "<br>";
      }
           
        echo "Triange 3"   ;
            echo "<br>";      
           for($row=1;$row<=5;$row++)
{
    for($col=5;$col>=$row;$col--)
    {
        echo "*";
    }
     

    for($col=1;$col<=$row;$col++)
    {
          echo "#"; 
    }
      
    

     for($col=2;$col<=$row;$col++)
    {
          echo "*"; 
    }
    echo "<br>";
}
     
 echo "Triange 4"   ;
            echo "<br>";      
           for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=$row;$col++)
    {
        echo "*";
    }
     

    for($col=5;$col>=$row;$col--)
    {
          echo "#"; 
    }
      
    

    
    echo "<br>";
}
     
   echo "Triange 5"   ;
            echo "<br>";      
           for($row=1;$row<=5;$row++)
{
    for($col=1;$col<=5;$col++)
    {
        echo "*";
    }
     

   
    

    
    echo "<br>";
}
  

?>
           
</div>

</body>
</html>
