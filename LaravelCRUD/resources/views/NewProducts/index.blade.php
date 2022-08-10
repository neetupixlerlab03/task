
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Product </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
           
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('newproducts.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>S.No</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($newproducts as $newproduct)
        <tr>
            <td>{{ $newproduct->id }}</td>
            <td><img src="{{ Storage::url($newproduct->image) }}" height="75" width="75" alt="" /></td>
            <td>{{ $newproduct->name }}</td>
            <td>{{ $newproduct->price }}</td>
            <td>{{$newproduct->description }}</td>
            <td>
                <form action="{{ route('newproducts.destroy',$newproduct->id) }}" method="POST">
    
                    <a class="btn btn-primary" href="{{ route('newproducts.edit',$newproduct->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $newproducts->links() !!}
</body>
</html>