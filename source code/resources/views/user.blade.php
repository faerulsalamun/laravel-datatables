<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Datatables</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <table id="datatables" class="table table-striped" style="width:100%">
                <thead>
                    <th>No</th>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Action</th>
                </thead>    
                <tbody>
                </tbody>    
            </table>    
        </div>   
    </div>    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#datatables').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('user.datatable') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'id'},
                    { data: 'email', name: 'email'},
                    { data: 'name', name: 'name'},
                    { data: 'action', name: 'action', orderable: false,searchable:false},
                ]
            })
        });
    </script>    

</body>
</html>