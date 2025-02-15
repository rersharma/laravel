<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 align="center">Student record Registration Form</h1>
@include('layout.menu') 
<form action="student" method="post" align="center">
    @csrf
  Enter Name <input type="text" name="name" required><br><br>
  Enter roll <input type="number" name="roll" required><br><br>
  Enter branch <input type="text" name="branch" required><br><br>
  <button>Save Now</button>
</form>
<?php
    if(!empty($ans))
    {
        echo "<h2 align='center'>$ans</h2>";
    }
?>
</body>
</html>