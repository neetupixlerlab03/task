<html>
    <head>
        <title>Test Crud</title>
    </head>
    <body>
      <table border="2px">
        <tr>
            <th>S.No.</th>
            <th>Name</th>
            <th>Image</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($tests as $test)
        <tr>
            <td>{{ $test->id }}</td>
            <td>{{$test->name}}</td>
            <td><img src="{{storage::url($test->image)}}" height="75" width="75" alt="" /></td>
            <td>{{$test->price}}</td>
            
            <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>

</tr>
@endforeach
</table>
    </body>
</html>