<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>All User Data</h1>
        <a href="newuser" class="btn btn-sm btn-success">Add User</a>
        <div class="row">
            <div class="col-md-8">
                <table class="table border table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Roll</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $id=>$user )
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->roll}}</td>
                            <td>{{$user->address}}</td>
                            <td>
                                <a href="{{route('viewuser',$user->id)}}" class="btn btn-sm btn-primary">View</a>
                                <a href="{{route('deleteuser',$user->id)}}" class="btn btn-sm btn-danger">Delete</a>
                                <a href="{{route('updateuser',$user->id)}}" class="btn btn-sm btn-warning">Update</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>