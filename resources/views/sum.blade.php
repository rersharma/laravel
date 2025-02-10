<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Addition Application</h1>
@include('layout.menu') 

<form action="sum_cal" method="post" align="center">
    @csrf
Enter Your Ist Value <input type="number" required name="a"><br><br>
Enter Your IInd Value <input type="number" required name="b"><br><br>
<button>Click Here To Find</button>
</form>

<?php 

if(isset($ans))
{
      echo "<h1 align='center'>Your Sum is $ans</h1>";
}
?>
</body>
</html>