<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtract App</title>
</head>
<body>
@include('layout.menu')
        <h2>Example of How To Handle Get And Post Method with same link</h2>
        <form action="subtract" method="post">
            @csrf
           Enter your Ist Value <input type="number" name="a" require/><br><br>
           Enter your Iind Value <input type="number" name="b" require/><br><br>
           <button>Click Me</button>
        </form>

        <?php 
   
         if(isset($c))
         {
             echo "<br>Your ans is $c";
         }


        ?>
</body>
</html>