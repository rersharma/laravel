<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"> 
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js"></script>
</head>
<body>
@include('layout.menu')
<div class="container mt-5" >
    <div class="row">
        <div class="col-sm-6 offset-sm-3" style="border:1px solid grey;padding:10px;">
            <h2 class="text-center mb-4"> Student List</h2>
<table id="mystudent" class="table">
        <thead>
                <tr>
                    <th>Student Id</th>
                    <th>Student Name</th>
                    <th>Student Roll</th>
                    <th>Student Branch</th>
                </tr>
        </thead>

        <tbody>
             @foreach($students as $obj)
                <tr>
                    <td>{{$obj->id}}</td>
                    <td>{{$obj->name}}</td>
                    <td>{{$obj->roll}}</td>
                    <td>{{$obj->branch}}</td>
                </tr>
            @endforeach
        </tbody>
</table>
</div>
</div>
</div>


<script>
 $(document).ready(()=>
 {
   $("#mystudent").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
 });
</script>
</body>
</html>