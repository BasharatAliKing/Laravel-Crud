<h1>User Data</h1>
@foreach ($data as $id=>$user )
    <h3>Name: {{$user->name}}</h3>
    <h3>roll: {{$user->roll}}</h3>
    <h3>Address: {{$user->address}}</h3>
@endforeach