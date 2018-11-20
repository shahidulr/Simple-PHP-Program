
       


<!DOCTYPE html>
<html lang="en">
<head>
  <title> Alphabet Triangle</title>
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
     

    for($col=1;$col<=$row;$col++)
    {
          echo chr(64+$col); 
    }
      
    

     for($col=2;$col<=$row;$col++)
    {
          echo chr(65-$col+$row); 
    }
    echo "<br>";
}

           
 
  

?>
           
</div>

</body>
</html>
