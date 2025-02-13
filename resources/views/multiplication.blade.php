<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@include('layout.menu')


 <form action="multiply" method="post">
    @csrf
   Enter Your A value <input type="number" name="a" required><br><br>
   Enter Your B value <input type="number" name="b" required><br><br>
   <button>Find Multiply</button>
</form>

<?php 

  if(!empty($pankaj))
  {
       echo "<h2>$pankaj</h2>";
  }

  if(!empty($test))
  {
       echo "<h3>$test</h3>";
  }

?>

</body>
</html>